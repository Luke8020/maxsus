<?php

Route::get('/', function () {
	return Redirect::to('residential-leaks');
});

Route::get('/residential-leaks', function () {
	return View::make('residential-leaks', [
		'title' 			=> 'Atlanta Roofing Repair & Restorations | Maxsus Roofing',
		'description' 		=> 'Our skilled crews are highly trained in most modern roofing materials and applications including: architectural asphalt shingle, wood / cedar shake, composite, eco shake, clay tile, slate, composite slate, architectural metal, standing seam metal, &; custom copper dormers, downspouts, and gutter systems for high end luxury applications.',
	]);
});


Route::get('/commercial-leaks', function () {
	return View::make('commercial-leaks', [
		'title' 			=> 'Atlanta Roofing Repair & Restorations | Maxsus Roofing',
		'description' 		=> 'We are confident in our ability to manage any size roofing construction project from drafting designs all the way through to the construction and finishing. If you are are looking for a team to handle the roofing aspects of your commercial construction needs, look no further. Have our team build a custom bid on your next commercial roofing project today!',
	]);
});

Route::post('/residential-leaks', [
	'uses' => 'ResidentialSubmit@submit'
]);

Route::post('/commercial-leaks', [
	'uses' => 'CommercialSubmit@submit'
]);
