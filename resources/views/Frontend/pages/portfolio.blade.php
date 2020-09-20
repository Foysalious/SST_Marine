@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- portfolio banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/SamskipEndeavour_Reefers_top.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">portfolio</h1>
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
            <div class="col-md-12">
                <ul>
                    @foreach(App\Protfolio::orderBy('id','asc')->get() as $protfolio) 
                    <li>
                        <a href="{{ route('allPortfolio',$protfolio->id) }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('images/protfolio/'.$protfolio->image) }}" alt="">
                            </div>
                            <p class="text-center">{{$protfolio->title}}</p>
                        </a>
                    </li>
                    @endforeach
                    
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- portfolio item section end -->


@include ('frontend.include.footer')
