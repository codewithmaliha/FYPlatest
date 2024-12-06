<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\ContactUs;
use App\Models\Order;
use App\Models\PostAds;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        // write all logic for dashboard



    return view('admin.adminTabs.dashboard');
}


    public function postAds(){
        // return 'misbah';
        if(Auth::user()->role == 'super admin'){

            $post = PostAds::with('user')->get();

        }
        else{

            $post = PostAds::where('user_id',Auth::user()->id)->get();
        }

        return view('admin.adminTabs.postAds', compact('post'));

    }
    public function deletePostAds($id){
        PostAds::find($id)->delete();
        return redirect()->to('/admin/post-ads');
    }



    public function contactUS(){
        $contact = ContactUs::get();
        return view('admin.adminTabs.contactUs',get_defined_vars());
    }

    public function deleteContactUS($id){
        ContactUs::find($id)->delete();
        return redirect()->to('/admin/contact-us');

    }

    public function showLoginPage(){
        return view('admin.login.login');
    }

    public function verifyLoginInfo(Request $request){
        // return $request;

        $validate = Validator::make($request->all(),[
            'email'         => 'required | email ',
            'password'      => 'required | min:8'
        ]);

        if($validate->fails()){
            toast($validate->errors()->all()[0],'error');
            return redirect()->back()->with('error',$validate->errors()->all()[0])->withInput();
        }

        $data = $request->only('email','password');
        $verify = Auth::attempt($data);
        if($verify){
            toast('Login successfull !','success');
            return redirect()->to('/admin/dashboard');
        }else{
            toast('No Record Found !','error');
            return redirect()->back()->with('error','No Record Found !')->withInput();

        }

    }

    public function showRegisterPage(){
        return view('admin.login.register');
    }

    public function storeRegisterInfo(Request $request){

        $validate = Validator::make($request->all(),
        [
            'name' => 'required | min:3',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:8 '
        ]);
        if($validate->fails()){
            toast($validate->errors()->all()[0],'error');
            return redirect()->back()->with('error',$validate->errors()->all()[0])->withInput();
        }
        // return $request->all();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'service provider';
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->save();

        $data = $request->only('email', 'password');

        Auth::attempt($data);
        return redirect()->to('/admin/dashboard ');

        }
       /* customer orders */




    }


