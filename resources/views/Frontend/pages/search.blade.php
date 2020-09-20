@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')
<!-- tecprojectshnology banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Your search result for '{{ $text }}'</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- projects banner end -->


<!-- projects section start -->
<section class="projects section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        
        <div class="row">
            <!-- item start -->
            @foreach( $search as $sear)
            <div class="col-md-4">
                <div class="project-item">
                    <a href="{{route('project_details',$sear->id)}}">
                        <div class="hover-content">
                        <p class="text-center">{{$sear->vessel_name}}</p>
                        </div>
                        <a href="{{route('project_details',$sear->id)}}">
                            <img src="{{asset('images/protfolio/'.$sear->image)}}" class="img-fluid" alt="">
                        </a>
                        <div class="projects-content text-center">
                            <h3 class="text-center">{{$sear->name}}</h3>
                            <p class="text-center">
                                {!! Str::limit($sear->description, 150) !!}
                            </p>
                            <a href="{{route('project_details',$sear->id)}}">
                                READ MORE <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <!-- item end -->
        </div>

 
       

    </div>
</section>
<!-- projects section end -->





@include ('frontend.include.footer')