@include('front_end.layouts.header')
        <!-- STAR HEADER SEARCH -->
        <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1 class="h1">Find Your Dream
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                    <p class="mt-4">We Have Over Million Properties For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
<div class="col-12">
<div class="banner-search-wrap">
<ul class="nav nav-tabs rld-banner-tab">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="tabs_1">
        <div class="rld-main-search">
            <div class="row">
                <div class="rld-single-input">
                    <input type="text" placeholder="Enter Keyword...">
                </div>
                <div class="rld-single-select ml-22">
                    <select class="select single-select">
                        <option value="1">Property Type</option>
                        <option value="2">Family House</option>
                        <option value="3">Apartment</option>
                        
                    </select>
                </div>
                <div class="rld-single-select">
                    <select class="select single-select mr-0">
                        <option value="1">Location</option>
                        <option value="2">Los Angeles</option>
                        <option value="3">Chicago</option>
                        <option value="3">Philadelphia</option>
                        <option value="3">San Francisco</option>
                        <option value="3">Miami</option>
                        <option value="3">Houston</option>
                    </select>
                </div>
               
                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                    <a class="btn btn-yellow" href="#">Search Now</a>
                </div>
                <div class="explore__form-checkbox-list full-filter">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                            <!-- Form Property Status -->
                            <div class="form-group categories">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">For Sale</li>
                                        <li data-value="2" class="option">For Rent</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Form Property Status -->
                        </div>
                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                            <!-- Form Bedrooms -->
                            <div class="form-group beds">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">1</li>
                                        <li data-value="2" class="option">2</li>
                                        <li data-value="3" class="option">3</li>
                                        <li data-value="3" class="option">4</li>
                                        <li data-value="3" class="option">5</li>
                                        <li data-value="3" class="option">6</li>
                                        <li data-value="3" class="option">7</li>
                                        <li data-value="3" class="option">8</li>
                                        <li data-value="3" class="option">9</li>
                                        <li data-value="3" class="option">10</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Form Bedrooms -->
                        </div>
                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                            <!-- Form Bathrooms -->
                            <div class="form-group bath">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">1</li>
                                        <li data-value="2" class="option">2</li>
                                        <li data-value="3" class="option">3</li>
                                        <li data-value="3" class="option">4</li>
                                        <li data-value="3" class="option">5</li>
                                        <li data-value="3" class="option">6</li>
                                        <li data-value="3" class="option">7</li>
                                        <li data-value="3" class="option">8</li>
                                        <li data-value="3" class="option">9</li>
                                        <li data-value="3" class="option">10</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Form Bathrooms -->
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                            <!-- Price Fields -->
                            <div class="main-search-field-2">
                                <!-- Area Range -->
                                <div class="range-slider">
                                    <label>Area Size</label>
                                    <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <br>
                                <!-- Price Range -->
                                <div class="range-slider">
                                    <label>Price Range</label>
                                    <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                <input id="check-2" type="checkbox" name="check">
                                <label for="check-2">Air Conditioning</label>
                                <input id="check-3" type="checkbox" name="check">
                                <label for="check-3">Swimming Pool</label>
                                <input id="check-4" type="checkbox" name="check">
                                <label for="check-4">Central Heating</label>
                                <input id="check-5" type="checkbox" name="check">
                                <label for="check-5">Laundry Room</label>
                                <input id="check-6" type="checkbox" name="check">
                                <label for="check-6">Gym</label>
                                <input id="check-7" type="checkbox" name="check">
                                <label for="check-7">Alarm</label>
                                <input id="check-8" type="checkbox" name="check">
                                <label for="check-8">Window Covering</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                <input id="check-9" type="checkbox" name="check">
                                <label for="check-9">WiFi</label>
                                <input id="check-10" type="checkbox" name="check">
                                <label for="check-10">TV Cable</label>
                                <input id="check-11" type="checkbox" name="check">
                                <label for="check-11">Dryer</label>
                                <input id="check-12" type="checkbox" name="check">
                                <label for="check-12">Microwave</label>
                                <input id="check-13" type="checkbox" name="check">
                                <label for="check-13">Washer</label>
                                <input id="check-14" type="checkbox" name="check">
                                <label for="check-14">Refrigerator</label>
                                <input id="check-15" type="checkbox" name="check">
                                <label for="check-15">Outdoor Shower</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="tab-pane fade" id="tabs_2">
            <div class="rld-main-search">
                <div class="row">
                    <div class="rld-single-input">
                        <input type="text" placeholder="Enter Keyword...">
                    </div>
                    <div class="rld-single-select ml-22">
                        <select class="select single-select">
                            <option value="1">Property Type</option>
                            <option value="2">Family House</option>
                            <option value="3">Apartment</option>
                            <option value="3">Condo</option>
                        </select>
                    </div>
                    <div class="rld-single-select">
                        <select class="select single-select mr-0">
                            <option value="1">Location</option>
                            <option value="2">Los Angeles</option>
                            <option value="3">Chicago</option>
                            <option value="3">Philadelphia</option>
                            <option value="3">San Francisco</option>
                            <option value="3">Miami</option>
                            <option value="3">Houston</option>
                        </select>
                    </div>
                    
                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                        <a class="btn btn-yellow" href="#">Search Now</a>
                    </div>
                    <div class="explore__form-checkbox-list full-filter">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                <!-- Form Property Status -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">For Sale</li>
                                            <li data-value="2" class="option">For Rent</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                            </div>
                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                <!-- Form Bedrooms -->
                                <div class="form-group beds">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1</li>
                                            <li data-value="2" class="option">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="3" class="option">4</li>
                                            <li data-value="3" class="option">5</li>
                                            <li data-value="3" class="option">6</li>
                                            <li data-value="3" class="option">7</li>
                                            <li data-value="3" class="option">8</li>
                                            <li data-value="3" class="option">9</li>
                                            <li data-value="3" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                            </div>
                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1</li>
                                            <li data-value="2" class="option">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="3" class="option">4</li>
                                            <li data-value="3" class="option">5</li>
                                            <li data-value="3" class="option">6</li>
                                            <li data-value="3" class="option">7</li>
                                            <li data-value="3" class="option">8</li>
                                            <li data-value="3" class="option">9</li>
                                            <li data-value="3" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                <!-- Price Fields -->
                                <div class="main-search-field-2">
                                    <!-- Area Range -->
                                    <div class="range-slider">
                                        <label>Area Size</label>
                                        <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <br>
                                    <!-- Price Range -->
                                    <div class="range-slider">
                                        <label>Price Range</label>
                                        <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                <!-- Checkboxes -->
                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                    <input id="check-16" type="checkbox" name="check">
                                    <label for="check-16">Air Conditioning</label>
                                    <input id="check-17" type="checkbox" name="check">
                                    <label for="check-17">Swimming Pool</label>
                                    <input id="check-18" type="checkbox" name="check">
                                    <label for="check-18">Central Heating</label>
                                    <input id="check-19" type="checkbox" name="check">
                                    <label for="check-19">Laundry Room</label>
                                    <input id="check-20" type="checkbox" name="check">
                                    <label for="check-20">Gym</label>
                                    <input id="check-21" type="checkbox" name="check">
                                    <label for="check-21">Alarm</label>
                                    <input id="check-22" type="checkbox" name="check">
                                    <label for="check-22">Window Covering</label>
                                </div>
                                <!-- Checkboxes / End -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                <!-- Checkboxes -->
                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                    <input id="check-23" type="checkbox" name="check">
                                    <label for="check-23">WiFi</label>
                                    <input id="check-24" type="checkbox" name="check">
                                    <label for="check-24">TV Cable</label>
                                    <input id="check-25" type="checkbox" name="check">
                                    <label for="check-25">Dryer</label>
                                    <input id="check-26" type="checkbox" name="check">
                                    <label for="check-26">Microwave</label>
                                    <input id="check-27" type="checkbox" name="check">
                                    <label for="check-27">Washer</label>
                                    <input id="check-28" type="checkbox" name="check">
                                    <label for="check-28">Refrigerator</label>
                                    <input id="check-29" type="checkbox" name="check">
                                    <label for="check-29">Outdoor Shower</label>
                                </div>
                                <!-- Checkboxes / End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/ End Search Form -->
