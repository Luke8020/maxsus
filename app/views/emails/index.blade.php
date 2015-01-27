<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>New Lead Contact Info</h2>

		<h3>Contact Info:</h3>

		<p>First Name: {{ $firstName }}</p>
		<p>Last Name: {{ $lastName }}</p>
		<p>Email Address: {{ $email }}</p>
		<p>Phone Number: {{ $phone }}</p>
		<p>Street Address: {{ $street }}</p>
		<p>City: {{ $city }}</p>
		<p>State: {{ $state }}</p>
		<p>Zip Code: {{ $zip }}</p>

		@if ($additional != '')
			<p>Additional Info: {{ $additional }}</p>
		@endif
		
	</body>
</html>