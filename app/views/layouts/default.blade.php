<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title> {{ $title }}</title>
	<meta name="author" content="">
	<meta name="description" content="{{ $description }}">	

	<link rel="shortcut icon" href="../favicon.png">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
	
	<!-- Libs CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/simple-line-icons.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
	
	<!-- Template CSS -->
	<link href="css/style.css" rel="stylesheet"> 
	<link href="css/custom.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,800&amp;subsetting=all' rel='stylesheet' type='text/css'>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script src="./js/html5shiv.js"></script>
		<script src="./js/respond.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	@yield('stylesheets')

	<meta name="google-site-verification" content="Ds1UgnhOT59XVI29fTxf4rag6K8taCTwCBtGO3VRd1c" />
	
</head>

<body data-spy="scroll" data-target=".navigation">

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MRMSQK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-MRMSQK');</script>
	<!-- End Google Tag Manager -->

	@yield('content')

	<script src="{{ asset('js/jquery.validate.min.js') }}"></script><!-- Form Validation -->
    <script src="{{ asset('js/additional-methods.min.js') }}"></script><!-- Form Validation Methods -->

	<script>
        jQuery(function($) 
        {
            //----------------------------------------------------------------------------
            // CONTACT FORM VALIDATION
            //----------------------------------------------------------------------------
            $('#contact-form').validate({
                errorElement: 'div',
                errorClass: 'alert alert-danger',
                focusInvalid: false,

                rules: {
                    firstName:  { required: true },
                    lastName:   { required: true },
                    email:      { required: true, email: true },
                    phone:      { required: true, phoneUS: true },
                    street: 	{ required: true },
                    city: 		{ required: true },
                    state: 		{ required: true },
                    zip: 		{ required: true }
                },

                messages: {
                    firstName:      "Required",
                    lastName:       "Required",
                    email:          "Required",
                    phone:          "Required",
                    street:         "Required",
                    city:           "Required",
                    state:         	"Required",
                    zip: 			"Required",
                },

                /* Add Error Messages */
                highlight: function (e) { $(e).closest('.form-group').addClass('has-error'); },

                /* Remove Error Messages for Corrected Fields */
                success: function (e) { $(e).closest('.form-group').removeClass('has-error'); $(e).remove(); },

                /* Place Error Messages Below Field */
                errorPlacement: function (error, element) { error.insertAfter(element.parent()); },

                /* Prevents Multiple Post Requests */
                submitHandler: function (form) { $('#submit-button').setAttribute('disabled' , 'disabled'); }
            });
		});
	</script>

	<!-- Start Js Files -->
	<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script><!--jQuery is a Javascript library that greatly reduces the amount of code that you must write.-->
	<script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script><!--Packed with many functionalies such as carousel slider, responsivity, tabs, drop downs, buttons, and many other features-->
	<script src="js/modernizr.min.js" type="text/javascript"></script><!--Modernizr is an open-source JavaScript library that helps you build the next generation of HTML5 and CSS3-powered websites-->
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" ></script><!-- Script for Lightbox Image  -->
	<script src="js/custom.js" type="text/javascript"></script><!-- Script File containing all customizations  -->

</body>
</html>