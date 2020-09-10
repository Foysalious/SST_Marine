@include ('frontend.include.header')
@include ('frontend.include.topbar')
@include ('frontend.include.navbar')

<!-- services banner start -->
<section class="about-banner" style=" background-image: url('{{ asset('Frontend/images/PIL-14-2.jpeg') }}') " ">
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
<section class="services-info section-padding">
    <div class="container">
        
        <div class="row services-info-row">
            <!-- design left start -->
            <div class="col-md-4">
                <div class="design-left">
                    <h1>Ship Design</h1>
                </div>
            </div>
            <!-- design left end -->

            <!-- right part start -->
            <div class="col-md-8 for-desktop">
                <div class="row">

                    <!-- item start -->
                    @foreach(App\ServicePage::orderBy('id','asc')->where('services','Ship Design')->get() as $service)
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> {{$service->title}}
                        </p>
                    </div>
                    @endforeach
                    <!-- item end -->

                    
                    

                </div>
            </div>
            <!-- right part end -->

            <!-- right part start -->
            <div class="col-md-12 for-phn">
                <div class="row">

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Conceptual Design & Feasibility study.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Interior Design.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> General Arrangement (GA) & Specifications.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Mechanical /Piping/Machinery.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Optimized Hull Form Design.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Electrical.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Hull structures & Outfitting.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-ship"></i> Shipyard Production dwg.
                        </p>
                    </div>
                    <!-- item end -->

                </div>
            </div>
            <!-- right part end -->
        </div>

        <div class="row services-info-row for-desktop">

            <!-- left part start -->
            <div class="col-md-8">
                <div class="row">

                    <!-- item start -->
                    @foreach(App\ServicePage::orderBy('id','desc')->where('services','Engineering Services')->get() as $service)
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-toolbox"></i> {{ $service->title}}
                        </p>
                    </div>
                    <!-- item end -->
                    @endforeach
                    

                </div>
            </div>
            <!-- left part end -->

            <!-- design right start -->
            <div class="col-md-4">
                <div class="design-right">
                    <h1>Engineering Services</h1>
                </div>
            </div>
            <!-- design right end -->

            
        </div>

        <div class="row services-info-row for-phn">

            <!-- design left start -->
            <div class="col-md-4">
                <div class="design-left">
                    <h1>Engineering Services</h1>
                </div>
            </div>
            <!-- design left end -->

            <!-- right part start -->
            <div class="col-md-12">
                <div class="row">

                    <!-- item end -->

                   
                </div>
            </div>
            <!-- right part end -->

            
        </div>

        <div class="row services-info-row">
            <!-- design left start -->
            <div class="col-md-4">
                <div class="design-left">
                    <h1>Consultancy</h1>
                </div>
            </div>
            <!-- design left end -->

            <!-- right part start -->
            <div class="col-md-8 for-desktop">
                <div class="row">

                    <!-- item start -->
                    @foreach(App\ServicePage::orderBy('id','asc')->where('services','Consultancy')->get() as $service)
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> {{$service->title}}
                        </p>
                    </div>
                    <!-- item end -->
                    @endforeach
                   

                </div>
            </div>
            <!-- right part end -->

            <!-- right part start -->
            <div class="col-md-12 for-phn">
                <div class="row">

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> Shipyard Evaluations.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> Third Party Investigations.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> Assistance in Tenders, Enquires &Estimates.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> Shipyard Layout.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> Constructability Studies.
                        </p>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-md-6 right">
                        <p>
                            <i class="fas fa-headset"></i> Supervision of Construction.
                        </p>
                    </div>
                    <!-- item end -->

                </div>
            </div>
            <!-- right part end -->
        </div>

        <div class="row services-info-row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fab fa-servicestack"></i> Development of Ship Design and Basic Drawings of all types of Marine Crafts up to 150m in length.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Preparation and arranging approval of concerned classification Society and Statutory Authority of construction drawings for Hull, Outfit, Machinery and electrical.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Investigation of problem related to ship operation and working out a solution.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Attending Sea Trial, Preparation of Trial Report.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Preparation of Tender Specification and tender Documents on behalf of Owner.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Preparation of Cost Estimation.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Supervision of ship in construction and in Conversion.
                    </li>
                    <li>
                        <i class="fab fa-servicestack"></i> Ship Design Calculation complying latest applicable IMO/Classification Rules, such as:
                    </li>
                </ul>
            </div>

            <div class="col-md-12 services-info-row-two">
                <ul>
                    <li>
                        <i class="fas fa-cog"></i> Basic Design Calculation.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Resistance and Propulsion Calculation.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Computation of Trimmed Hydrostatics and Cross Curve.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Intact Stability Computation complying IMO A.749(18).
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Damage Stability Computation complying SOLAS/MARPOL/ILCC.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Grain Stability Computation complying SOLAS.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Hull Section Modulus Calculation.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Preparation of Cargo Securing Manual.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Preparation of Life Saving Plan, Fire Control Plan and light & Sound Signal plan complying latest international regulation.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Load Line Computation as per Load Line Convention.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Tonnage Computation.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Propeller design and drawing meeting ship operation requirements.
                    </li>
                </ul>
            </div>
        </div>

        <div class="row services-info-row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fab fa-servicestack"></i> Detail Engineering Design :
                    </li>
                </ul>
            </div>

            <div class="col-md-12 services-info-row-two">
                <ul>
                    <li>
                        <i class="fas fa-cog"></i> Complete 3D modeling of the whole vessel—Hull & Structure, Machinery & Outfit, Piping etc.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Complete production drawings (Block brawing) for Hull & Structure, Bill of Materials, Bending Template, End-cut details, welding schedule.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Complete Nesting plan with Plate and Profile Part list details.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Complete Plate-cutting information along with CNC machine cutting code.
                    </li>
                    <li>
                        <i class="fas fa-cog"></i> Complete manufacturing drawing of piping.
                    </li>
                </ul>
            </div>
        </div>

    </div>

</section>
<!-- services information end -->



@include ('frontend.include.footer')