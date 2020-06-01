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
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
    
    public function show($slug)
    {
        
    }
}   