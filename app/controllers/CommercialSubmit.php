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

		?>

		<!-- Google Code for New Lead Conversion Page -->
		<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 964767381;
			var google_conversion_language = "en";
			var google_conversion_format = "3";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "hIMJCKu-nFkQld2EzAM";
			var google_remarketing_only = false;
			/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/964767381/?label=hIMJCKu-nFkQld2EzAM&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>

		<?php

		Flash::message('Your message was sent successfully.  Someone with Maxsus Inc. will reach out to you shortly!');

		return Redirect::back();
	}

}