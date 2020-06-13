<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductCategory extends Controller
{
    public function index($id){
        $posts = Post::all();
        $categories = Category::all();
        $name1 = Category::where('id', '=', $id)->first();
        $name= $name1->name;
        $address= Address::all();
        $count = 1;
        $product = Product::where('category_id', '=', $id)->get();
        return view('frontend.productByCate.product', compact('name','product', 'posts','categories','count', 'address'));
    }
}
