<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PostAds;
class IndexController extends Controller
{
    public function index()
    {
        $category = Category::get();
       return view ('web.home',get_defined_vars());
    }
    public function postCategory(){
        $post = PostAds::with('user')->get();
        return view('web.postcategory', compact('post'));
    }
    public function postDetail($id){
        $DetailAD = PostAds::find($id);
        $relatedPost = PostAds::get();
        // $review = Review::get();
        return view('web.postDetail',get_defined_vars());
    }
    public function submitReviews(Request $request){
            return $request;
    }
}
