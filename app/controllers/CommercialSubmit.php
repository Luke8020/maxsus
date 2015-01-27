<?php

class CommercialSubmit extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function submit()
	{
		$input = Input::all();

		$rules = [
			'firstName' => 'required',
			'lastName' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'street' => 'required',
			'city' => 'required',
			'state' => 'required',
			'zip' => 'required'
		];

		$validator = Validator::make($input, $rules);

		if ($validator->fails()) 
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Mail::send('emails.index', $input, function($message) use ($input)
		{
			$message->to('luke@elkdevelopment.com', 'Luke Markey')
				->subject('New Commercial Leak Lead')
				->from($input['email']);
		});

		Mail::send('emails.index', $input, function($message) use ($input)
		{
			$message->to('info@maxsusinc.com', 'Luke Hendon')
				->subject('New Commercial Leak Lead')
				->from($input['email']);
		});		

		Flash::message('Your message was sent successfully.  Someone with Maxsus Inc. will reach out to you shortly!');

		return Redirect::back();
	}

}