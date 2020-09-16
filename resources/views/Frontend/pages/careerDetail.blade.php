@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- portfolio banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/SamskipEndeavour_Reefers_top.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">senior laravel developer</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio banner end -->


<!-- portfolio item section start -->
<section class="portfolio section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">
            
            <!-- details start -->
            <div class="col-md-12">
                <i class="fas fa-briefcase" style="font-size: 30px"></i>
                
                <p>senior laravel developer</p>
            </div>
            <!-- details end -->

        </div>
    </div>
</section>
<!-- portfolio item section end -->


@include ('frontend.include.footer')
