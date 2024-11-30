<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\PostAds;
use App\Models\User;

class OrderController extends Controller
{


  public function StoreClientInfo(Request $request){
    // return $request;
    $rentnow= new Order();
    $rentnow->post_ads_id = $request->id;
    $rentnow->username=$request->username;
    $rentnow->contact=$request->contact;
    $rentnow->status = 1;
    $rentnow->save();

    //  $thanku = PostAds::find($request->id);
    //  $user_name = User::where('id',$thanku->user_id)->first('name');
    // $thanku->user_name = $user_name->name;

    return redirect()->to('thank-you?postid=' . $request->id);
    // return view('web.thanku', compact('thanku'));
  }
  public function ShowThankYouPage(Request $request){

    $postId = $request->query('postid');
    $thanku = PostAds::find($postId);
    $user_name = User::where('id',$thanku->user_id)->first('name');
    $thanku->user_name = $user_name->name;
    return view('web.thanku',compact('thanku'));
  }

  public function order(){
    $order = Order::get();
    foreach ($order as $item){
        $post = PostAds::find($item->post_ads_id);
        $item->post_name = $post->vehicle_name;
        $item->post_image = $post->image;
    }
    // return $order;

   return view('admin.adminTabs.order',get_defined_vars());
  }
  public function deleteOrder($id){
    Order::find($id)->delete();
    return redirect()->to('/admin/order');

  }

}
