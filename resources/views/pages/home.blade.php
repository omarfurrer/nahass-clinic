@extends('layouts.main')
@section('title', 'Home')

@section('content')
<!-- Begining of Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100 animated rollIn" src="images/slider-003.jpg" alt="First slide">
			<div class="carousel-caption container carouselBox animated fadeIn">
				<div class="row">  
					<div class="col-md-12 col-sm-12"> 
						<h5>Al-Nahass Clinic. Changing lives one smile at a time</h5>
						<div class="carouselBoxLine">
						</div> 
						<h1>Professional and highly trained dental staff</h1>
						<p>Our dental staff includes Doctors and assistants who are highly trained. A team of talented professionals to give our clients the best treatments</p>
						<button class="btn">Learn More</button>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100 animated rollIn" src="images/slider-005.jpg" alt="Second slide">
			<div class="carousel-caption container carouselBox animated fadeIn">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h5>Al-Nahass Clinic. Changing lives one smile at a time</h5>
						<div class="carouselBoxLine">
						</div> 
						<h1>Dental Services for the entire family</h1>
						<p>Our dental services are not offered only for you, but for your entire family aswell. We guarantee a perfect and healthy smile for you and your family</p>
						<button class="btn">Learn More</button>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100 animated rollIn" src="images/slider-006.jpg" alt="Third slide">
			<div class="carousel-caption container carouselBox animated fadeIn">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h5>Al-Nahass Clinic. Changing lives one smile at a time</h5>
						<div class="carouselBoxLine">
						</div> 									
						<h1>Routine Dental Exams & Check-ups</h1>
						<p>Keep your smile white and healthy by having the routine dental exams & check-ups. We provide best equipment and talented staff</p>
						<button class="btn">Learn More</button>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<div class="indiBg">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</div>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<div class="indiBg">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</div>
		</a>
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


<!-- Begining of why Nahass part -->

<div class="container-fluid" id="whyNahassContainer">
	<div class="row">

		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f6f6f6" width="100%" height="60" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 60px; fill: #f5f8fa"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg>
	</div>

	<div class="row text-center" id="whyNahassHeaderRow">
		<div class="col-md-12">
			<h3>Why Al-Nahass Clinic</h3>
			<p>Let us brighten your smile!</p>
			<div class="whiteLine">
			</div>
		</div>
	</div>

	<div class="row mt-20" id="reasonsRow">

		<div class="col-md-3 text-center">
			<img src="images/certificate.png" id="certificateImg">
			<h4 class="mt-20">Highly trained dental team</h4>
			<p>our multi-disciplinary team collaborate together to make treatment recommendations that facilitate quality patient care</p>
		</div>

		<div class="col-md-3 text-center">
			<img src="images/dentalServices.png" id="certificateImg">
			<h4 class="mt-20">Extensive line of dental services</h4>
			<p>Our Dental services provide high quality operation to all what your white smile needs</p>
		</div>

		<div class="col-md-3 text-center">
			<img src="images/AdvancedTech.png" id="certificateImg">
			<h4 class="mt-20">Advanced dental treatment facilities and equipment</h4>
			<p>Our Equipment and material we use in our services is the latest technology provide in dental treatment</p>
		</div>

		<div class="col-md-3 text-center">
			<img src="images/teathwhitening.png" id="certificateImg">
			<h4 class="mt-20">Guaranteed results and brighter smiles</h4>
			<p>Our team and equipment will guaranty the result you are seeking and will give you the smile you dream to have</p>
		</div>

	</div>

	<div class="row">
		<svg class="uvc-x-large-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f5f8fa" width="100%" height="60" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 60px; transform: rotate(180deg);"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg>
	</div>

</div>	

<!-- End of why Nahass container -->


<!-- Begining of Our Services Container -->
<div class="container">

	<div class="row text-center" id="ourServicesHeaderRow">
		<div class="col-md-12">
			<h3>Our Services</h3>
			<p>Professional and highly trained!</p>
			<div class="blueLine">
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-sm-4">
			<div class="serviceBox bgImg1 text-center">
				<img class="serviceBoxImg1" src="images/dental-filling-icon.png">
				<h3>Dental Fillings</h3>
				<p>By closing off spaces where bacteria can enter, a filling also helps prevent further decay. Materials used for fillings include gold....</p>
			</div> 
		</div>

		<div class="col-sm-4">
			<div class="serviceBox bgImg2 text-center">
				<img class="serviceBoxImg2" src="images/icon-ortho.png">
				<h3>Orthodontics</h3>
				<p>Orthodontics is the science of straightening teeth and correcting jaw alignment using appliances such as braces or removable plates....</p>
			</div> 
		</div>

		<div class="col-sm-4">
			<div class="serviceBox bgImg3 text-center">
				<img class="serviceBoxImg3" src="images/tooth-extraction.png">
				<h3>Tooth Extraction</h3>
				<p>Tooth extraction is the removal of a tooth from its socket in the bone. If there's too much damage for the tooth to be repaired. In this case...</p>
			</div> 
		</div>
	</div>

	<div class="row">

		<div class="col-sm-4">
			<div class="serviceBox bgImg4 text-center">
				<img class="serviceBoxImg3" src="images/rootcanal.png">
				<h3>Root Canal Treatment</h3>
				<p>During root canal or endodontic treatment, the inflamed or infected pulp is removed and the inside of the tooth is carefully cleaned and disinfected...</p>
			</div> 
		</div>

		<div class="col-sm-4">
			<div class="serviceBox bgImg5 text-center">
				<img class="serviceBoxImg4" src="images/teathwhitening.png">
				<h3>Teeth Whitening</h3>
				<p>Tooth whitening lightens teeth and helps to remove stains and discoloration. Whitening is among the most popular cosmetic dental...</p>
			</div> 
		</div>

		<div class="col-sm-4">
			<div class="serviceBox bgImg6 text-center">
				<img class="serviceBoxImg5" src="images/routinechecks.png">
				<h3>Dental Fillings</h3>
				<p>Even if you take excellent care of your teeth and gums at home, you still need to see a dentist regularly. Your dentist can check for problems...</p>
			</div> 
		</div>

	</div>
