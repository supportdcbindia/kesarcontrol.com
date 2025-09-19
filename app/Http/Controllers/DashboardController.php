<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use Auth;
use Validator;
use App\Models\ContactUs;
use App\Models\User;
use App\Models\Newsletter;
class DashboardController extends Controller
{
	
	public function dashboard()
	{
		 if(Auth::check())
		 {
				return view('admin.dashboard');
		 }
		 else  
		 {
				return redirect('/');
		 }
		
	}
	public function enquiries()
	{
		return view('admin.enquiries');
	}
	
	public function contactUs()
	{
		
		 if(Auth::check())
		 {
					$contacts = ContactUs::where('form_type',1)->get();
					return view('admin.contact-us',compact('contacts'));
		 }
		 else  
		 {
			return redirect('/');
		 }
	
	}

	public  function requestQuote()
	{
		 if(Auth::check())
		 {
					
				$requestQuotes = ContactUs::where('form_type',2)->get();
				return view('admin.request-quote',compact('requestQuotes'));
			}
		 else  
		 {
			return redirect('/');
		 }
	}

	public function newsletter()
	{
		$objNewsLetter = Newsletter::get();
		return view('admin.news_letter',compact('objNewsLetter'));
	}
}
