@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- project detail banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " "; background-position: bottom ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">{{$ship->vessel_name}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project detail banner end -->


<!-- project detail information start -->
<section class="p-detail-info section-padding">
    <div class="container">
        <div class="row">
        
            <!-- left part start -->
            <div class="col-md-7">
                <div class="left">
                    
                        {!!$ship->description!!}
                    
                    <h3>feature</h3>
                    {!!$ship->features!!}
                </div>
            </div>
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-5">
                <div class="right">
                    <img src="{{asset('images/protfolio/'.$ship->image)}}" class="img-fluid" alt="">
                    <div class="project-info">
                        <ul>
                            <li>
                                <span>
                                    <i class="fas fa-th"></i> category -
                                </span>
                                {{$ship->category}}
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-ship"></i> Name of The Vessel -
                                </span>
                                {{$ship->name}}
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-user"></i> owner -
                                </span>
                                {{$ship->owner}}
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-cog"></i> builder -
                                </span>
                                {{$ship->builder}}
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-anchor"></i> class -
                                </span>
                                {{$ship->class}}
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-calendar-alt"></i> Date -
                                </span>
                                {{$ship->build_date}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- right part start -->


        </div>
    </div>
</section>
<!-- project detail information end -->



@include ('frontend.include.footer')
