<!-- navbar item mob start -->
<div class="navbar-box">
    <div class="navbar-box-child">

        <!-- top part start -->
        <div class="nav-top hide-nav">
            <i class="fas fa-times"></i> Close Menu                 
        </div>
        <!-- top part end -->

        <!-- nav item start -->
        <div class="nav-item">
            <ul>
                <li>
                    <a href="index.php">
                        home
                    </a>
                </li>
                <li class="parent-item">
                    <a href="about.php">
                        about
                    </a>
                    <i class="fas fa-plus show-child"></i>
                    <i class="fas fa-minus hide-child"></i>
                </li>
                <div class="child-item">
                    <ul>
                        <li>
                            <a href="team.php">
                                <i class="fas fa-angle-right"></i> team
                            </a>
                        </li>
                    </ul>
                </div>
                
                <li>
                    <a href="services.php">
                        services
                    </a>
                </li>
                <li>
                    <a href="technology.php">
                        technology
                    </a>
                </li>
                <li>
                    <a href="projects.php">
                        projects
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        contact us
                    </a>
                </li>
            </ul>
        </div>
        <!-- nav item end -->

        <!-- navbar media start -->
        <div class="navbar-media">
            <ul>
                <li>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- navbar media end -->

        <!-- navbar search start -->
        <div class="navbar-search">

        <form action="{{route('search')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name= "search" placeholder="Search...">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div> 
        <!-- navbar search end -->

    </div>
</div>
<!-- navbar item mob end -->









<!-- body content start -->
<div class="body-content" id="body-content">



    <!-- topbar pc start -->
    <section class="topbar-pc for-pc">
        <div class="container">
            <div class="row">

                <!-- logo start -->
                <div class="col-md-2">
                    <div class="logo">
                        <a href="index.php">
                        <img src="{{asset('Frontend/images/logo.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <!-- logo end --> 

                <!-- navbar title start -->
                <div class="col-md-5">
                    <div class="navbar-title">
                        <h2><i>SST MARINE SOLUTIONS LIMITED</i></h2>
                        <marquee><i>......a passion for ship design</i></marquee>
                    </div>
                </div>
                <!-- navbar title end -->

                <!-- search start -->
                <div class="col-md-2">
                    <div class="search-box">
                        <form action="{{route('search')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Search...">
                                <button type="submit" class="search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- search end -->
            
                @foreach(App\Contact::orderBy('id','asc')->get() as $contact)
                <!-- social link start -->
                <div class="col-md-3">
                    <div class="social-media">
                        <ul>
                            <li>
                                <a href="{{$contact->facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$contact->instagram}}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <!-- social link end -->

            </div>
        </div>
    </section>
    <!-- topbar pc end -->


    <!-- topbar mob start -->
    <section class="topbar-mob for-mob">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php">
                        <img src="images/logo.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- topbar mob end -->