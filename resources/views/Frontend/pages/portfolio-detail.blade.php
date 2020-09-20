@include ('frontend.include.header')



<!-- portfolio item section start -->
<section class="portfolio-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="portfolio-detail-box">
                    <img src="{{ asset('images/protfolio/'.$protfolioImages->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-content">
                       {!!$protfolioImages->description!!}                 
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<!-- portfolio item section end -->

