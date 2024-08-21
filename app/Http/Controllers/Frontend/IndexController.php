<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
class IndexController extends Controller
{
    public function index()
    {
       return view ('web.home');
    }
    public function postCategory(){
        $post = Vehicle::with('user')->get();
        return view('web.postcategory', compact('post'));
    }
    public function postDetail(){
        return view('web.postDetail');
    }

}
