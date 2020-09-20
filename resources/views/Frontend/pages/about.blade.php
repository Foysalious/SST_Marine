
@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')



<!-- about banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/40-TON-HYDRAULIC-TELESCOPIC-OFFSHORE-CRANE-FOR-SALE1.jpeg') }}') " ">
    
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


<!-- about slider start -->
<section class="about-sldier section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">

        <div class="about-company-carousel owl-carousel owl-theme">

            <!-- company image item start -->
            @foreach(App\about_image::orderBy('id','asc')->get() as $image) 
            <div class="item">
                <div class="col-md-8 offset-md-2">
                    <img src="{{ asset('images/aboutImages/'.$image->image) }}" alt="">
                </div>
            </div>
            @endforeach
            <!-- company image item end -->

            

        </div>

        </div>            
    </div>
</section>
<!-- about slider end -->


<!-- about info section start -->
<section class="about-info section-padding">
    <div class="container">
        <div class="row">
            @foreach(App\des1::orderBy('id','asc')->get() as $description)
            <div class="col-md-12">
               
                 {!! $description->description_1!!}   
                
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- about info section end -->

<!-- about slider start -->
<section class="about-sldier section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">

        <div class="about-company-carousel owl-carousel owl-theme">

            <!-- company image item start -->
            @foreach(App\about_video::orderBy('id','asc')->get() as $video) 
            <div class="item">
                <div class="col-md-8 offset-md-2">
                    <iframe src='{{$video->link}}' frameborder="0"></iframe>
                </div>
            </div>
            @endforeach
            <!-- company image item end -->


        </div>

        </div>            
    </div>
</section>
<!-- about slider end -->


@extends ('frontend.include.footer')