<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\PostAds;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view ('web.home',get_defined_vars());
    }
    public function postCategory($slug){
       $post = PostAds::with('user')->where('type',$slug)->get();
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

    public function AboutUs(){
        return view('web.frontend.aboutus');
    }
    public function ContactUs(){
        return view('web.frontend.contactus');
    }
    public function storeContactUs(Request $request){
        $validate = Validator::make($request->all(),[
            'name'        => 'required ',
            'phone'      => 'required | integer'
        ]);

        if($validate->fails()){
            toast($validate->errors()->all()[0],'error');
            return redirect()->back()->with('error',$validate->errors()->all()[0])->withInput();
        }

        $data = ContactUs::create($request->all());

        toast('Form Submitted Successfully !','success');
        return redirect()->to('/contact-us');

    }
}
