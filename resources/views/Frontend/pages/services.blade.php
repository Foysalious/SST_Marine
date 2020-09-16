@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- services banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/bashundhara-lpg-3_9145891_27439_Large1.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Our Services</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services banner end -->


<!-- services information start -->
<section class="services-info section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">

            <!-- left part start -->
            <div class="col-md-4">
                <div class="left">
                    <ul>
                        <li class="services-click active-item 1" id="1">
                            <i class="fas fa-angle-double-right"></i> new ship design
                        </li>
                        <li class="services-click 2" id="2">
                            <i class="fas fa-angle-double-right"></i> conversion and modification design
                        </li>
                        <li class="services-click 3" id="3">
                            <i class="fas fa-angle-double-right"></i> detail engineering service
                        </li>
                        <li class="services-click 4" id="4">
                            <i class="fas fa-angle-double-right"></i> specialized technical assistance & consultancy
                        </li>
                    </ul>                
                </div>            
            </div>
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-8">

                <!-- item start -->
                <div class="right services-item active-service 1">
                    <h3>New Ship Design</h3>    
                    <div class="services-content">
                        <p>GB Marine’s naval architecture and marine engineering services includes new vessel designs, existing vessel conversion and modification project work.</p>   
                        <img src="{{ asset('Frontend/images/newshipdesign/Lines Plan(2).PNG') }}" class="img-fluid" alt="">                 
                    </div>            
                </div>
                <!-- item end -->

                 <!-- item start -->
                 <div class="right services-item 2">
                    <h3>conversion and modification design</h3>    
                    <div class="services-content">
                        <p>GB Marine’s naval architecture and marine engineering services includes new vessel designs, existing vessel conversion and modification project work.</p>   
                        <img src="{{ asset('Frontend/images/Piping 3D (1).PNG') }}" class="img-fluid" alt="">                 
                    </div>            
                </div>
                <!-- item end -->

            </div>
            <!-- right part end -->
        
        </div>        
    </div>

</section>
<!-- services information end -->



@include ('frontend.include.footer')