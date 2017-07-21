<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Snowfire\Beautymail\Beautymail;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class IndexController extends Controller
{
	public function sendMail(Request $request){
		$this->validate($request, [
	        'email' => 'bail|required|email',
    	]);
    	
		$beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
		$beautymail->send('emails.welcome', [], function($message) 
	    {
	    	$email = Input::get('email');
	        $message
				->from('donotreply@justlaravel.com')
				->to($email, 'Howdy buddy!')
				->subject('Test Mail!');
	    });
	    Session::flash("message","Email sent successfully");
	    return Redirect::back();
	}  
}
