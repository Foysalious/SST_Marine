@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- services banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/bashundhara-lpg-3_9145891_27439_Large1.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Our Services</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services banner end -->


<!-- services information start -->
<section class="services-info section-padding" style="background-image:  url('{{ asset('Frontend/images/services-bg-2.png') }}'); background-size: cover; background-position: center ">
    <div class="container">
        <div class="row">

            <!-- left part start -->
            <div class="col-md-4">
                <div class="left">
                    <ul>
                        @php
                            $i = 0
                        @endphp
                        @foreach(App\ServicePage::orderBy('id','desc')->get() as $service) 
                        @if( $i == 0 )
                        <li class="services-click active-item {{$service->id}}" id="{{$service->id}}">
                            <i class="fas fa-angle-double-right"></i> {{$service->title}}
                        </li>
                        @endif
                        @php
                            $i--
                        @endphp
                       @endforeach

                        @php
                            $i = 0
                        @endphp
                        @foreach(App\ServicePage::orderBy('id','desc')->get() as $service) 
                        @if( $i != 0 )
                        <li class="services-click {{$service->id}}" id="{{$service->id}}">
                            <i class="fas fa-angle-double-right"></i> {{$service->title}}
                        </li>
                        @endif
                        @php
                            $i++
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
                    $i = 0
                @endphp
                @foreach(App\ServicePage::orderBy('id','desc')->get() as $service)
                @if( $i == 0 ) 
                <div class="right services-item active-service {{$service->id}}">
                    <h3>{{$service->title}}</h3>    
                    <div class="services-content">
                        {!!$service->services!!}            
                    </div>            
                </div>
                @endif
                @php
                    $i--
                @endphp
                @endforeach

                @php
                    $i = 0
                @endphp
                @foreach(App\ServicePage::orderBy('id','desc')->get() as $service)
                @if( $i != 0 ) 
                <div class="right services-item {{$service->id}}">
                    <h3>{{$service->title}}</h3>    
                    <div class="services-content">
                        {!!$service->services!!}            
                    </div>            
                </div>
                @endif
                @php
                    $i++
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