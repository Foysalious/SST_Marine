<!-- navbar pc start -->
<section class="navbar-pc for-pc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar">
                    <ul>

                        <li>
                        <a href="{{route('homePage')}}">home</a>
                        </li>

                        <li class="parent-nav">
                            <a href="{{route('aboutPage')}}">about <i class="fas fa-angle-down"></i> </a>
                            <div class="child-nav">
                                <ul>
                                    <li>
                                        <a href="{{route('teamPage')}}">Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="{{route('servicePage')}}">services</a>
                        </li>

                        <li>
                            <a href="{{route('technologyPage')}}">technology</a>
                        </li>

                        <li>
                            <a href="{{route('projectPage')}}">projects</a>
                        </li>

                        <li>
                            <a href="{{route('contactPage')}}">contact us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- navbar pc end -->





















<!-- navbar mob start -->
<section class="navbar-mob for-mob">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center show-nav">
                <i class="fas fa-bars"></i> menu
            </div>
        </div>
    </div>
</section>
<!-- navbar mob end -->

