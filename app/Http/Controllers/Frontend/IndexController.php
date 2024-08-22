<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostAds;
class IndexController extends Controller
{
    public function index()
    {
       return view ('web.home');
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

}