</div>
<!-- End of Our Services Container -->

<!-- Begining of Testimonials container -->
<div class="container-fluid" id="testiContainer">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="row">
			<svg class="uvc-x-large-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#FFF" width="100%" height="60" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 60px;"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg> 
		</div>
		<div class="row text-center" id="testiHeaderRow">
			<div class="col-md-12">
				<h3>Testimonials</h3>
				<p>What our patients say “From Our Facebook Page”
				</p>
				<div class="blueLine">
				</div>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Dr Hany Al-Nahass is the best dentist I have dealt with. Thank you Dr</h2>									
						</div>
					</div>
					<div class="row text-center mt-20">
						<div class="col-md-12">
							<img class="testiImg" src="images/ahmed-magdy-client-test002-80x80.jpg" alt="First slide">
						</div>	
					</div>	
					<div class="row text-center mt-20">
						<div class="col-md-12">
							<h4>Ahmed Kamel</h4>
							<p>Dental care patient</p>
						</div>	
					</div>	
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Dr Hany Al-Nahass is the best dentist I have dealt with. Thank you Dr</h2>									
						</div>
					</div>
					<div class="row text-center mt-20">
						<div class="col-md-12">
							<img class="testiImg" src="images/ahmed-magdy-client-test002-80x80.jpg" alt="First slide">
						</div>	
					</div>	
					<div class="row text-center mt-20">
						<div class="col-md-12">
							<h4>Ahmed Kamel</h4>
							<p>Dental care patient</p>
						</div>	
					</div>	
				</div>		
				<div class="carousel-item">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Dr Hany Al-Nahass is the best dentist I have dealt with. Thank you Dr</h2>									
						</div>
					</div>
					<div class="row text-center mt-20">
						<div class="col-md-12">
							<img class="testiImg" src="images/ahmed-magdy-client-test002-80x80.jpg" alt="First slide">
						</div>	
					</div>	
					<div class="row text-center mt-20">
						<div class="col-md-12">
							<h4>Ahmed Kamel</h4>
							<p>Dental care patient</p>
						</div>	
					</div>	
				</div>									
			</div>

			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</div>
	<div class="row" id="svgRow">
		<svg class="uvc-x-large-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#FFF" width="100%" height="60" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 60px; transform: rotate(180deg);"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg> 
	</div>
</div>
<!-- End of Testimonials Div -->

<!-- Begining of Our Dentists part -->
<div class="container">
	<div class="row text-center" id="ourServicesHeaderRow">
		<div class="col-md-12">
			<h3>Our Dental Team</h3>
			<p>Professional and highly trained!</p>
			<div class="blueLine">
			</div>
		</div>
	</div>
	<div class="row mt-20">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="images/Dr.-Israa-Mohamed-Ibraheem-370x260.jpg" alt="Card image cap">
				<div class="card-body text-center cardBody">
					<h5 class="card-title cardTitle">Dr. Israa Mohamed Ibrahim</h5>
					<p class="card-text cardText">Dental Specialist.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card cardSize">
				<img class="card-img-top" src="images/Mr-Murat-Bulut-001-370x260.jpg" alt="Card image cap">
				<div class="card-body text-center cardBody">
					<h5 class="card-title cardTitle">Dr. Murat Bulut</h5>
					<p class="card-text cardText">Dental Studio.</p>
				</div>
			</div>
		</div> 
		<div class="col-md-4">
			<div class="card cardSize">
				<img class="card-img-top" src="images/Dr-baraa-001-370x260.jpg" alt="Card image cap">
				<div class="card-body text-center cardBody">
					<h5 class="card-title cardTitle">Dr. Baraa Bourhani</h5>
					<p class="card-text cardText">Dental Specialist.</p>
				</div>
			</div>
		</div>   
	</div>
</div>
<!-- End of Our Dentists part -->

<!-- Begining of Blue CTA part -->
<div class="container-fluid blueContainer mt-50">
	<div class="row text-center">
		<div class="col-md-12">
			<h4>Make your #dream_smile a reality!</h4>
			<p><small>Call us or book an appointment today!</small></p>
			<button class="btn">Book an appointment</button>

		</div>
	</div>
</div>
<!-- End of Blue CTA part -->


@endsection