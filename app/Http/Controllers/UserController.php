<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

use App\Models\User;

class UserController extends Controller
{
    public function postLogin(Request $request)
	{
				if($request->isMethod('post'))
				{
						$requestData = $request->all();
					 $messages = [
						'email.required'=>'Please enter email',
						'email.email'=>'Please enter valid email',
						'password.required'=>'Please enter password',
					 ];
					 $validator = Validator::make($requestData,[
						'email'=>'required|email',
						'password'=>'required'
					 ],$messages);
				}
				if($validator->fails())
				{		
					   return redirect()->back()->withErrors($validator->errors())->withInput();
				}
				   $is_user_email = User::where('email', trim($requestData['email']))->where('status', 1)->first();
					 if( isset($is_user_email->id) )
       		 {
							$credentials = array('email' => trim($requestData['email']), 'password' => trim($requestData['password']));
							if( Auth::attempt($credentials))
							{
								$request->session()->regenerate();
								return redirect()->intended('/admin/dashboard');
							}
							else
							{
								return redirect()->back()->withErrors(array('password' => 'Please Enter  Correct Password'))->withInput();
					  	}
						} 
						else 
						{
							 return redirect()->back()->withErrors(array('password' => 'Username Or Email Does Not Exists'))->withInput();
            }
				

	}
    public function login()
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/admin/login');
    }
}
