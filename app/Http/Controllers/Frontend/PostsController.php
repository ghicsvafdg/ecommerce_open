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
    $posts = Post:: all();
    return view('frontent.news.news', compact('posts'));
    }
}
