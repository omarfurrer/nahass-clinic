@extends('layouts.main')
@section('title', 'Services')

@section('content')

<!-- Begining of pagesCommonHeaderContainer -->

<div class="container-fluid" id="pagesCommonHeaderContainer">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-8">
				<h4>Services</h4>
			</div> 
			<div class="col-md-4 col-xs-4">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-home"></i></li>
					<li class="list-inline-item"><a href="{{ url('/')}}">Home</a></li>
					<li class="list-inline-item"><i class="fa fa-chevron-right"></i></li>
					<li class="list-inline-item"><p>Services</p></li>
				</ul>  
			</div>
		</div>
	</div>
</div>   

<!-- End of pagesCommonHeaderContainer -->

<!-- Begining of servicesCaroursel Container -->

<div class="container" id="servicesCaroursel">
	<div class="row mt-50">
		<div class="col-md-6">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="../images/ToothExtraction001.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/Routine-Dental002-1.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/Routine-Dental003.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/teeth-whitening.jpg" alt="Forth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/Teeth-Whitening002.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/tooth-extraction.jpg" alt="sixth slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<div class="chevronBg">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</div>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<div class="chevronBg">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-6">
			<h4>Caring for all your family’s dental needs</h4>
			<p>We will take care of all your family needs in dental and keep your smile bright and healthy, through years of study and practicing our dental team will give you the best dental services with their talent and latest equipment .

			You do not have to worry any more about your dental health come visit us and you will find us ready to serve it and keep it healthy</p>
		</div>
	</div>
</div>

<!-- End of servicesCarousel container -->

<!-- Begining of available services Container -->
<div class="container text-center" id="availableServicesContainer">

	<div class="row text-center mt-50" id="ourServicesHeaderRow">
		<div class="col-md-12">
			<h3>Our Services</h3>
			<p>Professional and highly trained!</p>
			<div class="blueLine">
			</div>
		</div>
	</div>

	<div class="row mt-20">
		<div class="col-md-4">
			<div class="card text-center">
				<img class="card-img-top" src="../images/servicesCard1.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Dental Fillings</h5>
					<p class="card-text">By closing off spaces where bacteria can enter, a filling also helps prevent further decay. Materials used for fillings include gold....</p>
				</div>
			</div>
		</div> 
		<div class="col-md-4">
			<div class="card text-center">
				<img class="card-img-top" src="../images/servicesCard2.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Orthodontics</h5>
					<p class="card-text">Orthodontics is the branch of dentistry that corrects teeth and jaws that are positioned improperly. Crooked teeth and teeth that do not fit together correctly are harder to keep clean....</p>
				</div>
			</div>
		</div> 
		<div class="col-md-4">
			<div class="card text-center">
				<img class="card-img-top" src="../images/servicesCard3.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Tooth Extraction</h5>
					<p class="card-text"><b>What Is It?</b>

					Tooth extraction is the removal of a tooth from its socket in the bone.</p>
				</div>
			</div>
		</div> 
	</div>

	<div class="row mt-20">

		<div class="col-md-4">
			<div class="card text-center">
				<img class="card-img-top" src="../images/servicesCard4.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Root Canal Treatment</h5>
					<p class="card-text">Despite what you may have heard or read online, the goal of a root canal isn't to cause you immense pain. Instead, the goal of the procedure is to save a tooth that is severely infected...</p>
				</div>
			</div>
		</div> 

		<div class="col-md-4">
			<div class="card text-center">
				<img class="card-img-top" src="../images/servicesCard5.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Tooth whitening</h5>
					<p class="card-text">Tooth whitening lightens teeth and helps to remove stains and discoloration. Whitening is among the most popular cosmetic dental procedures because it can greatly improve how your teeth look. Most dentists perform tooth whitening.</p>
				</div>
			</div>
		</div> 

		<div class="col-md-4">
			<div class="card text-center">
				<img class="card-img-top" src="../images/servicesCard6.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Routine Dental Exam & Check Up</h5>
					<p class="card-text">More than 50 years ago, examinations of people entering the military showed that Americans' teeth were in pretty bad shape. Few people took good care of their teeth. There were no guidelines for how often you should see a dentist.</p>
				</div>
			</div>
		</div> 

	</div>

</div>
<!-- End of available services Container -->

<!-- Begining of servicesOwlCarouselContainer -->
<div class="container" id="servicesOwlCarouselContainer">
	<div class="row text-center mt-50" id="ourServicesHeaderRow">
		<div class="col-md-12">
			<h3>Our Patients</h3>
			<p>Smiles to be proud of</p>
			<div class="blueLine">
			</div>
		</div>
	</div>

	<div class="row mt-50">
		<div class="owl-carousel owl-theme">

			<div class="item">
				<div class="card text-center" style="width: 30rem;">
					<i class="fa fa-quote-left fa-lg mt-20"></i>
					<div class="card-body">
						<p class="card-text">Thank you doctor Hany for bringing back my bright smile</p>
						<h5 class="card-title">Ahmed Magdy</h5>
						<h6 class="card-subtitle mb-2 text-muted">Dental Care patient</h6>
					</div>
				</div> 
			</div>

			<div class="item">
				<div class="card text-center" style="width: 30rem;">
					<i class="fa fa-quote-left fa-lg mt-20"></i>
					<div class="card-body">
						<p class="card-text">Thank you doctor Hany for everything :)</p>
						<h5 class="card-title">Noha Mohamadi</h5>
						<h6 class="card-subtitle mb-2 text-muted">Dental Care patient</h6>
					</div>
				</div> 
			</div>

		</div>
	</div>
</div>
<!-- End of servicesOwlCarouselContainer -->

<!-- Begining of Blue strip Container -->

<div class=" containter-fluid bluestrip mt-50">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<div>
					<img src="images/teathwhitening.png"> 
				</div>
			</div>
			<div class="col-md-7">
				<h2>
				Make Your Dream Smile A Reality!</h2>
				<p>With our professional and talented team using our advanced equipment we guarantee your dream smile to be real</p>
			</div>
			<div class="col-md-4 btnCol">
				<button class="btn btn-outline-primary">Book Apointment</button>
			</div>
		</div>
	</div>
</div> 

<!--  End of Blue strip container -->

@push('scripts')
<script>

	$(function() {

		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:12,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:2
				}
			}
		});

	});

</script> 
@endpush 











@endsection