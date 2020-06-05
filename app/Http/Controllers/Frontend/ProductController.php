<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($slug){
        $categories = Category::take(5)->get();
        $product = Product::where('slug', '=', $slug)->first();
        $sameCate = Product::where('category_id', '=', $product->category_id)->get();
        $posts = Post::all();
        $count = 1;
        return view('frontend.product.product-detail', compact('product', 'categories', 'count', 'posts', 'sameCate'));
    }
}
