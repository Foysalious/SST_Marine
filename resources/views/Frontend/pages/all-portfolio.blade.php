@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- portfolio banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/kroonborg_1995.jpg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">all portfolio</h1>
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
            <div class="col-md-12 all-portfolio">
                <div class="portfolio-box">
                    <img src="{{ asset('Frontend/images/20T BP Tug(1).jpg') }}" class="img-fluid" alt="">
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="portfolio-box">
                    
                        <img src="{{ asset('Frontend/images/24M Tug1(BWDB TUG15).JPG') }}" class="img-fluid" alt="">
                   
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="{{ asset('Frontend/images/25T BP Twin Screw Tug.JPG') }}" class="img-fluid" alt="">
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="portfolio-box">
                    
                        <img src="{{ asset('Frontend/images/32m Salvage cum Fi-Fi Tug.PNG') }}" class="img-fluid" alt="">
                    
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="portfolio-box">
                    
                        <img src="{{ asset('Frontend/images/P715(2).JPG') }}" class="img-fluid" alt="">
                   
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="portfolio-box">
                    
                        <img src="{{ asset('Frontend/images/20T BP Tug(1).jpg') }}" class="img-fluid" alt="">
                    
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="portfolio-box">
                    
                        <img src="{{ asset('Frontend/images/24M Tug1(BWDB TUG15).JPG') }}" class="img-fluid" alt="">
                   
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail') }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio item section end -->


@include ('frontend.include.footer')
