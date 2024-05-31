@extends('layout.mainlayout')
@section('content')

	<!-- Home Banner -->
    <section class="home-slide  home-slide-five home-slide-eight d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="home-slide-face slide-face-eight aos" data-aos="fade-up">
                        <div class="home-slide-text ">
                            <h1>Learn New Skills with Top <span>Mentors</span> </h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <!-- Search -->
                        <div class="search-box search-eightbox">
                            <form action="search.html">
                                <div class="form-group search-info location-search location-search-four six-banner-search">
                                    <input type="text" class="form-control text-truncate key" placeholder=" Keyword / Course Name">
                                    <input type="text" class="form-control text-truncate city" placeholder=" City or Postalcode">
                                    <a href="{{url('search')}}" class=""><img src="{{URL::asset('/assets/img/icon/search-10.svg')}}" alt=""></a>
                                </div>
                            </form>
                        </div>
                        <!-- /Search -->
                        <div class="pop-search">
                            <p><span>Popular Search :</span> Designer, Developer, Web, iOS, PHP</p>
                        </div>
                    </div>
                </div>
                <div class="banner-tab-card">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Near Your Location</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">Best Rated</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-01.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Steve kennedy</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Norway</li>
                                                <li>12 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.5</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-02.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Stephan</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Canada</li>
                                                <li>18 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 5.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-03.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Cinderella</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">U.S.A</li>
                                                <li>17 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.8</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-04.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">John Mathew</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Los Angeles</li>
                                                <li>15 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.7</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-01.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Steve kennedy</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Norway</li>
                                                <li>12 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.5</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-02.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Stephan</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Canada</li>
                                                <li>18 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 5.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-03.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Cinderella</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">U.S.A</li>
                                                <li>17 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.8</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-04.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">John Mathew</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Los Angeles</li>
                                                <li>15 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.7</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-01.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Steve kennedy</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Norway</li>
                                                <li>12 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.5</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-02.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Stephan</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Canada</li>
                                                <li>18 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 5.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-03.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">Cinderella</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">U.S.A</li>
                                                <li>17 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.8</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="banner-cards">
                                    <div class="banner-tab-img">
                                        <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/banner-card-04.jpg')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="team-content">
                                        <h4>
                                            <a href="{{url('profile')}}">John Mathew</a>
                                            <i class="fas fa-check-double"></i>
                                        </h4>
                                        <div class="view-student-three">
                                            <ul class="view-student-three-list justify-content-between">
                                                <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Los Angeles</li>
                                                <li>15 Courses</li>
                                                <li><span class="star-rate"><i class="fas fa-star"></i> </span> 4.7</li>
                                            </ul>
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
    <!-- /Home Banner -->

    <!-- Most popular Categories -->
    <section class="most-popular most-popular-five most-popular-six">
        <div class="container">
            <div class="heder-eight aos " data-aos="fade-up">
                <div class="section-head-eight">
                    <h2>Browse Top <span>Categories</span></h2>
                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                </div>
            </div>
            <div class="popular-categories aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five sub-categories-eight">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/categories/rec-01.jpg')}}" alt=""></span>
                                </div>
                                <div class="categories-text">
                                    <h4>Design & Development</h4>
                                    <h5>Over <span> 2500 </span> Courses</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five sub-categories-eight">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/categories/rec-02.jpg')}}" alt=""></span>
                                </div>
                                <div class="categories-text">
                                    <h4>Digital Marketing</h4>
                                    <h5>Over <span> 2500 </span> Courses</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five sub-categories-eight">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/categories/rec-03.jpg')}}" alt=""></span>
                                </div>
                                <div class="categories-text">
                                    <h4>Marketing & Communication</h4>
                                    <h5>Over <span> 2500 </span> Courses</h5>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five sub-categories-eight">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/categories/rec-04.jpg')}}" alt=""></span>
                                </div>
                                <div class="categories-text seo-text">
                                    <h4>SEO & Security</h4>
                                    <h5>Over <span> 2500 </span> Courses</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five sub-categories-eight">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/categories/rec-05.jpg')}}" alt=""></span>
                                </div>
                                <div class="categories-text">
                                    <h4>Business & Consulting</h4>
                                    <h5>Over <span> 2500 </span> Courses</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five sub-categories-eight">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/categories/rec-06.jpg')}}" alt=""></span>
                                </div>
                                <div class="categories-text">
                                    <h4>Finance Management</h4>
                                    <h5>Over <span> 2500 </span> Courses</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Most popular Categories -->

    <section class="banner-feature-sec work-eight-sec">
        <div class="container">
            <div class="section-bg-imgs">
                <img src="{{URL::asset('/assets/img/bg/arrow-bg.png')}}" class="img-fluid arrow-bg" alt="">
                <img src="{{URL::asset('/assets/img/bg/index-six-bg-01.png')}}" class="img-fluid arrow-bgtwo" alt="">
            </div>
            <div class="heder-eight aos" data-aos="fade-up">
                <div class="section-head-eight">
                    <h2>How It <span> Works?</span></h2>
                    <p>Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box feature-box-eight text-center aos" data-aos="fade-up">					
                        <div class="feature-header">
                            <div class="feature-icon">
                                <span class="circle"></span>
                                <i><img src="{{URL::asset('/assets/img/icon-1.png')}}" alt=""></i>
                            </div>		
                            <div class="feature-cont">	
                                <div class="feature-text">Sign up</div>
                            </div>
                        </div>
                        <p class="mb-0">Are you looking to join online Learning? Now it's very simple, Now Sign up</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box feature-box-eight text-center aos" data-aos="fade-up">					
                        <div class="feature-header">
                            <div class="feature-icon">
                                <span class="circle"></span>
                                <i><img src="{{URL::asset('/assets/img/icon-2.png')}}" alt=""></i>
                            </div>		
                            <div class="feature-cont">	
                                <div class="feature-text">Collaborate</div>
                            </div>
                        </div>
                        <p class="mb-0">Collaborate on your own timing, by scheduling with mentor booking</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box feature-box-eight text-center aos" data-aos="fade-up">					
                        <div class="feature-header">
                            <div class="feature-icon">
                                <span class="circle"></span>
                                <i><img src="{{URL::asset('/assets/img/icon-3.png')}}" alt=""></i>
                            </div>		
                            <div class="feature-cont">	
                                <div class="feature-text">Improve & Get Back</div>
                            </div>
                        </div>
                        <p class="mb-0">You can gather different skill set, and you can become mentor too</p>
                    </div>
                </div>	
            </div>
        </div>
    </section>

    <section class="trusted-by-sec">
        <div class="container">
            <div class="trusted-by" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="trust-list-title">
                            <h5>Trusted by</h5>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <ul class="trusted-list owl-carousel">
                            <li>
                                <div class="trust-icon">
                                    <img src="{{URL::asset('/assets/img/icon/trust-icon-01.svg')}}" alt="">
                                </div>
                                <span>Angular Js</span>
                            </li>
                            <li>
                                <div class="trust-icon">
                                    <img src="{{URL::asset('/assets/img/icon/trust-icon-02.svg')}}" alt="">
                                </div>
                                <span>App Store</span>
                            </li>
                            <li>
                                <div class="trust-icon">
                                    <img src="{{URL::asset('/assets/img/icon/trust-icon-03.svg')}}" alt="">
                                </div>
                                <span>Podcast</span>
                            </li>
                            <li>
                                <div class="trust-icon">
                                    <img src="{{URL::asset('/assets/img/icon/trust-icon-04.svg')}}" alt="">
                                </div>
                                <span>Promit</span>
                            </li>
                            <li>
                                <div class="trust-icon">
                                    <img src="{{URL::asset('/assets/img/icon/trust-icon-05.svg')}}" alt="">
                                </div>
                                <span>Dribble</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Most Trending  Courses -->
    <section class="section trending-courses trending-courses-three popular-course-three popular-course-five">
        <div class="container">
            <div class="aos " data-aos="fade-up">
                <div class="heder-eight aos " data-aos="fade-up">
                    <div class="section-head-eight">
                        <h2>Our Popular <span>Courses</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills course-eight-tab" id="pills-tab-two" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-allcourse-tab" data-bs-toggle="pill" data-bs-target="#pills-allcourse" type="button" role="tab" aria-controls="pills-allcourse" aria-selected="true">All Courses</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-animation-tab" data-bs-toggle="pill" data-bs-target="#pills-animation" type="button" role="tab" aria-controls="pills-animation" aria-selected="false" tabindex="-1">Animation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="false">Web Development</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false" tabindex="-1">SEO & Security</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-sales-tab" data-bs-toggle="pill" data-bs-target="#pills-sales" type="button" role="tab" aria-controls="pills-sales" aria-selected="false" tabindex="-1">Sales</button>
                </li>
            </ul>
            <div class="tab-content course-tab-six" id="pills-tabContent-two">
                <div class="tab-pane fade active show" id="pills-allcourse" role="tabpanel" aria-labelledby="pills-allcourse-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$30.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-15.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                4.8 <b> (2470)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">850 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">55 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$34.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-16.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                4.5 <b> (2500)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-animation" role="tabpanel" aria-labelledby="pills-animation-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-17.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">750 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$34.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-18.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">840 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$33.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-19.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$35.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                4.7 <b> (2466)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">650 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$32.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">850 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">55 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$35.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-17.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-18.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">850 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$34.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-19.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">650 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">45 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$37.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-sales" role="tabpanel" aria-labelledby="pills-sales-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-18.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-17.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$35.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$33.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
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
    <!-- Most Trending Courses -->

    <section class="improve-skills-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="skills-content">
                        <div class="skills-content-heading">							
                            <h2>Book Our Course & Improve Your Skills</h2>
                            <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam. Duis ludus no mea, te has delenit maiorum, an ius admodum constituto. Nostrud urbanitas.</p>
                        </div>
                        <div class="skills-counter">
                            <div class="counter-box">
                                <h5><span class="counterUp">5890</span>+</h5>
                                <h4>Students</h4>
                            </div>
                            <div class="counter-box">
                                <h5><span class="counterUp">254</span>k+</h5>
                                <h4>Courses</h4>
                            </div>
                            <div class="counter-box">
                                <h5><span class="counterUp">900</span>k+</h5>
                                <h4>Mentors</h4>
                            </div>
                        </div>
                        <div class="join-btns">
                            <a href="{{url('login')}}" class="join">Join Now</a>
                            <a href="{{url('search')}}" class="find">Find Mentor</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="improve-img">
                        <img src="{{URL::asset('/assets/img/improve-skill.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Trending  Courses -->
    <section class="section trending-courses trending-courses-three popular-course-three popular-course-five">
        <div class="container">
            <div class="aos " data-aos="fade-up">
                <div class="heder-eight aos " data-aos="fade-up">
                    <div class="section-head-eight">
                        <h2>Our Popular <span>Courses</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills course-eight-tab" id="pills-tab-three" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-allcoursetwo-tab" data-bs-toggle="pill" data-bs-target="#pills-allcoursetwo" type="button" role="tab" aria-controls="pills-allcoursetwo" aria-selected="true">All Courses</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-animationtwo-tab" data-bs-toggle="pill" data-bs-target="#pills-animationtwo" type="button" role="tab" aria-controls="pills-animationtwo" aria-selected="false" tabindex="-1">Animation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-webtwo-tab" data-bs-toggle="pill" data-bs-target="#pills-webtwo" type="button" role="tab" aria-controls="pills-webtwo" aria-selected="false">Web Development</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-securitytwo-tab" data-bs-toggle="pill" data-bs-target="#pills-securitytwo" type="button" role="tab" aria-controls="pills-securitytwo" aria-selected="false" tabindex="-1">SEO & Security</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-salestwo-tab" data-bs-toggle="pill" data-bs-target="#pills-salestwo" type="button" role="tab" aria-controls="pills-salestwo" aria-selected="false" tabindex="-1">Sales</button>
                </li>
            </ul>
            <div class="tab-content course-tab-six" id="pills-tabContent-three">
                <div class="tab-pane fade active show" id="pills-allcoursetwo" role="tabpanel" aria-labelledby="pills-allcoursetwo-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$30.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-15.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                4.8 <b> (2470)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">850 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">55 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$34.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-16.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                4.5 <b> (2500)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-animationtwo" role="tabpanel" aria-labelledby="pills-animationtwo-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-17.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">750 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$34.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-18.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">840 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$33.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-19.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$35.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-webtwo" role="tabpanel" aria-labelledby="pills-webtwo-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                4.7 <b> (2466)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">650 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$32.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">850 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">55 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$35.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-securitytwo" role="tabpanel" aria-labelledby="pills-securitytwo-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-17.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-18.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">850 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$34.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-19.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">650 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">45 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$37.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-salestwo" role="tabpanel" aria-labelledby="pills-salestwo-tab">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-18.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="popular">Popular</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$36.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-17.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Interview Question: Why Dont You Have a Degree?</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$35.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box course-box-five course-box-eight">
                                <div class="product">
                                    <div class="product-img trend-course">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="card-mark">
                                            <span class="mark">Marketing</span>
                                        </div>
                                        <div class="rating rate-star rating-star-five">	
                                            <span class="average-rating rate-point ">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                5.0 <b> (2566)</b>
                                            </span>
                                            <div class="feature-texts-eight">
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
                                        <div class="lesson-student-five">
                                            <div class="student-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                            </div>
                                            <div class="lesson-five">
                                                <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                            </div>
                                        </div>
                                        <div class="rating rating-star rating-two rating-five align-items-center justify-content-between">	
                                            <div class="course-btn">
                                                <span class="line-through">$40.00</span>
                                                <span>$33.00</span>
                                            </div>
                                            <span class="card-arrow">
                                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" alt=""></a>
                                            </span>
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
    <!-- Most Trending Courses -->

    <!-- Student Feedback -->
    <section class="student-feedback">
        <div class="container">
            <div class=" aos " data-aos="fade-up">
                <div class="heder-eight aos " data-aos="fade-up">
                    <div class="section-head-eight">
                        <h2>Our Latest <span>Reviews </span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="student-profile-five profile-six">
                        <div class="student-profile-text">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="quatation-para">
                                <span><img src="{{URL::asset('/assets/img/icon/quatation-white.svg')}}" alt=""></span> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                            </div>
                            <div class="student-profile-viewfive">
                                <div class="student-name">
                                    <div class="student-img">
                                        <span><img src="{{URL::asset('/assets/img/user/user.jpg')}}" alt=""></span>
                                    </div>
                                    <div class="student-name-info">
                                        <h3>
                                            <a href="{{url('reviews')}}">Steve</a>
                                        </h3>
                                        <span> Designer</span>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="student-profile-five profile-six">
                        <div class="student-profile-text">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="quatation-para">
                                <span><img src="{{URL::asset('/assets/img/icon/quatation-white.svg')}}" alt=""></span> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                            </div>
                            <div class="student-profile-viewfive">
                                <div class="student-name">
                                    <div class="student-img">
                                        <span><img src="{{URL::asset('/assets/img/user/user11.jpg')}}" alt=""></span>
                                    </div>
                                    <div class="student-name-info">
                                        <h3>
                                            <a href="{{url('reviews')}}">Designer</a>
                                        </h3>
                                        <span> Developer</span>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="student-profile-five profile-six">
                        <div class="student-profile-text">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="quatation-para">
                                <span><img src="{{URL::asset('/assets/img/icon/quatation-white.svg')}}" alt=""></span> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                            </div>
                            <div class="student-profile-viewfive">
                                <div class="student-name">
                                    <div class="student-img">
                                        <span><img src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt=""></span>
                                    </div>
                                    <div class="student-name-info">
                                        <h3>
                                            <a href="{{url('reviews')}}">Mathan</a>
                                        </h3>
                                        <span> Marketer</span>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Student Feedback -->

    <!-- Faq -->
    <section class="faq-four-sec faq-five-sec">
        <div class="container">
            <div class="faq-sec-five sec-six-faq pt-0">
                <div class="heder-eight aos " data-aos="fade-up">
                    <div class="section-head-eight">
                        <h2>Frequently Asked  <span>Questions</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faq-card">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="faq-tab">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <p class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <span>01</span> Is the regular license the same thing as an editorial license?
                                                        </a>
                                                    </p>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-tab">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <p class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <span>02</span>Is the regular license the same thing as an editorial license?
                                                        </a>
                                                    </p>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-tab">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <p class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <span>03</span>Is the regular license the same thing as an editorial license?
                                                        </a>
                                                    </p>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-tab">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <p class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            <span>04</span>Is the regular license the same thing as an editorial license?
                                                        </a>
                                                    </p>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                </div>
                                            </div>
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
    <!-- /Faq -->

    <!-- Student Place -->
    <section class="student-place">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="student-place-img">
                        <img src="{{URL::asset('/assets/img/student-bg-01.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heder-eight aos " data-aos="fade-up">
                        <div class="section-head-eight student-place-title mb-0">
                            <h2>25K+ Students Are In  <span> One Place </span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Eget aenean accumsan bibendum </p>
                                <div class="student-join-btn">
                                    <a href="{{url('login')}}">Join Now</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="student-place-img">
                        <img src="{{URL::asset('/assets/img/student-bg-02.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Student Place -->

    <!-- Most Trending  Courses -->
    <section class="section trending-courses trending-courses-three popular-course-three popular-course-five">
        <div class="container">
            <div class="heder-eight aos " data-aos="fade-up">
                <div class="section-head-eight">
                    <h2>Latest <span> Blogs</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="course-box course-box-five">
                        <div class="product">
                            <div class="product-img trend-course">
                                <a href="{{url('blog-details')}}">
                                    <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-11.jpg')}}" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="rating rate-star rating-star-five">	
                                    <div class="rating-img d-flex align-items-center me-0">
                                        <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" class="me-2" alt="">
                                        <h5 class="user-name blog-user-name m-0"><a href="{{url('profile')}}">Steve </a></h5>
                                    </div>
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/calendar.svg')}}" class="me-2" alt=""> 09 Jan 2023
                                    </span>
                                </div>
                                <h3 class="title"><a href="{{url('blog-details')}}">How to Make a Perfect CV That Attracts the Attention</a></h3>
                                <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
                                <div class="rating rating-star blog-latest rating-two rating-five align-items-center">	
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/time-icon.svg')}}" alt=""> 20 Min to read
                                    </span>
                                    <span class="card-arrow ms-auto">
                                        <a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" class="me-0" alt=""></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-box course-box-five">
                        <div class="product">
                            <div class="product-img trend-course">
                                <a href="{{url('blog-details')}}">
                                    <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-12.jpg')}}" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="rating rate-star rating-star-five">	
                                    <div class="rating-img d-flex align-items-center me-0">
                                        <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" class="me-2" alt="">
                                        <h5 class="user-name blog-user-name m-0"><a href="{{url('profile')}}">Harvey</a></h5>
                                    </div>
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/calendar.svg')}}" class="me-2" alt=""> 20 Jan 2023
                                    </span>
                                </div>
                                <h3 class="title"><a href="{{url('blog-details')}}">39 Strengths and Weaknesses To Discuss in a Courses</a></h3>
                                <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
                                <div class="rating rating-star blog-latest rating-two rating-five align-items-center">	
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/time-icon.svg')}}" alt=""> 25 Min to read
                                    </span>
                                    <span class="card-arrow ms-auto">
                                        <a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" class="me-0" alt=""></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-box course-box-five">
                        <div class="product">
                            <div class="product-img trend-course">
                                <a href="{{url('blog-details')}}">
                                    <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-13.jpg')}}" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="rating rate-star rating-star-five">	
                                    <div class="rating-img d-flex align-items-center me-0">
                                        <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" class="me-2" alt="">
                                        <h5 class="user-name blog-user-name m-0"><a href="{{url('profile')}}">Casandra</a> </h5>
                                    </div>
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/calendar.svg')}}" class="me-2" alt=""> 15 Jan 2023
                                    </span>
                                </div>
                                <h3 class="title"><a href="{{url('blog-details')}}">Interview Question: Why Dont You Have a Degree?</a></h3>
                                <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
                                <div class="rating rating-star blog-latest rating-two rating-five align-items-center">	
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/time-icon.svg')}}" alt=""> 15 Min to read
                                    </span>
                                    <span class="card-arrow ms-auto">
                                        <a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/icon/white-arrow-up.svg')}}" class="me-0" alt=""></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Most Trending Courses -->

    <section class="want-mentor">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="want-mentor-content">
                        <div class="heder-eight aos " data-aos="fade-up">
                            <div class="section-head-eight">
                                <h2>Want To Become <span>A Mentor?</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                                <a href="{{url('login')}}" class="join-now">Join Now</a>
                            </div>
                            <div class="bg-imgs">
                                <img src="{{URL::asset('/assets/img/bg/index-six-bg-02.png')}}" class="blue-arrow" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="become-mentor-img">
                        <img src="{{URL::asset('/assets/img/become-mentor.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection