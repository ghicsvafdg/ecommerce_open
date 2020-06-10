<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request) {
        if (!Auth::check()) {
            session_start();
        }
        $posts = Post::all();
        $categories = Category::all();
        $session_id = session_id();
        $count = 1;
        $productInCart = Cart::where('user_session_id',$session_id)->get();
        $sum = 0;

        foreach($productInCart as $product) {
            if ($product->productInCart->promotion != null) {
                $sum = $sum + $product->quantity*$product->productInCart->promotion;
            } else {
                $sum = $sum + $product->quantity*$product->productInCart->price;
            }
        }
        // echo session_id();
        return view('frontend.cart.cart-detail',compact('productInCart','posts','categories','count','sum'));
    }

    public function payment() {
        if (!Auth::check()) {
            session_start();
        }
        $categories=Category::all();
        // $posts=Post::all();
        // $detail=Post::where('slug', '=', $slug)->first();
        // return view('frontend.news.news-detail', compact('posts', 'categories', 'detail' ));
    }
}
