<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
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
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function addCart(Request $request)
    {
        $user_id = $request->get('user');
        $product_id = $request->get('product');
        $product_color = $request->get('product_color');
        $product_size = $request->get('product_size');
        $product_quantity = $request->get('product_quantity');

        $product = Product::where('id',$product_id)->first();
        $data = [
            'product_name' => $product->name,
            'product_slug' => $product->slug,
            'color' => $product_color,
            'size' => $product_size,
            'quantity' => $product_quantity,
            'quantity_origin' => $product->quantity,
            'product_promotion' => $product->promotion,
            'product_price' => $product->price,
            'product_img' => json_decode($product->image)[0]
        ];
        Session::push('products', $data);
        return response()->json(['success'=>'Thêm sản phẩm vào giỏ hàng thành công!']);
    }
    
    public function showProduct(Request $request)
    {
        // $session_id = $request->get('user');
        $productInCart = Session::all();
        foreach ($productInCart['products'] as $product) {
            $price = 0;
            if ($product['product_promotion'] != null) {
                $price = number_format($product['product_promotion']*1000, 0, ',', '.' );
            } else {
                $price = number_format($product['product_price']*1000, 0, ',', '.' );
            }
            echo '<tr>
            <th scope="col">
                <img src="'.asset('images/'.$product['product_img']).'" style="width: 80px; height: 80px;" alt="no photo" class="img-fluid">
            </th>
            <th scope="col" class="info-card">
                '. $product['product_name'] . '<br>
                <span style="color: #ff7f0b;">'.$price.'đ</span>
            </th>
            <th scope="col">
                <button type="submit" class="my-2 btn-btn-delete">
                    <i class="mr-1 fas fa-trash-alt"></i> Xóa
                </button>
            </th>
        </tr>';
        }
    }

    public function detailCart(Request $request) {
        if (!Auth::check()) {
            session_start();
        }
        $posts = Post::all();
        $categories = Category::all();
        $session_id = session_id();
        $count = 1;
        $productInCart = Session::all();
        $sum = 0;
        foreach($productInCart['products'] as $product) {
            if ($product['product_promotion'] != null) {
                $sum = $sum + $product['quantity']*$product['product_promotion'];
            } else {
                $sum = $sum + $product['quantity']*$product['product_price'];
            }
        }
        return view('frontend.cart.cart-detail',compact('productInCart','posts','categories','count','sum'));
    }
}   