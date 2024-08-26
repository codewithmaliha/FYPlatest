<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RentNow;
use App\Models\PostAds;


class RentController extends Controller
{
   

  public function StoreClientInfo (Request $request){
    // return $request;
    $rentnow= new RentNow();
    $rentnow->username=$request->username;
    $rentnow->contact=$request->contact;
    $rentnow->save();

    $thanku = PostAds::find($request->id);
    return view('web.thanku', compact('thanku'));
  }
}
