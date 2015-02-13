<?php

class ResidentialSubmit extends BaseController {

	public function submit()
	{
		$input = Input::all();

		$rules = [
			'firstName'		=> 'required',
			'lastName' 		=> 'required',
			'email' 		=> 'required|email',
			'phone' 		=> 'required',
			'street' 		=> 'required',
			'city' 			=> 'required',
			'state' 		=> 'required',
			'zip' 			=> 'required'
		];

		$validator = Validator::make($input, $rules);

		if ($validator->fails())  {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Mail::send('emails.index', $input, function($message) use ($input) {
			$message	->to('luke@keystrokecreative.com', 'Luke Markey')
						->subject('New Residential Leak Landing Page Lead')
						->from($input['email']);
		});

		Mail::send('emails.index', $input, function($message) use ($input) {
			$message	->to('luke@maxsusinc.com', 'Luke Hendon')
						->subject('New Residential Leak Lead')
						->from($input['email']);
		});

		Flash::message('Your message was sent successfully.  Someone with Maxsus Inc. will reach out to you shortly!');

		return Redirect::back();
	}
}