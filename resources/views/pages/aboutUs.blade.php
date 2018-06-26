 @extends('layouts.main')
 @section('title', 'About Us')

 @section('content')

 <!-- Begining of pagesCommonHeaderContainer -->

 <div class="container-fluid" id="pagesCommonHeaderContainer">
    <div class="container">
     <div class="row">
        <div class="col-md-8 col-xs-8">
            <h4>About us</h4>
        </div> 
        <div class="col-md-4 col-xs-4">
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-home"></i></li>
                <li class="list-inline-item"><a href="home.index.html">Home</a></li>
                <li class="list-inline-item"><i class="fa fa-chevron-right"></i></li>
                <li class="list-inline-item"><p>About Us</p></li>
            </ul>  
        </div>
    </div>
</div>
</div>   

<!-- End of pagesCommonHeaderContainer -->

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
        </div>  
    </div>
</div>

<!-- end of welcome part -->

<!-- Begining of Our Services Container -->
<div class="container mt-50">

    <div class="row text-center" id="ourServicesHeaderRow">
        <div class="col-md-12">
            <h3>Our Dental Services</h3>
            <p>Quality and affordable dentistry!</p>
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

<!--  Begining of Owl Carousel -->

<div class="container">  
    <div class="row text-center mt-20" id="ourServicesHeaderRow">
        <div class="col-md-12">
            <h3>Our Dental Team</h3>
            <p>Professional and highly trained!</p>
            <div class="blueLine">
            </div>
        </div>
    </div>

    <div class="owl-carousel owl-theme mt-20">
        <div class="item">
            <div class="card">
                <img class="card-img-top" src="images/Dr.-Israa-Mohamed-Ibraheem-370x260.jpg" alt="Card image cap">
                <div class="card-body text-center cardBody">
                    <h5 class="card-title cardTitle">Dr. Israa Mohamed Ibrahim</h5>
                    <p class="card-text cardText">Dental Specialist.</p>
                </div>
            </div>
        </div>
        <div class="item">
           <div class="card">
            <img class="card-img-top" src="images/Mr-Murat-Bulut-001-370x260.jpg" alt="Card image cap">
            <div class="card-body text-center cardBody">
                <h5 class="card-title cardTitle">Dr. Murat Bulut</h5>
                <p class="card-text cardText">Dental Studio.</p>
            </div>
        </div>
    </div>
    <div class="item">
      <div class="card">
        <img class="card-img-top" src="images/Dr-baraa-001-370x260.jpg" alt="Card image cap">
        <div class="card-body text-center cardBody">
            <h5 class="card-title cardTitle">Dr. Baraa Bourhani</h5>
            <p class="card-text cardText">Dental Specialist.</p>
        </div>
    </div>
</div>
</div>
</div>

<!-- End of Owl Carousel -->

<!-- Begining of Testimonials Container -->

<div class="container-fluid" id="testiContainer">

    <div class="row">
        <svg class="uvc-x-large-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f5f8fa" width="100%" height="60" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 60px;"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg> 
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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row" id="svgRow">
            <svg class="uvc-x-large-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f5f8fa" width="100%" height="60" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 60px; transform: rotate(180deg);"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg> 

        </div>
    </div>
</div>
<!-- End of Testimonials Container -->

<!-- Begining of Counter Container -->
<div class="container mt-20" id="counterContainer">
    <div class="row text-center">
        <div class="col-md-3">
            <img src="../images/counterContainer1.png" id="certificateImg">
            <div>
                <span class="counter">3</span>
            </div>
            <p>Professional Dentists</p>
        </div> 
        <div class="col-md-3">
            <img src="../images/counterContainer2.png" id="certificateImg">
            <div>
                <span class="counter">3</span>
            </div>
            <p>Brighter Smiles</p>
        </div> 
        <div class="col-md-3">
            <img src="../images/counterContainer3.png" id="certificateImg">
            <div>
                <span class="counter">3</span>
            </div>
            <p>Patients</p>
        </div> 
        <div class="col-md-3">
            <img src="../images/counterContainer4.png" id="certificateImg">
            <div>
                <span class="counter">3</span>
            </div>
            <p>Cavities Fixed</p>
        </div> 
    </div>
</div>
<!--  End of Counter Container -->

<!-- Begining of Blue strip Container -->

<div class=" containter-fluid bluestrip">
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
@endsection



@push('scripts')
<script>

  $(function() {

     $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });


     $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

 });
</script>


@endpush

