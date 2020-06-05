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
        Cart::create([
            'user_session_id' => $user_id,
            'product_id' => $product_id,
            'quantity' => '5'
        ]);
        return response()->json(['success'=>'Thêm sản phẩm vào giỏ hàng thành công!']);
    }
    
    public function showProduct(Request $request)
    {
        $session_id = $request->get('user');
        $productInCart = Cart::where('user_session_id',$session_id)->get();
        // echo session_id();
        foreach ($productInCart as $product) {
            $price = 0;
            if ($product->productInCart->promotion != null) {
                $price = number_format($product->productInCart->promotion*1000, 0, ',', '.' );
            } else {
                $price = number_format($product->productInCart->price*1000, 0, ',', '.' );
            }
            echo '<tr>
            <th scope="col">
                <img src="'.asset('images/'.json_decode($product->productInCart->image)[0]).'" style="width: 80px; height: 80px;" alt="no photo" class="img-fluid">
            </th>
            <th scope="col" class="info-card">
                '. $product->productInCart->name . '<br>
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
}   