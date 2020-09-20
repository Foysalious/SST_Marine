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
                @foreach($protfolioImages as $protfolioImage)
                    
                
                <div class="portfolio-box">
                    <img src="{{ asset('images/protfolio/'.$protfolioImage->image ) }}" class="img-fluid" alt="">
                    <div class="view-detail-portolio">
                        <a href="{{ route('portfolioDetail',$protfolioImage->id) }}">view more <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
<!-- portfolio item section end -->


@include ('frontend.include.footer')
