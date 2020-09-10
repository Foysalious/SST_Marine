
@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')



<!-- about banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
    
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">About SST Marine</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about banner end -->


<!-- about info section start -->
<section class="about-info section-padding">
    <div class="container">
        <div class="row">
            @foreach(App\des1::orderBy('id','asc')->get() as $description)
            <div class="col-md-12">
                <p>
                 {!! $description->description_1!!}   
                </p>
                <div class="row">
                    @foreach(App\Anchor::orderBy('id','asc')->get() as $anchor)
                    <div class="col-md-6 flex-item">
                        <p>
                            <i class="fas fa-anchor"></i> {{$anchor->anchor}}
                        </p>
                    </div>
                    @endforeach
                </div>
                <p>
                    {!!$description->description_2!!}  
                </p>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- about info section end -->


<!-- certified title section start -->
<section class="about-certified-title">
    <div class="container">
    
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Every design has our assurance for optimum performance.</h1>
            </div>
        </div>

    </div>
</section>
<!-- certified title section end -->


<!-- certified  section start -->
<section class="about-certified section-padding">
    <div class="container">
    
        <div class="row certified-row">
        
            <!-- item one start -->
            @foreach(App\Design::orderBy('id','asc')->get() as $design)
            <div class="col-md-4">
                <div class="certified-item">
                    <i class="far fa-check-square"></i>
                <h3>{{$design->title}}</h3>
                    <p>{{$design->paragraph}}</p>
                </div>
            </div>
            @endforeach
            <!-- item one end -->

            <!-- item one start -->
         
            <!-- item one end -->

        </div>

    </div>
</section>
<!-- certified section end -->


<!-- testimonial seciton start -->
<section class="about-testimonial section-padding">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Client Testimonials</h1>
            </div>
        </div>

        <!-- testimonial slider start -->
        <div class="row">

            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- item start -->
                @foreach(App\Testimonial::orderBy('id','asc')->get() as $testimonial)
                <div class="item">
                    
                    <div class="col-md-12">
                        
                        <div class="testimonial-item">
                            <div class="qoute">
                                <p>
                                    <i>
                                        {{$testimonial->comment}}	
                                    </i>	
                                </p>
                            </div>
                            <div class="testimonial-logo">
                                <img src="{{asset('images/testimonial/'. $testimonial->image)}}" class="img-fluid" alt="">
                            </div>
                            <div class="testimonial-title">
                                <h2 class="text-center">{{$testimonial->name}}</h2>
                            </div>
                        </div>
                      
                    </div>
                    
                </div>
               @endforeach
                <!-- item end -->

                
            </div>

        </div>
        <!-- testimonial slider end -->

    </div>
</section>
<!-- testimonial seciton end -->

@extends ('frontend.include.footer')