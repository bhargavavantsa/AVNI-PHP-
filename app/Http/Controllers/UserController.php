<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

class UserController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function login(){
    	return view('login');
    }

    public function forgotPwd(){
    	return view('forgotPwd');
    }

    public function screenLock(){
    	return view('screenLock');
    }

    public function createUser(Request $request){
        $input = $request->all();
        echo '<pre>';
        print_r($input);
    }

    public function loginUser(Request $request){
        $input = $request->all();
        echo '<pre>';
        print_r($input);
    }

    public function forgotpwdUser(Request $request){
        $input = $request->all();
        /*echo '<pre>';
        print_r($input);*/
        $msg = 'Hi,'.PHP_EOL;
        $msg .= 'As per your request to change your password, Please click the below link. Ignore this if you not requested. '.PHP_EOL;
        $msg .= '<a href="#">Change Password</a>';
        $res = mail('arpita@mylastech.com', 'Forgot Password', $msg);
        if($res){
            $res1 = "Thank You. For further process, we have sent an email. Please check your Inbox or Spam.";
            return redirect()->route('ForgotPwd')->with('success', $res1);
        }else{
            $res1 = "Something went wrong. Please try again";
            return redirect()->route('ForgotPwd')->with('error', $res1);
        }        
    }
}
