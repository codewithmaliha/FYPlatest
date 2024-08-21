<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
         $vehicles = Vehicle::get();
        return view('frontend.postCategory',get_defined_vars());
    }
    public function details($id){
       $item=Vehicle::find($id);
        return view('backend.details',compact('item'));
    }
}
