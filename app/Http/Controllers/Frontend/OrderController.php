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
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

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
            session_start();
        }
        $provinces = Province::pluck("name","id");
        $posts = Post::all();
        $categories = Category::all();
        $session_id = session_id();
        $productInCart = Cart::where('user_session_id',$session_id)->get();
        return view('frontend.order.order-info',compact('productInCart','posts','categories','provinces'));
    }
    
    public function getDistrictList(Request $request)
    {
        $districts = District::where("province_id",$request->province_id)->pluck("name","id");
        return response()->json($districts);
    }

    public function getWardList(Request $request)
    {
        $wards = Ward::where("district_id",$request->district_id)->pluck("name","id");
        return response()->json($wards);
    }
}   