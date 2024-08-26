<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PostAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Backend.vehicle');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    //    $PostAds = new PostAds();
    //     $PostAds->vehiclename =$request->vehiclename;
    //     $PostAds->type =$request->type;
    //     $PostAds->price =$request->price;
    //     $PostAds->weight =$request->weight;
    //     $PostAds->save();

        // toast('Ad Created Successfully!','success');
        // alert()->error('ErrorAlert','Lorem ipsum dolor sit amet.');


        // return $request->all();
      $imagename= "";
    if($request->hasfile('image')){
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/frontend/services');
        $image->move($destinationPath, $imagename);

        $PostAds = new PostAds();
        $PostAds->user_id =Auth::user()->id;
        $PostAds->image ='/frontend/services/'.$imagename;
        $PostAds->vehicle_name =$request->vehicle_name;
        $PostAds->duration =$request->duration;
        $PostAds->location =$request->location;
        $PostAds->weight =$request->weight;
        $PostAds->description =$request->description;
        $PostAds->categories =$request->categories;
        $PostAds->contact =$request->contact;
        $PostAds->price =$request->price;
        $PostAds->status =$request->status;
        $PostAds->save();
        alert()->success('Ad Created successfully!','Your Ad is live !');


        return redirect()->to('/admin/post-ads');  /* by url return*/
    }
    else {
        alert()->error('Ad Creation failed!','Please Select Image!');
        return redirect()->back();
    }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showCreateAdPage()
        {

            return view('admin.adminTabs.createPost');
        }
    public function editPostAds($id)

        {
            $post = PostAds::find($id);
            return view('admin.adminTabs.editPost', compact('post'));
        }


    /**
     * Update the specified resource in storage.
     */
    public function updatePostAds(Request $request, $id)
    {
        $imagename= "";
        $post = PostAds::find($id);
        $post->vehicle_name = $request->input('vehicle_name');
        $post->categories = $request->input('categories');
        if($request->hasfile('image')){
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/Frontend/services');
            $image->move($destinationPath, $imagename);
            $post->image = 'Frontend/services/'.$imagename;;
        }
        $post->weight = $request->input('weight');
        $post->price = $request->input('price');
      
        
        $post->save();

        return redirect()->to('/admin/post-ads');
    }
    public function statusChange($id){
        $post = PostAds::find($id);
        if ($post->status){
            $post->status = 0;
        }
        else{
            $post->status = 1;
        }
        $post->update();
        
        return redirect()->to('/admin/post-ads');

     }
    // else{
    //     alert()->error('Ad Creation failed!','Please Select Image!');
    //     return redirect()->back();
    // }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
