@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- portfolio banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/SamskipEndeavour_Reefers_top.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">career</h1>
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
            
            <!-- item start -->
            <div class="col-md-3">
                <div class="job-item">
                    <a href="{{ route('careerDetail') }}">
                        <i class="fas fa-briefcase"></i>
                        <p>senior laravel developer</p>
                    </a>
                </div>
            </div>
            <!-- item end -->

            <!-- item start -->
            <div class="col-md-3">
                <div class="job-item">
                    <a href="">
                        <i class="fas fa-briefcase"></i>
                        <p>senior laravel developer</p>
                    </a>
                </div>
            </div>
            <!-- item end -->

            <!-- item start -->
            <div class="col-md-3">
                <div class="job-item">
                    <a href="">
                        <i class="fas fa-briefcase"></i>
                        <p>senior laravel developer</p>
                    </a>
                </div>
            </div>
            <!-- item end -->

            <!-- item start -->
            <div class="col-md-3">
                <div class="job-item">
                    <a href="">
                        <i class="fas fa-briefcase"></i>
                        <p>senior laravel developer</p>
                    </a>
                </div>
            </div>
            <!-- item end -->

            <!-- item start -->
            <div class="col-md-3">
                <div class="job-item">
                    <a href="">
                        <i class="fas fa-briefcase"></i>
                        <p>senior laravel developer</p>
                    </a>
                </div>
            </div>
            <!-- item end -->

        </div>
    </div>
</section>
<!-- portfolio item section end -->


@include ('frontend.include.footer')
