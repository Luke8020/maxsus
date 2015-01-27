@extends('layouts.default')

@section('content')	

<div id="banner" class="bg-blur">
		
	@include('layouts.partials._header')
   
	<div class="banner-content">
		<div class="container">
			<div class="row">

				<div class="col-xs-10 col-sm-6 col-md-6 col-xs-offset-1 col-sm-offset-0 col-md-offset-0">

				<div class="banner-form">
					<div class="form-title">
						<h2>Gutter Installations Starting at $399!</h2>
					</div>
					
					@include('layouts.partials._form')

				</div>

				<div class="col-xs-10 col-sm-6 col-md-6 col-xs-offset-1 col-sm-offset-0 col-md-offset-0">
					
					@include('layouts.partials._form-helper')
					@include('layouts.partials._form-gutters')

				</div>

			</div>
		</div>
	</div>
</div>

<!-- Clients Logo -->
<div id="clients" class="padding40 bg-grey">
	<div class="container">
		<ul class="list-inline clients-logo text-center">
			<li class="margin20"><img src="img/logo-gutter-helmet.png" alt="" title="" /></li><!--Image path of logo -->
			<li class="margin20"><img src="img/logo-k-guard.png" alt="" title="" /></li>
			<li class="margin20"><img src="img/logo-leaf-filter.png" alt="" title="" /></li>
			<li class="margin20"><img src="img/logo-leaf-guard.png" alt="" title="" /></li>
			<li class="margin20"><img src="img/logo-waterloov.png" alt="" title="" /></li>
		</ul>
	</div>
</div>
<!-- End Clients Logo -->

