@extends('layouts.main')
@section('title', 'Home')

@section('content')
<!-- Begining of Image Slider -->

<div class="container-fluid">
	<div class="row">
		<div id="sliderFrame">
			<div id="slider">
				<img src="https://whitesmileclinic-eg.com/wp-content/uploads/2017/07/slider-003.jpg" />
				<img src="https://whitesmileclinic-eg.com/wp-content/uploads/2017/07/slider-006.jpg" alt="" />
				<img src="https://whitesmileclinic-eg.com/wp-content/uploads/2017/07/slider-005.jpg" alt="#htmlcaption" />
			</div>
		</div>
	</div>
</div>

<!-- End of Image Slider -->

<!-- Begining of stronghold container -->
<div class="container-fluid strongholdContainer" style="border-top: 1px solid white;">
	<div class="row text-center">

		<div class="col-sm-4" id="bluepartCol1">
			<img src="images/rootcanal.png" id="bluepartImg1">
			<div class="mt-20">
				<h4 class="bluePartHeader">Root Canals</h4>
				<p class="bluePartParagraph">Affordable Prices</p>
			</div>
		</div>

		<div class="col-sm-4" id="bluepartCol2">
			<img src="images/routinecheckups.png" id="bluepartImg2">
			<div class="mt-20">
				<h4 class="bluePartHeader">Routine Check-ups</h4>
				<p class="bluePartParagraph">Comprehensive dental check-ups</p>
			</div>
		</div>

		<div class="col-sm-4" id="bluepartCol3">
			<img src="images/teathwhitening.png" id="bluepartImg3">
			<div class="mt-20">
				<h4 class="bluePartHeader">Teeth Whitening</h4>
				<p class="bluePartParagraph">High Quality teeth whitening</p>
			</div>
		</div>

	</div>
</div>
<!-- End of Stronghold Container -->

@endsection