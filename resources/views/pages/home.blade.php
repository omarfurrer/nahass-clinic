@extends('layouts.main')
@section('title', 'Home')

@section('content')
<!-- Begining of Image Slider -->
<div class="container-fluid">
	<div class="row">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/slider-003.jpg" alt="First slide">
					<div class="carousel-caption container carouselBox">

						<h5>Al-Nahass Clinic. Changing lives one smile at a time</h5>
						<div class="carouselBoxLine">
						</div> 
						<h1>Professional and highly trained dental staff</h1>
						<p>Our dental staff includes Doctors and assistants who are highly trained. A team of talented professionals to give our clients the best treatments</p>
						<button class="btn">Learn More</button>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider-005.jpg" alt="Second slide">
					<div class="carousel-caption container carouselBox">

						<h5>Al-Nahass Clinic. Changing lives one smile at a time</h5>
						<div class="carouselBoxLine">
						</div> 
						<h1>Dental Services for the entire family</h1>
						<p>Our dental services are not offered only for you, but for your entire family aswell. We guarantee a perfect and healthy smile for you and your family</p>
						<button class="btn">Learn More</button>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider-006.jpg" alt="Third slide">
					<div class="carousel-caption container carouselBox">

						<h5>Al-Nahass Clinic. Changing lives one smile at a time</h5>
						<div class="carouselBoxLine">
						</div> 
						<h1>Routine Dental Exams & Check-ups</h1>
						<p>Keep your smile white and healthy by having the routine dental exams & check-ups. We provide best equipment and talented staff</p>
						<button class="btn">Learn More</button>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<!-- End of Image Slider -->

<!-- Begining of stronghold container -->
<div class="container-fluid strongholdContainer" style="border-top: 1px solid white;">
	<div class="row text-center">

		<div class="col-sm-4 col-xs-12" id="bluepartCol1">
			<img src="images/rootcanal.png" id="bluepartImg1">
			<div class="mt-20">
				<h4 class="bluePartHeader">Root Canals</h4>
				<p class="bluePartParagraph">Affordable Prices</p>
			</div>
		</div>

		<div class="col-sm-4 col-xs-12" id="bluepartCol2">
			<img src="images/routinecheckups.png" id="bluepartImg2">
			<div class="mt-20">
				<h4 class="bluePartHeader">Routine Check-ups</h4>
				<p class="bluePartParagraph">Comprehensive dental check-ups</p>
			</div>
		</div>

		<div class="col-sm-4 col-xs-12" id="bluepartCol3">
			<img src="images/teathwhitening.png" id="bluepartImg3">
			<div class="mt-20">
				<h4 class="bluePartHeader">Teeth Whitening</h4>
				<p class="bluePartParagraph">High Quality teeth whitening</p>
			</div>
		</div>

	</div>
</div>
<!-- End of Stronghold Container -->

<!-- begining of welcome part -->
<div class="container mt-50">
	
	<h3 class="text-center" id="WelcomeContainerHeader">Welcome to Al-Nahass Clinic</h3>
	<p class="text-center">Changing Lives One Smile At A Time!</p>
	<div class="row mt-50">
		<div class="col-md-6">
			<img src="images/home-001.jpg" id="WelcomeContainerPic">
		</div>  
		<div class="col-md-6">
			<p id="WelcomeContainerParagraph">With our specialties as well as general dentistry available in the one location, our multi-disciplinary team collaborate together to make treatment recommendations that facilitate quality patient care. Seamless integration of all systems and practice within the centre enables each specialist to have instant access to treatment plans, laboratory results, 3D imagery and patient files, allowing for an evidence based best practice model of operation.</p>
			<button class="btn learnMoreBtn">Learn More</button>
		</div>  
	</div>
</div>
<!-- end of welcome part -->


@endsection