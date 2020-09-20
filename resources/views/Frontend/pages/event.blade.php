@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- news and event banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/IMG_20200126_121815.jpg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">news & event</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news and event banner end -->


<!-- services information start -->
<section class="services-info section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">

            <!-- left part start -->
            <div class="col-md-4">
                <div class="left">
                    <ul>
                        @php
                            $i = 0;
                        @endphp
                        @foreach(App\Events::orderBy('id','desc')->get() as $event) 
                        @if( $i == 0 )
                        <li class="services-click active-item {{$event->id}}" id="{{ $event->id }}">
                            <i class="fas fa-angle-double-right"></i> {{$event->title}}
                        </li>
                        @endif
                        @php
                            $i--;
                        @endphp
                        @endforeach

                        @php
                            $i = 0;
                        @endphp
                        @foreach(App\Events::orderBy('id','desc')->get() as $event) 
                        @if( $i != 0 )
                            <li class="services-click {{$event->id}}" id="{{ $event->id }}">
                            <i class="fas fa-angle-double-right"></i> {{$event->title}}
                        </li>
                        @endif
                        @php
                            $i++;
                        @endphp
                        @endforeach
                        
                    </ul>                
                </div>            
            </div>
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-8">

                <!-- item start -->
                @php
                    $i = 0;
                @endphp
                @foreach(App\Events::orderBy('id','desc')->get() as $event) 
                @if( $i == 0 )
                <div class="right services-item active-service {{ $event->id }}">
                    <h3>{{$event->title}}</h3>    
                    <div class="services-content">
                        {!!$event->services !!}

                        <div class="event-carousel owl-carousel owl-theme">
                            <!-- item start -->
                            @foreach(App\eventImages::orderBy('id','desc')->where('event_id',$event->id)->get() as $eventImage) 
                            <div class="item">
                                <img src="{{ asset('images/event/'.$eventImage->image) }}" class="img-fluid" alt="">                        
                            </div>
                            @endforeach
                            <!-- item end -->

                         
                        </div>

                    </div>            
                </div>
                @endif
                @php
                    $i--;
                @endphp
                @endforeach
                <!-- item end -->

                <!-- item start -->
                @php
                    $i = 0;
                @endphp
                @foreach(App\Events::orderBy('id','desc')->get() as $event) 
                @if( $i != 0 )
                <div class="right services-item {{ $event->id }}">
                    <h3>{{$event->title}}</h3>    
                    <div class="services-content">
                        {!!$event->services !!}

                        <div class="event-carousel owl-carousel owl-theme">
                            <!-- item start -->
                            @foreach(App\eventImages::orderBy('id','desc')->where('event_id',$event->id)->get() as $eventImage) 
                            <div class="item">
                                <img src="{{ asset('images/event/'.$eventImage->image) }}" class="img-fluid" alt="">                        
                            </div>
                            @endforeach
                            <!-- item end -->

                         
                        </div>

                    </div>            
                </div>
                @endif
                @php
                    $i++;
                @endphp
                @endforeach
                <!-- item end -->

            </div>
            <!-- right part end -->
        
        </div>        
    </div>

</section>
<!-- services information end -->



@include ('frontend.include.footer')