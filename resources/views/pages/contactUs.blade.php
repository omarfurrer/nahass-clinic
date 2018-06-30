 @extends('layouts.main')
 @section('title', 'Contact Us')

 @section('content')

 <!-- Begining of pagesCommonHeaderContainer -->

 <div class="container-fluid" id="pagesCommonHeaderContainer">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-8 col-xs-8">
 				<h4>Contact us</h4>
 			</div> 
 			<div class="col-md-4 col-xs-4">
 				<ul class="list-inline">
 					<li class="list-inline-item"><i class="fa fa-home"></i></li>
 					<li class="list-inline-item"><a href="{{ url('/')}}">Home</a></li>
 					<li class="list-inline-item"><i class="fa fa-chevron-right"></i></li>
 					<li class="list-inline-item"><p>Contact Us</p></li>
 				</ul>  
 			</div>
 		</div>
 	</div>
 </div>   

 <!-- End of pagesCommonHeaderContainer -->

 <!-- Begining of contactUsInfoContainer -->
 <div class="container" id="contactUsInfoContainer">
 	<div class="row">
 		<div class="col-md-6">
 			<h5>You can always call us on:</h5>
 			<p><i class="fa fa-phone fa-lg"></i> 011 12 13 1415 - 012 34 56 7890</p>  
 		</div>
 		<div class="col-md-6">
 			<h5>Or drop us a line on:</h5>
 			<p><i class="fa fa-envelope fa-lg"></i> alnahassclinic@alnahassclinic.com</p>
 		</div> 	
 	</div>
 	<div class="row mt-50">
 		<div class="col-md-12">
 			<h5>Don't know how to reach our clinic? Here a map for you!</h5>
 			<div id="map"> 				
 			</div>
 		</div>
 	</div>
 </div>


 <!-- End of contactUsInfoContainer -->

 @endsection

 @push('scripts')
 <script>

 	function initMap() {
 		var myLatLng = {lat: 30.082237, lng: 31.327514};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
        	center: myLatLng,
        	zoom: 13
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
        	map: map,
        	position: myLatLng,
        	title: 'Hello World!'
        });
    }

</script>
@endpush