</div>
</div>
</div>
</div>
</div>
</section>
<!-- END HEADER SEARCH -->
        
       
        <!-- START SECTION SALE PROPERTIES -->
        <section class="featured portfolio bg-white-2 rec-pro full-l">
            <div class="container-fluid">
                <div class="sec-title mb-10">
                    <h2><span style="color: red; font-weight: bold">Sale </span>Properties</h2>
                    <p>These are our featured properties</p>
                </div>
                <div class="row portfolio-items">
                    @foreach ($sale as $sales)
                        
                   
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="/sale_pro_image/{{$sales->image}}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">{{$sales->SPRelation->name}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>{{$sales->mun->m_name}}, {{$sales->mun->DMbelongTo->name}}, {{$sales->country1->name}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                   
                                        <span>{{$sales->description}}</span>
                                  
                                   
                                   
                                    
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">Rs.{{$sales->price}}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="bg-all">
                    <a href="properties-full-grid-1.html" class="btn btn-outline-light">View More</a>
                </div>
            </div>
        </section>
        <!-- END SECTION SALE PROPERTIES -->

       <!-- START SECTION Rent PROPERTIES -->
       <section class="featured portfolio bg-white-2 rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span style="color: red; font-weight: bold">Rent </span>Properties</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="row portfolio-items">
                @foreach ($rent as $rents )
                    
               
                <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-right">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Rent</div>
                                    <img src="/rent_pro_image/{{$rents->image}}" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">{{$rents->RPRelation->name}}</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>{{$rents->MRRelation->m_name}}</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                               <p>{{$rents->description}}</p>
                            </ul>
                            <div class="price-properties footer pt-3 pb-0">
                                <h3 class="title mt-3">
                                 <a href="single-property-1.html">Rs.{{$rents->price}}</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="flaticon-share"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="bg-all">
                <a href="properties-full-grid-1.html" class="btn btn-outline-light">View More</a>
            </div>
        </div>
    </section>
    <!-- END SECTION Rent PROPERTIES -->


        <!-- START SECTION RECENTLY PROPERTIES -->
        <section class="featured portfolio rec-pro disc">
            <div class="container-fluid">
                <div class="sec-title discover">
                    <h2><span>Discover </span>Popular Properties</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="/sale_pro_image/{{$sales->image}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 350,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="/rent_pro_image/{{$rents->image}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 150,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION RECENTLY PROPERTIES -->

<!-- START SECTION AGENTS -->
<section class="team bg-white-3">
    <div class="container-fluid recently-slider">
        <div class="sec-title">
            <h2><span style="color: red; font-weight: bold">Meet Our </span>Agents</h2>
            <p>Our Agents are here to help you</p>
        </div>
        <div class="row">
            <div class="owl-carousel job_clientSlide">
                <!--Team Block-->
               
                @foreach ($agent as $ag)
                <div class="team-block" >
                    
                    <div class="inner-box team-details col-md-8">
                        <div class="image team-head">
                            <a href="#"><img src="/agent_image/{{$ag->image}}" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">{{$ag->name}}</a></h3>
                            <div class="designation">{{$ag->email}}</div>
                        </div>
                    </div>

                    
                </div>
                
                @endforeach
                
            </div>
        </div>
    </div>
</section>
<!-- END SECTION AGENTS -->
        <!-- START SECTION TESTIMONIALS -->
        <section class="testimonials bg-white-2 rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span style="color: red; font-weight: bold">Clients </span>Testimonials</h2>
                    <p>We collect reviews from our customers.</p>
                </div>
                <div class="owl-carousel job_clientSlide">

                       
                
                    <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-2.jpg" alt=""/></span>
                            <h5>Jhon Morris</h5>
                            <p>Los Angeles</p>
                        </div>
                    </div>
                    <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-3.jpg" alt=""/></span>
                            <h5>Mary Deshaw</h5>
                            <p>Chicago</p>
                        </div>
                    </div>
                    <div class="singleJobClinet">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-4.jpg" alt=""/></span>
                            <h5>Gary Steven</h5>
                            <p>Philadelphia</p>
                        </div>
                    </div>
                    <div class="singleJobClinet">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-5.jpg" alt=""/></span>
                            <h5>Cristy Mayer</h5>
                            <p>San Francisco</p>
                        </div>
                    </div>
                    <div class="singleJobClinet">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-6.jpg" alt=""/></span>
                            <h5>Ichiro Tasaka</h5>
                            <p>Houston</p>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIALS -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span style="color: red; font-weight: bold">Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    @foreach($agent as $part)
                    <div class="owl-item" data-aos="fade-up"><img src="agent_image/{{$part->image}}" alt=""></div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

       @include('front_end.layouts.footer')
