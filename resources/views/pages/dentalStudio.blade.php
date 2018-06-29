@extends('layouts.main')
@section('title', 'Our Dental Studio')

@section('content')

<!-- Begining of Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide dentalStudioCarousel" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100 animated rollIn" src="../images/dentalStudio1.jpg" alt="First slide">
			<div class="carousel-caption container carouselBox animated fadeIn">
				<div class="row">  
					<div class="col-md-12 col-sm-12"> 
						<h5>Al-Nahass Dental Studio</h5>
						<div class="carouselBoxLine">
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100 animated rollIn" src="../images/dentalStudio2.jpg" alt="Second slide">
			<div class="carousel-caption container carouselBox animated fadeIn">
				<div class="row">  
					<div class="col-md-12 col-sm-12"> 
						<h5>Al-Nahass Dental Studio</h5>
						<div class="carouselBoxLine">
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100 animated rollIn" src="../images/dentalStudio3.jpg" alt="Third slide">
			<div class="carousel-caption container carouselBox animated fadeIn">
				<div class="row">  
					<div class="col-md-12 col-sm-12"> 
						<h5>Al-Nahass Dental Studio</h5>
						<div class="carouselBoxLine">
						</div> 
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




@endsection