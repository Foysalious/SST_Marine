@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- news and event banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/IMG_20200126_121815.jpg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">news & event</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news and event banner end -->


<!-- services information start -->
<section class="services-info section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">

            <!-- left part start -->
            <div class="col-md-4">
                <div class="left">
                    <ul>
                        <li class="services-click active-item 1" id="1">
                            <i class="fas fa-angle-double-right"></i> Contract with BIWTC(27.10.19)
                        </li>
                        <li class="services-click 2" id="2">
                            <i class="fas fa-angle-double-right"></i> MIST Fair(26.09.19)
                        </li>
                        <li class="services-click 3" id="3">
                            <i class="fas fa-angle-double-right"></i> Office Picnic,2019
                        </li>
                        <li class="services-click 4" id="4">
                            <i class="fas fa-angle-double-right"></i> Photo with Chief Engineer(06.01.20)
                        </li>
                    </ul>                
                </div>            
            </div>
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-8">

                <!-- item start -->
                <div class="right services-item active-service 1">
                    <h3>Contract with BIWTC(27.10.19)</h3>    
                    <div class="services-content">
                        <p>Contract with BIWTC on 24.10.2019 for Design, Approval, Construction Supervision & Monitoring Services of Modern Passenger Cruise Vessel, Coastal Passenger Vessel, Cabin Cruiser cum Inspection Boat, Salvage cum Fire Fighting Tug, Coastal Sea Truck, Improved K-Type Ferry & Improved Utility Type Ferry.</p>   

                        <div class="event-carousel owl-carousel owl-theme">
                            <!-- item start -->
                            <div class="item">
                                <img src="{{ asset('Frontend/images/8062975c-4d42-4e0e-bcb3-f46265ab76e8.JPG') }}" class="img-fluid" alt="">                        
                            </div>
                            <!-- item end -->

                            <!-- item start -->
                            <div class="item">
                                <img src="{{ asset('Frontend/images/a66d60ba-f598-4a1a-aae6-10be45bd8052.JPG') }}" class="img-fluid" alt="">                              
                            </div>
                            <!-- item end -->
                        </div>

                    </div>            
                </div>
                <!-- item end -->

                 <!-- item start -->
                 <div class="right services-item 2">
                    <h3>MIST Fair(26.09.19)</h3>    
                    <div class="services-content">
                        <p>SST Marine Solutions Ltd participates on the 3-days Fair organized by MIST(Military Institute of Science and technology) on September,2019 on occasion of  World Maritime Day 2019.</p>   

                        <div class="event-carousel owl-carousel owl-theme">
                            <!-- item start -->
                            <div class="item">
                                <img src="{{ asset('Frontend/images/DSCN9927.JPG') }}" class="img-fluid" alt="">                        
                            </div>
                            <!-- item end -->

                            <!-- item start -->
                            <div class="item">
                                <img src="{{ asset('Frontend/images/DSCN9951.JPG') }}" class="img-fluid" alt="">                              
                            </div>
                            <!-- item end -->
                        </div>

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