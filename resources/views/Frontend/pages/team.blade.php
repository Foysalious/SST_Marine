@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- team banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
    
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Team</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team banner end -->


<!-- management section start -->
<section class="management section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">management</h1>            
            </div>
        </div>    

        <!-- management row start -->
        <div class="row management-row">

            <!-- item start -->
            @foreach(App\Team::orderBy('id','asc')->where('team','Management')->get() as $team)
            <div class="col-md-4">
                <div class="management-item">
                    <img src="{{asset('images/team/'.$team->image)}}" class="img-fluid" alt="">
                    <div class="management-content text-center">
                    <h3>{{$team->name}}</h3>
                        <p>{{$team->designation}}</p>
                        <ul>
                            <li>
                                <a href="{{$team->facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$team->linkedin}}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$team->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
            @endforeach
            <!-- item end -->

        </div>
        <!-- management row end -->

    </div>
</section>
<!-- management section end -->


<!-- engineer section start -->
<section class="engineer section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">engineers</h1>            
            </div>
        </div>    

        <!-- engineer row start -->
        <div class="row engineer-row">

            <!-- item start -->
            @foreach(App\Team::orderBy('id','asc')->where('team','Engineers')->get() as $team)
            <div class="col-md-4">
                <div class="engineer-item">
                    <img src="{{asset('images/team/'.$team->image)}}" class="img-fluid" alt="">
                    <div class="engineer-content text-center">
                        <h3>{{$team->facebook}}</h3>
                        <p>{{$team->designation}}</p>
                        <ul>
                            <li>
                                <a href="{{$team->facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$team->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$team->linkedin}}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- item end -->

        </div>
        <!-- engineer row end -->

    </div>
</section>
<!-- engineer section end -->


@extends ('frontend.include.footer')