<!-- Intro -->
	<section id="intro" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 headline">
					<h2>Proudly Serving the North Georgia &amp; Atlanta Area!</h2>
					<p>Our licensed and insured staff is ready to assist you with your gutter and downspout needs. 
					Whether you want to give your home a new look, prevent water damage, or need repairs after a storm, 
					we’re ready to help!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hidden-xs">
					<img src="img/image-one.png" class="img-responsive" alt="" title="">
				</div>
				<div class="col-sm-6">
					<div class="features"><!-- Main Points -->
						<i class="line-font blue icon-check"></i><!-- Main Point Icon -->
						<h3>Customer Oriented</h3><!-- Main Title -->
						<p>We are here to provide unsurpassed customer service. Our staff will offer personalized gutter installation options picked so you can
						make the best decision for your home.</p><!-- Main Text -->
					</div><!-- End Main Points -->
					<div class="features">
						<i class="line-font blue icon-drop"></i>
						<h3>Professional Gutter Installations</h3>
						<p>Clogged, leaky, damaged gutters and improperly placed downspouts can cause damage to your home and property. Maxsus guarantees their 
						gutter installation will prevent further water damage and help keep your home looking beautiful. 
						</p>
					</div>
					<div class="features">
						<i class="line-font blue icon-home"></i>
						<h3>Local, Dependable, and Well Reviewed</h3>
						<p>Backed by a 5 year workmanship warranty, Maxsus will help you find peace of mind knowing that your home is in good hands. We have helped plenty of
						happy homeowners in your area; see what others are saying about the Maxsus Difference. </p>
					</div>
				</div>
			</div>

			<hr class="separator60"><!-- Separator -->
			<div class="row">
				<div class="col-sm-6">
					<h2>The Maxsus Difference</h2>
					<p>Georgia native Luke Hendon started Maxsus in 2008 from the dream of one and has grown to help the lives of many.</p>
					<p>Not having much money back then for an official office location, Luke would gather with his work crew in the morning at a 
					Whole Foods where he would host a daily production meeting and buy everybody coffee &amp; breakfast to get the day started. 
					Within a few months he earned enough to move the crew into the first location and get a few work trucks. A couple of 
					years later, Maxsus is providing roofing &amp; restoration services across several cities throughout the southeast.</p>
					<p>Luke attributes much of his success to an unparalleled standard of quality. Ensuring each home owner is delighted with their
					their results has certainly paid off: from these humble beginnings Luke has expanded Maxsus to help restore thousands of Georgia
					homes without losing remarkable quality service that made Maxsus stand out.</p>
				</div>
				<div class="col-sm-6">
					<img src="img/luke.jpg" class="img-responsive" alt="" title="">
				</div>
			</div>
			<hr class="separator60">
			<div class="row">
				<div class="col-sm-6 hidden-xs">
					<img src="img/gutters.jpg" class="img-responsive" alt="" title="">
				</div>
				<div class="col-sm-6">
					<div class="margintop">
						<h2>Quality Craftsmanship Guaranteed</h2>
						<p>Bad gutters can cause water to pour out next to the foundation and seep into the basement over time. Defects can also cause damage
						to surrounding gardens, degrade support beams, and attract annoying pests to your residence. Picking a certified, experienced contractor
						can save you thousands, which is why we always hold our work to the highest standard. Our specialists stay well informed on 
						gutter installation best practices, including:
						<ul class="green-arrow"><!--Green arrow list -->
							<li>Vinyl Gutter Installations</li>
							<li>Seamless Gutter Installations</li>
							<li>Copper Gutter Installations</li>
							<li>Gutter Cover Installations</li>
						</ul>
						<p>No project is too big or too small to guarantee a job well done; Maxsus is happy to assist with gutter installations of all sizes.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Intro -->
	
	<!-- Portfolio -->
    <section id="portfolio" class="section bg-grey arrow-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="headline">
						<h2>Maxsus Restorations</h2>
						<p>See the latest projects we've completed in the Atlanta area. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail" src="img/portfolio-thumb/portfolio-1t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-1.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail" src="img/portfolio-thumb/portfolio-2t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-2.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail" src="img/portfolio-thumb/portfolio-3t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-3.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail"src="img/portfolio-thumb/portfolio-4t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-4.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail"src="img/portfolio-thumb/portfolio-5t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-5.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail" src="img/portfolio-thumb/portfolio-6t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-6.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail" src="img/portfolio-thumb/portfolio-7t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-7.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<!-- Start Portfolio Item -->
					<div class="hover-details">
						<img class="img-responsive img-thumbnail" src="img/portfolio-thumb/portfolio-8t.jpg" alt="" title="" /><!-- Image Thumbnail  -->
						<div class="img-cover">
							<a href="img/portfolio/portfolio-8.jpg" class="img-zoom" data-gal="prettyPhoto[gallery]"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
						</div>
					</div>
					<!-- End Portfolio Item  -->
				</div>
			</div>		
		</div>
	</section>
	<!-- End Portfolio -->
	
	<!-- Three Main Points -->
	<section id="savings" class="section bg-blue-pattern white-text">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="headline">
						<h2>Homeowner Deals &amp; Savings</h2>
						<p>Take a look at some of the great benefits we offer.</p>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="main-point"><!-- Main Point -->
						<i class="line-font icon-target"></i><!-- Main Point Icon -->
						<h3>Complimentary Surveys</h3><!-- Main Point Title -->
						<p>Large home restorations require a well thought out plan of action. We'll include a copy of our satellite home-survey with each project so we can keep you informed
						every step of the way.</p><!-- Main Point Text -->
					</div><!-- End Main Point -->
				</div>
				<div class="col-md-4">
					<div class="main-point">
						<i class="line-font icon-like"></i>
						<h3>Satisfactory Review Discount</h3>
						<p>Had a great experience with Maxsus? Write a qualified review with our affiliate sites and you'll get a discount on future projects with us.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="main-point">
						<i class="line-font icon-bubbles"></i>
						<h3>Neighbor Referral Program</h3>
						<p>We love that most of our business comes from neighbor referrals, and we want to show you our apprecition. Neighbors who qualify can receive up to 
						$500 in rebates!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Three Main Points -->
	
	<!--Testimonials -->
	<section id="reviews" class="section bg-testimonial cover border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="headline">
						<h2>Testimonials</h2>
						<p>See what others are saying about Maxsus</p>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- Start Testimonial Slider -->
					<div class="carousel slide carousel-mod" data-ride="carousel" id="testimonial">
						<div class="carousel-inner">
							<!-- Testimonial #1  -->
							<div class="item active">
								<div class="testimonial-inner">
								  <p>We are very pleased with our roof. It was amazing to watch the workers. They are quick, very professional, and did a thorough clean up! The entire process was impressive. Kudos to Maxsus!</p><!-- Tesimonial  -->
									<small>Maria Gomez, – Satisfied Customer</small><!-- Testimonial Author  -->
								</div>
							</div>
							<!-- End Testimonial #1  -->
							<div class="item">
								<div class="testimonial-inner">
									<p>I’d like to thank Maxsus Roofing Division, specially Luke Hendon that spent the time with us and the insurance adjuster to resolve our claim. They are very professional, GREAT JOB GUYS! Well done.</p><!-- Tesimonial  -->
									<small>Alfred Morchio, – Satisfied Customer</small><!-- Testimonial Author  -->
								</div>
							</div>				
							<div class="item">
								<div class="testimonial-inner">
									<p>Luke and the entire crew at Maxsus did a great job on our roof. From the initial inspection, to dealing with adjuster, to the installation, everything was handled quickly, and professionally. The new roof looks great! Thanks for the great job!</p><!-- Tesimonial  -->
									<small>Mike Drozynski, – Satisfied Customer</small><!-- Testimonial Author  -->
								</div>
							</div>
							<div class="item">
								<div class="testimonial-inner">
									<p>Maxsus did a wonderful job with our new roof. They spent the time to explain the process and did everything they promised. We are very pleased with our new roof and the great group of people that make up Maxsus!</p><!-- Tesimonial  -->
									<small>Andrew Trammel, – Satisfied Customer</small><!-- Testimonial Author  -->
								</div>
							</div>						
						</div>
						<!-- Testimonial Navigation  -->
						<ol class="carousel-indicators">
							<li data-target="#testimonial" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial" data-slide-to="1"></li>
							<li data-target="#testimonial" data-slide-to="2"></li>
							<li data-target="#testimonial" data-slide-to="3"></li>
						</ol>
						<!-- End Testimonial Navigation  -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials -->
	
	<!-- FAQ -->
	<section id="faq" class="section bg-grey  arrow-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="headline">
						<h2>Frequently Asked Questions</h2>
						<p>If a storm has damaged your gutters, homeowner's insurance may replace them at no cost to you! You'll definitely have questions, and we will
						be here to walk you through each step of the process.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="faq-body"><!-- FAQ -->
						<i class="line-font blue icon-question"></i><!-- Question Mark Icon -->
						<h4>Does my insurance provider cover the total repair/replacement?</h4><!-- Question -->
						<div class="answer"><!-- Answer -->
							<p>In most severe storm damage situations, we find that all insurance providers (depending on your individual policy) will cover the total cost of roofing &amp; 
							restoration repairs and replacements, with the exception of your deductible.</p>
							<p>This is a preventative measure that insurance agencies gladly take to ensure any damage to your homes exterior does not lead to further leak related damage 
							to the homes interior and its content (your costly possessions) that could potentially end up costing them thousands more in damaged property claims if the issues 
							are not quickly addressed.</p>

						</div>
					</div><!-- End FAQ -->
					<div class="faq-body"><!-- FAQ -->
						<i class="line-font blue icon-question"></i><!-- Question Mark Icon -->
						<h4>Can Maxsus Inc. cover the cost of my deductible?</h4><!-- Question -->
						<div class="answer"><!-- Answer -->
							<p>As a certified and reputable contractor, Maxsus Inc. can in NO situation offer to cover the cost of any insurance deductibles as doing so is a violation of most state laws.  
							However, we do offer special Deals &amp; Savings Programs that may help a homeowner reduce or recoup the burden of any out of pocket expenses. </p>
						</div>
					</div><!-- End FAQ -->
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="faq-body"><!-- FAQ -->
						<i class="line-font blue icon-question"></i><!-- Question Mark Icon -->
						<h4>What if something is left out in the claim that we find during construction?</h4><!-- Question -->
						<div class="answer"><!-- Answer -->
							<p>In order for Maxsus Inc. to ensure we provide you with the best products and craftsmanship possible, it is crucial your carrier covers the claim in full. For example, 
							there are over 30 steps in the re-roofing process. Failure to cover one of these steps results in an inferior roofing/siding system.</p>
							<p>Most items missed by the insurance carrier are simple oversights. We can at any time provide them with pictures, diagrams, estimates, and other project files that are stored in 
							Acculynx and backed up on our servers so the claim process continues without interruption.</p>

						</div><!-- End FAQ -->
					</div>
					<div class="faq-body"><!-- FAQ -->
						<i class="line-font blue icon-question"></i><!-- Question Mark Icon -->
						<h4>What happens with any left over materials?</h4><!-- Question -->
						<div class="answer"><!-- Answer -->
							<p>In most cases we will supply each project with extra materials beyond the scope of work to ensure that when a project is running short on materials 
							at the end of the day when all the supply distributors have closed, our crews will have enough material to complete the job without having to leave a roof 
							incomplete for any period of time. Once your job is complete, our field supervisor will run a final inspection and make sure all excess and leftover materials
							are picked up and properly returned.</p>
						</div><!-- End FAQ -->
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- End FAQ -->
		
	<!-- Call To Action -->
	<section id="subscribe" class="section bg-blue-pattern">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center white-text">
					<div class="headline">
						<h2>Satisfied with the introduction ?</h2>
						<p class="subline">Fill out our contact form to schedule a free home analysis!</p>
					</div>
					<a href="#" class="btn btn-default">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Call To Action -->

	@include('layouts.partials._footer')

@stop