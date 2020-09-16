	<footer>
		<div class="container">
			<div class="row">
				
				<!-- widget one start -->
				<div class="col-md-2">
					<div class="widget-item image">
						<img src="{{asset('Frontend/images/logo.png')}}" class="img-fluid" alt="">				
					</div>
				</div>
				<!-- widget one end -->

				<!-- widget two start -->
				<div class="col-md-4">
					<div class="widget-item copyright">
						<p>Copyright © 2010 SST Marine Solutions | All rights reserved | Developed by <a href="">SST Tech Ltd.</a> - The Software Company</p>	
					</div>
				</div>
				<!-- widget two end -->

				<!-- widget three start -->
				@foreach(App\Contact::orderBy('id','asc')->get() as $contact)
				<div class="col-md-6">
					<div class="widget-item">
						<h3>Contact Us</h3>		
						<ul>
							<li>
								<i class="fas fa-phone"></i> {{$contact->number}}
							</li>
							<li style="text-transform: lowercase">
								<i class="fas fa-envelope-open"></i> {{$contact->email}}
							</li>
							<li>
								<i class="fas fa-map-marker-alt"></i> {{$contact->address}}
							</li>
						</ul>	
						<div class="social-share">
							<ul>
								<li>
								<a href="{{$contact->facebook}}">
										<i class="fab fa-facebook-f"></i>
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
				</div>
				@endforeach
				<!-- widget three end -->

			</div>
		</div>
	</footer>

</div>
<!-- body content end -->


<!-- go to top start -->
<div class="go-to-top">
	<a href="#body-content">
		<i class="fas fa-angle-up"></i>
	</a>
</div>
<!-- go to top end -->



	<!-- jquery lib file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- jqeury ui js -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<!-- the main bootstrap file -->
	<script type="text/javascript" src="{{asset('Frontend/js/bootstrap.min.js')}}" ></script>

	
	<!-- owl carousel js file -->
	<script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	

	<!-- counter up js -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="{{asset('Frontend/js/jquery.counterup.min.js')}}"></script> 
 
	<script src="{{asset('Frontend/js/fencybox-2.min.js')}}"></script>

	<!-- the main js file -->
	

	<script type="text/javascript" src="{{asset('Frontend/js/main.js')}}" ></script>
	<script type="text/javascript" src="{{asset('Frontend/js/fency.js')}}" ></script>
	


</body>
</html>