@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- client banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/SamskipEndeavour_Reefers_top.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">our clients</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client banner end -->


<!-- client section start -->
<section class="our-clients section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">
            @foreach(App\ClientDescrip::orderBy('id','asc')->get() as $description) 
            
            <div class="col-md-12">
               {!!$description->description_1!!}
            </div>
            @endforeach
        </div>


        <!-- clients slider start -->
        <div class="row client-carousel-row">

            <div class="client-carousel owl-carousel owl-theme">

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/biwta.png') }}" calss="img-fluid" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/biwtc.png') }}" calss="img-fluid" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/bwdb.png') }}" calss="img-fluid" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/c5liGRfv.jpg') }}" calss="img-fluid" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/chittagong-port-authority.jpg') }}" calss="img-fluid" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/coast.png') }}" calss="img-fluid" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-12">
                        <img src="{{ asset('Frontend/images/fmc.png') }}" calss="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
        <!-- clients slider end -->

    </div>
</section>
<!-- client section end -->



@include ('frontend.include.footer')
