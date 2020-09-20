@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- banner section start -->
<section class="home-banner">
    <div class="container-fluid">
        <div class="row">

           
            
            <div id="home-banner-carousel" class=" owl-carousel owl-theme">

               

                <!-- item start -->
                @foreach(App\Slider::orderBy('id','asc')->get() as $slider)
                <div class="item banner-image" style="background-image: url('{{ asset('images/slider/'.$slider->backGround_Image) }}') " >
                  
                   
                    <div class="opacity">
                        <div class="col-md-12 banner-text">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h1>{{$slider->title}}</h1>
                                    <p>{{$slider->description}}</p>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item end -->

                @endforeach

               

            </div>
            <!-- owl carousel end -->
            

        </div>
    </div>
</section>
<!-- banner section end -->








<!-- recent project section start -->
<section class="recent-project section-padding">
    <div class="container-fluid">
        <div class="row">

            <!-- left part start -->
            <div class="col-md-4">
                <div class="left" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}') " ">
                    <h1>recent projects</h1>
                </div>
            </div>
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-8">
                <div class="row">
                    
                    <!-- item start -->
                    @foreach(App\Ships::orderBy('id','asc')->get() as $project) 
                    <div class="col-md-6">
                        
                        
                        <div class="project-box">
                            

                            <img src="{{asset('images/protfolio/'.$project->image )}}" class="img-fluid" alt="">

                            
                            
                            <div class="project-hover">
                                <a data-fancybox="gallery"  href="{{asset('images/protfolio/'.$project->image )}}">
                                <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                       
                    </div>
                    @endforeach
                    <!-- item end -->


                </div>
            </div>
            <!-- right part end -->

        </div>
    </div>
</section>
<!-- recent project section end -->


@include ('frontend.include.footer')