@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- technology banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Technology</h1>
                    <p class="text-center text-white">SST Marine is a well equipped ship design company that have the following authentic software</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- technology banner end -->


<!-- technology item section start -->
<section class="technology section-padding">
    <div class="container">
        <div class="row">

            <!-- item start -->
            @foreach(App\Techno::orderBy('id','asc')->get() as $techno)
            <div class="col-md-4">
                <div class="technology-item">
                    <div class="technology-box">
                        <i class="fas fa-toolbox"></i>
                    <h3 class="text-center">{{$techno->title}}</h3>
                        <p class="text-center">
                            {{$techno->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- item end -->

            

        </div>
    </div>
</section>
<!-- technology item section end -->


@include ('frontend.include.footer')
