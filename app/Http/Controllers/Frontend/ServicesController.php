<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PostAds;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
         $vehicles = PostAds::get();
        return view('frontend.postCategory',get_defined_vars());
    }
    public function details($id){
       $item=PostAds::find($id);
        return view('backend.details',compact('item'));
    }
}
