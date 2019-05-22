<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Redirect;

class SendMailController extends Controller
{
	public function send(Request $request) {
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
			'mobile' => 'required',
		]);
		$data = array (
			'name' => $request->name,
			'email' => $request->email,
			'message' => $request->message,
			'mobile' => $request->mobile,
		);
		Mail::to('ango1993a@gmail.com')->send(new SendMail($data));
		return back()->with('success','Thanks for contacting us!');
	}
}
