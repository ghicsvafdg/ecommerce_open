<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $categories=Category::all();
        $posts = Post:: all();
        return view('frontend.news.news', compact('posts', 'categories' ));
    }

    public function detail($slug){
        $categories=Category::all();
        $posts=Post::all();
        $detail=Post::where('slug', '=', $slug)->first();
        return view('frontend.news.news-detail', compact('posts', 'categories', 'detail' ));
    }
}
