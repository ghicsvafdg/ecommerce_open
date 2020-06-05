<?php

namespace App\Http\Controllers;

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

class IndexController extends Controller
{
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        if (!Auth::check()) {
            session_start();
        }
        $posts = Post::all();
        $categories = Category::all();
        $count = 1;
        return view ('index',compact('posts','categories','count'));
    }
    
    public function show($slug)
    {
        
    }
}   