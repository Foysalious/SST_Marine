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


<!-- home services title start -->
<section class="home-services-title">
    <div class="container">

        <!-- title row start -->
        <div class="row title-row">
            <div class="col-md-12">
                <h1 class="text-center">SST Marine Solutions Ltd.</h1>
            </div>
        </div>
        <!-- title row end -->

    </div>
</section>
<!-- home services title end -->

<!-- home services start -->
<section class="home-services" style=" background-image: url('{{ asset('Frontend/images/services-bg-2.png') }}') " ">
    
    <div class="container">

        
        <div class="row ">
            
            <!-- left part start -->
            <div class="col-md-6">
                <div class="left">
                    @foreach(App\Service::orderBy('id','asc')->get() as $service)
                <p>{{$service->paragraph}}</p>
                    @endforeach
                    <div class="row solution-row">
                        @foreach(App\Anchor::orderBy('id','desc')->get() as $anchor)
                        <div class="col-md-6 flex-item">
                            <p>
                                <i class="fas fa-anchor"></i> {{$anchor->anchor}}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-6">
                <div class="right">
                    <img src="{{asset('Frontend/images/LogoSSTmarine.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <!-- right part end -->

        </div>
        

    </div>
</section>
<!-- home services end -->


<!-- counting section start -->
<section class="home-counting" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ") " >
    
    <div class="opacity">
        <div class="container">
            <div class="row count-row">

                <!-- project done start -->
                @foreach(App\Countdown::orderBy('id','asc')->get() as $countdown)
                <div class="col-md-3">
                    <div class="counting-item">
                    <h1><span class="counter">{{$countdown->projects_done}}</span>+</h1>
                        <h2>project done</h2>
                    </div>
                </div>
                <!-- project done end -->

                <!-- Offshore Projects start -->
                <div class="col-md-3">
                    <div class="counting-item">
                        <h1 class="counter">{{$countdown->offshore_projects}}</h1>
                        <h2>Offshore Projects</h2>
                    </div>
                </div>
                <!-- Offshore Projects end -->

                <!-- Expert Engineers start -->
                <div class="col-md-3">
                    <div class="counting-item">
                        <h1 class="counter">{{$countdown->expert_engineers}}</h1>
                        <h2>Expert Engineers</h2>
                    </div>
                </div>
                <!-- Expert Engineers end -->

                <!-- Man Power start -->
                <div class="col-md-3">
                    <div class="counting-item">
                        <h1><span class="counter">{{$countdown->man_power}}</span>+</h1>
                        <h2>Man Power</h2>
                    </div>
                </div>
                <!-- Man Power end -->
               
                    
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- counting section end -->


<!-- our solutions start -->
<section class="home-solution section-padding">
    <div class="container">

        <!--title row start  -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: #006EAD">Our Solutions</h1>
            </div>
        </div>
        <!--title row end  -->

        <!-- solutions item row start -->
        <div class="row solutions-item-row">
            
            <!-- item start -->
            @foreach(App\Solution::orderBy('id','asc')->get() as $solution)
           
            <div class="col-md-4">
                <div class="item">
                    <img src="{{asset('images/solution/'.$solution->icon_image)}}" class="img-fluid" alt="">
                    <div class="solution-item-text">
                        <h3 class="text-center">{{$solution->title}}</h3>
                        <p class="text-justify">{{$solution->paragraph}} </p>
                    </div>
                    <div class="item-hover">
                        <i class="fas fa-anchor"></i>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- item end -->

           
        </div>
        <!-- solutions item row end -->

    </div>
</section>
<!-- our solutions end -->


<!-- our clients section start -->
<section class="our-client section-padding">
    <div class="container">

        <!--title row start  -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style=" color: white; ">Our Major Clients</h1>
            </div>
        </div>
        <!--title row end  -->

        <!-- clients slider start -->
        <div class="row client-carousel-row">

            <div class="client-carousel owl-carousel owl-theme">
                @foreach(App\Client::orderBy('id','asc')->get() as $client)
                <div class="item">
                    <div class="col-md-12">
                        <img src="{{asset('images/client/'. $client->image)}}" calss="img-fluid" alt="">
                    </div>
                </div>
                @endforeach
                

            </div>

        </div>
        <!-- clients slider end -->

    </div>
</section>
<!-- our clients section end -->


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
                    @foreach(App\Project::orderBy('id','asc')->get() as $project)
                    <div class="col-md-6">
                        
                        
                        <div class="project-box">
                            

                            <img src="{{asset('images/project/'.$project->project_image )}}" class="img-fluid" alt="">

                            
                            
                            <div class="project-hover">
                                <a data-fancybox="gallery"  href="{{asset('images/project/'.$project->project_image )}}">
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