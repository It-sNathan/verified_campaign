<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }
        else{
            return view('backend.admin_login.login');
        }
        return view('backend.admin_login.login');
    }

    public function register(){
        return view('backend.admin_login.register');
    }

    public function regstore(Request $request)
    {
        // Validation
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        // echo "<pre>";
        // print_r($request->all());        

        // Insert Query
        $admin = new Admin;
        $admin->username = $request['username'];  
        $admin->email = $request['email'];  
        $admin->password = $request['password'];  
        $admin->save();
        
        return redirect('/admin');

    }

    public function auth(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        // $result = Admin::where(['email'=>$email, 'password'=>$password])->get();
        $result = Admin::where(['email'=>$email])->first();
        if($result){
            if(Hash::check($request->post('password'), $result->password)){
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            }
            else{
                $request->session()->flash('error','Please enter a correct password!');
                return redirect('admin');
            }
        }
        else{
            $request->session()->flash('error','Please enter valid email or password!');
            return redirect('admin');
        }
    }

    public function dashboard(){
        $admin = Admin::all();
        $data = compact('admin');
        return view('backend.dashboard')->with($data);
    }
}