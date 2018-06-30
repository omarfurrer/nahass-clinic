@extends('layouts.main')
@section('title', 'Gallery')

@section('content')

<!-- Begining of pagesCommonHeaderContainer -->

<div class="container-fluid" id="pagesCommonHeaderContainer">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-8">
				<h4>Gallery</h4>
			</div> 
			<div class="col-md-4 col-xs-4">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-home"></i></li>
					<li class="list-inline-item"><a href="{{ url('/')}}">Home</a></li>
					<li class="list-inline-item"><i class="fa fa-chevron-right"></i></li>
					<li class="list-inline-item"><p>Gallery</p></li>
				</ul>  
			</div>
		</div>
	</div>
</div>   

<!-- End of pagesCommonHeaderContainer -->


<!-- Begining of Gallery Carousel Container-->

<div class="container mt-50" id="galleryCarouselContainer">
	<div class="row">
		<div class="col-md-12">

			<h3 class="text-center">Pictures from our Clinics</h3>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators" id="galleryCarouselIndicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="../images/gallery1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/gallery2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/gallery3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/gallery4.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/gallery5.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/gallery6.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/gallery7.jpg" alt="Third slide">
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
</div>

<!-- End of Gallery Carousel Container-->


@endsection