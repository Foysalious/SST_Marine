@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')


<!-- contact banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">contact us</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact banner end -->


<!-- contact information start -->
<section class="contact-info section-padding" >
    <div class="container">
        <div class="row">

            <!-- left part start -->
            @foreach(App\Contact::orderBy('id','asc')->get() as $contact)
            <div class="col-md-6">
                <div class="left">
                    <h3>
                        <i class="fas fa-phone"></i> {{$contact->number}}
                    </h3>
                    <h3>
                        <i class="fas fa-envelope"></i> {{$contact->email}}
                    </h3>
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> {{$contact->address}}
                    </h3>
                    <ul>
                        <li>
                            <a href="{{$contact->facebook}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$contact->twitter}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$contact->instagram}}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$contact->linkedin}}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$contact->youtube}}">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
            <!-- left part end -->

            <!-- right part start -->
            <div class="col-md-6">
                <div class="right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d467519.16799676744!2d90.414398!3d23.729775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5a4b94b3056b70a!2sSST%20Marine%20Solutions%20Ltd.!5e0!3m2!1sen!2sus!4v1599126485403!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <!-- right part end -->

        </div>
    </div>
</section>
<!-- contact information end -->


<!-- contact form start -->
<section class="contact-form section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="createAd" >
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" >
                                    SEND
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact form end -->


@include ('frontend.include.footer')
