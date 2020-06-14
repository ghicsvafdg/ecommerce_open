<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Banner;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Category;
use App\Models\FooterPost;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Voucher;
use App\Models\Ward;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(Request $request)
    {
        if (!Auth::check()) {
            $getProductInCart = Session::all();
            $productInCart = (object) $getProductInCart['products'];
        } else {
            $productInCart = Cart::where('user_id',Auth::user()->id)->get();
        }
        $provinces = Province::pluck("name","id");
        $posts = Post::all();
        $categories = Category::all();
        $address= Address::all();
        
        $sum = 0;
        foreach($productInCart as $product) {
            if ($product->productInCart->promotion != null) {
                $sum = $sum + $product->quantity*$product->productInCart->promotion;
            } else {
                $sum = $sum + $product->quantity*$product->productInCart->price;
            }
        }
        return view('frontend.order.order-info',compact('productInCart','posts','categories','provinces','sum','address'));
    }
    
    // get district list
    public function getDistrictList(Request $request)
    {
        $districts = District::where("province_id",$request->province_id)->pluck("name","id");
        return response()->json($districts);
    }

    // get ward list
    public function getWardList(Request $request)
    {
        $wards = Ward::where("district_id",$request->district_id)->pluck("name","id");
        return response()->json($wards);
    }

    public function checkVoucher(Request $request)
    {
        $voucher = $request->get('voucher_code');
        $total = $request->get('total');
        $getVoucher = Voucher::where('code',$voucher)->first();
        if ($getVoucher != null) {
            $newPrice = $total - $getVoucher->value;
            $price = number_format($newPrice*1000, 0, ',', '.' )."đ";

            $data = [
                'price' => $price,
                'text'  => "Thêm mã thành công!"
            ];
            return response()->json($data);
        } else if ($getVoucher->times_used < 1) {
            $price = number_format($total*1000, 0, ',', '.' )."đ";
            return response()->json(['error' => $price]);
        }
        else {
            $price = number_format($total*1000, 0, ',', '.' )."đ";
            return response()->json(['error' => $price]);
        }
    }

    public function createOrder(Request $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $user = null;
        $productInCart = null;
        if (Auth::check()) {
            $user = Auth::user()->id;
            $productInCart = Cart::where('user_id',$user)->get();
        } else {
            $products = Session::all();
            $productInCart = (object) $products['products'];

        }
        // dd($productInCart);
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $province = Province::where('id',(int)$request->get('province'))->first()->name;
        $district = District::where('id',(int)$request->get('district'))->first()->name;
        $ward = Ward::where('id',(int)$request->get('ward'))->first()->name;
        $address = $request->get('address');

        $order_info = "Người nhận: ".$name. "\n".
                    "Điện thoại: ".$phone. "\n".
                    "Email: ".$email. "\n".
                    "Địa chỉ nhận: ".$province. ", " .$district. ", ". $ward. "\n" .
                    $address;

        $paymentMethod = $request->get('paymentmethod');
        $voucher = $request->get('voucher');
        $total = $request->get('total');
        $realPrice = 0;

        $checkVoucher = Voucher::where('code',$voucher)->first();
        if ($checkVoucher == null) {
            $realPrice = $total;
        } else {
            $realPrice = $total - $checkVoucher->value;
            $checkVoucher->times_use = $checkVoucher->times_use - 1;
            $checkVoucher->save();
        }
        
        $code = "VBB".date('ymdHis');

        // save in order table
        $order = Order::create([
            'code' => $code,
            'user_id' => $user,
            'order_info' => $order_info,
            'voucher_used' => $voucher,
            'total_price' => $realPrice,
            'payment_method' => $paymentMethod
        ]);

        $order_code = Order::orderBy('created_at', 'desc')->first();
        // save in detail order table
        foreach ($productInCart as $product) {
            $saveOrder = new OrderDetail();
            $saveOrder->order_id = $order_code->id;
            $saveOrder->product_id = $product->productInCart->id;
            $saveOrder->quantity = $product->quantity;
            $saveOrder->size = $product->size;
            $saveOrder->color = $product->color;
            $saveOrder->save();
        }

        // delete in cart
        if (Auth::check()){
            Cart::where('user_id',$user)->delete();
        } else {
            // Cart::where('user_session_id',session_id())->delete();
        }

        return redirect()->route('index')->with('success','Đặt hàng thành công!');
    }
}   