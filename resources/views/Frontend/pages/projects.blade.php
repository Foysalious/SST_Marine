@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')
<!-- tecprojectshnology banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Projects</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- projects banner end -->


<!-- projects section start -->
<section class="projects section-padding">
    <div class="container">
        
        <div class="row">
            <!-- item start -->
            @foreach( $ships as $ship)
            <div class="col-md-4">
                <div class="project-item">
                    <div class="hover-content">
                    <p class="text-center">{{$ship->vessel_name}}</p>
                    </div>
                    <a href="project-detail.php">
                        <img src="{{asset('images/protfolio/'.$ship->image)}}" class="img-fluid" alt="">
                    </a>
                    <div class="projects-content text-center">
                        <h3 class="text-center">{{$ship->name}}</h3>
                        <p class="text-center">
                            {!! Str::limit($ship->description, 150) !!}
                        </p>
                        <a href="{{route('project_details',$ship->id)}}">
                            READ MORE <i class="fas fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- item end -->
        </div>

        <!-- pagination row start -->
        <div class="row pagination-row">
            <div class="col-md-12">
                {{ $ships->links() }}
            </div>
        </div>
        <!-- pagination row end -->

    </div>
</section>
<!-- projects section end -->





@include ('frontend.include.footer')