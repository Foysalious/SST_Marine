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
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/bulk.jpg') }}" alt="">
                            </div>
                            <p class="text-center">Bulk Carrier</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/oil.jpg') }}" alt="">
                            </div>
                            <p class="text-center">Oil Tanker</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/tug.jpg') }}" alt="">
                            </div>
                            <p class="text-center">tug boat</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/passenger.jpg') }}" alt="">
                            </div>
                            <p class="text-center">passenger vessel</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/highspeed.jpg') }}" alt="">
                            </div>
                            <p class="text-center">High Speed Aluminum Vessel </p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/vessel.jpg') }}" alt="">
                            </div>
                            <p class="text-center">Buoy Laying & Survey Vessel </p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/crane.png') }}" alt="">
                            </div>
                            <p class="text-center">Crane & Work Boat </p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/accomodation.jpg') }}" alt="">
                            </div>
                            <p class="text-center">Accommodation Barge / House Boat </p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allPortfolio') }}">
                            <div class="portfolio-icon-card">
                                <img src="{{ asset('Frontend/images/portfolio/other.jpg') }}" alt="">
                            </div>
                            <p class="text-center">Other Vessels </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- portfolio item section end -->


@include ('frontend.include.footer')
