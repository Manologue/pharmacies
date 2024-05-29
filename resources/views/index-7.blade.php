@extends('layout.mainlayout')
@section('content')

<!-- Home Banner -->
<section class="section section-search-eight">
    <div class="container">
        <div class="banner-wrapper-eight m-auto text-center">
            <div class="banner-header aos" data-aos="fade-up">
                <h1>Search Teacher in <span>Mentoring</span> Appointment</h1>
                <p>Discover the best Mentors & institutions the city nearest to you.</p>
            </div>
             
            <!-- Search -->
            <div class="search-box-eight aos" data-aos="fade-up">
                <form action="search')}}">
                    <div class="form-search">
                        <div class="form-inner">
                            <div class="form-group search-location-eight">
                                <i class="material-icons">my_location</i>
                                <select class="form-control select">
                                    <option>Location</option>
                                    <option>Japan</option>
                                    <option>France</option>
                                </select>
                            </div>
                            <div class="form-group search-info-eight">
                                <i class="material-icons">location_city</i>
                                <input type="text" class="form-control" placeholder="Search School, Online educational centers, etc">
                            </div>
                            <button type="submit" class="btn search-btn-eight mt-0">Search <i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Search -->
            
        </div>
    </div>
</section>
<!-- /Home Banner -->

<!-- Work Flow -->
<section class="section how-it-works-section">
    <div class="container">
        <div class="section-header-eight text-center aos" data-aos="fade-up">
            <span>Mentoring Flow</span>
            <h2>How does it works ?</h2>
            <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
            <div class="sec-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="row justify-content-center feature-list">
            <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                <div class="feature-grid text-center top-box">					
                    <div class="feature-header-eight">
                        <div class="feature-icon-eight">
                            <span class="circle bg-green"><i class="fas fa-sign-in-alt"></i></span>
                        </div>		
                        <div class="feature-cont">	
                            <div class="feature-text-eight">Sign up</div>
                        </div>
                    </div>
                    <p>Are you looking to join online Learning? Now it's very simple, Now Sign up</p>
                    <span class="text-green">01</span>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
                <div class="feature-grid text-center">					
                    <div class="feature-header-eight">
                        <div class="feature-icon-eight">
                            <span class="circle bg-blue"><i class="material-icons">accessibility</i></span>
                        </div>	
                        <div class="feature-cont">
                            <div class="feature-text-eight">Collaborate</div>
                        </div>
                    </div>
                    <p>Collaborate on your own timing, by scheduling with mentor booking</p>
                    <span class="text-blue">02</span>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
                <div class="feature-grid text-center top-box">					
                    <div class="feature-header-eight">
                        <div class="feature-icon-eight">
                            <span class="circle bg-yellow"><i class="material-icons">event_seat</i></span>
                        </div>	
                        <div class="feature-cont">
                            <div class="feature-text-eight">Improve & Get Back</div>
                        </div>
                    </div>
                    <p>you can gather different skill set, and you can become mentor too</p>
                    <span class="text-yellow">03</span>
                </div>
            </div>						
        </div>
    </div>
</section>
<!-- /Work Flow -->

<!-- Popular Mendors -->
<section class="section popular-mendors">
    <div class="mendor-title">
        <div class="section-header-eight text-center">
            <div class="container aos" data-aos="fade-up">
                <span>Mentoring Goals</span>
                <h2 class="text-white">Popular Mentors</h2>
                <p class="sub-title text-white"> Choose your most popular leaning mentors, it will help you to achieve your professional goals..</p>
                <div class="sec-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="mendor-list">
        <div class="container aos" data-aos="fade-up">
            <div class="mendor-slider slick">
            
                <!-- Mentor Item -->
                <div class="mendor-box">
                    <div class="mendor-img">
                        <a href="{{url('profile')}}">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-01.jpg')}}">
                        </a>
                        <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
                    </div>
                    <div class="mendor-content">
                        <h3 class="title"><a href="{{url('profile')}}">Donna Yancey</a></h3>
                        <div class="mendor-course">
                            Digital Marketer
                        </div>
                        <div class="mendor-price-list">									
                            <div class="mendor-price">$100 <span>/ hr</span></div>
                            <div class="mendor-rating">							
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mentor Item -->
                
                <!-- Mentor Item -->
                <div class="mendor-box">
                    <div class="mendor-img">
                        <a href="{{url('profile')}}">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-05.jpg')}}">
                        </a>
                        <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> U.S.A</div>
                    </div>
                    <div class="mendor-content">
                        <h3 class="title"><a href="{{url('profile')}}">James Amen</a></h3>
                        <div class="mendor-course">
                            UNIX, Calculus, Trigonometry
                        </div>
                        <div class="mendor-price-list">									
                            <div class="mendor-price">$500 <span>/ hr</span></div>
                            <div class="mendor-rating">							
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mentor Item -->
                
                <!-- Mentor Item -->
                <div class="mendor-box">
                    <div class="mendor-img">
                        <a href="{{url('profile')}}">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-06.jpg')}}">
                        </a>
                        <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
                    </div>
                    <div class="mendor-content">
                        <h3 class="title"><a href="{{url('profile')}}">Marvin Downey</a></h3>
                        <div class="mendor-course">
                            ASP.NET,Computer Gaming
                        </div>
                        <div class="mendor-price-list">									
                            <div class="mendor-price">$400 <span>/ hr</span></div>
                            <div class="mendor-rating">							
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mentor Item -->
                
                <!-- Mentor Item -->
                <div class="mendor-box">
                    <div class="mendor-img">
                        <a href="{{url('profile')}}">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-07.jpg')}}">
                        </a>
                        <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> U.S.A</div>
                    </div>
                    <div class="mendor-content">
                        <h3 class="title"><a href="{{url('profile')}}">Betty Hairston</a></h3>
                        <div class="mendor-course">
                            Computer Programming
                        </div>
                        <div class="mendor-price-list">									
                            <div class="mendor-price">$300 <span>/ hr</span></div>
                            <div class="mendor-rating">							
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mentor Item -->
                
                <!-- Mentor Item -->
                <div class="mendor-box">
                    <div class="mendor-img">
                        <a href="{{url('profile')}}">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-06.jpg')}}">
                        </a>
                        <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
                    </div>
                    <div class="mendor-content">
                        <h3 class="title"><a href="{{url('profile')}}">Jose Anderson</a></h3>
                        <div class="mendor-course">
                            Digital Marketer
                        </div>
                        <div class="mendor-price-list">									
                            <div class="mendor-price">$400 <span>/ hr</span></div>
                            <div class="mendor-rating">							
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mentor Item -->
                
            </div>
            <div class="view-all text-center aos aos-init aos-animate" data-aos="fade-up">
                <a href="{{url('profile')}}" class="btn btn-primary btn-view">View All</a>
            </div>
        </div>
    </div>
</section>
<!-- /Popular Mendors -->

<!-- Path section start -->
<section class="section path-section-eight">
    <div class="section-header-eight text-center aos" data-aos="fade-up">
        <div class="container">
            <span>Choose the</span>
            <h2>Different All Learning Paths</h2>
            <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
            <div class="sec-dots">
                 <span></span>
                 <span></span>
                 <span></span>
            </div>
        </div>
    </div>
    <div class="course-sec">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-01.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>Digital Marketer</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>400 Mentors</p>
                                        <p>10 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-02.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>Ui designer</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>300 Mentors</p>
                                        <p>12 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-03.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>IT Security</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>200 Mentors</p>
                                        <p>20 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-04.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>Front-End Developer</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>100 Mentors</p>
                                        <p>11 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-05.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>Web Developer</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>500 Mentors</p>
                                        <p>30 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-06.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>Administrator</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>200 Mentors</p>
                                        <p>10 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-07.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>Project Manager</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>600 Mentors</p>
                                        <p>40 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
                <!-- Course Item -->
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="course-item">
                        <a href="{{url('search')}}" class="course-img">
                            <div class="image-col-merge">
                                <img src="{{URL::asset('/assets/img/course/course-08.jpg')}}" alt="learn">
                                <div class="course-text">
                                    <h5>PHP Developer</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>400 Mentors</p>
                                        <p>10 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Course Item -->
                
            </div>
            <div class="view-all text-center aos" data-aos="fade-up">
                <a href="{{url('search')}}" class="btn btn-primary btn-view">View All</a>
            </div>						
        </div>
    </div>
</section>
<!-- Path section end -->

<!-- Profile Section -->
<section class="section profile-section">
    <div class="section-header-eight text-center aos" data-aos="fade-up">
        <div class="container">
            <span>MOST VIEWED</span>
            <h2>Featured Profile of this week</h2>
            <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
            <div class="sec-dots">
                 <span></span>
                 <span></span>
                 <span></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Profile Item -->
            <div class="col-12 col-xl-3 col-lg-6 aos" data-aos="fade-up">
                <div class="profile-list">
                    <div class="profile-detail">
                        <div class="profile-img-eight">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-01.jpg')}}">
                        </div>
                        <div class="profile-content">
                            <h4>Donna Yancey</h4>
                            <p>UNIX, Trigonometry</p>
                        </div>
                    </div>
                    <div class="profile-rating">
                        <div class="mendor-rating">							
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price-box">$500 <span>/ hr</span></div>
                    </div>
                </div>
            </div>
            <!-- /Profile Item -->
            
            <!-- Profile Item -->
            <div class="col-12 col-xl-3 col-lg-6 aos" data-aos="fade-up">
                <div class="profile-list">
                    <div class="profile-detail">
                        <div class="profile-img-eight">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-04.jpg')}}">
                        </div>
                        <div class="profile-content">
                            <h4>Betty Hairston</h4>
                            <p>Computer Programming</p>
                        </div>
                    </div>
                    <div class="profile-rating">
                        <div class="mendor-rating">							
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price-box">$200 <span>/ hr</span></div>
                    </div>
                </div>
            </div>
            <!-- /Profile Item -->
            
            <!-- Profile Item -->
            <div class="col-12 col-xl-3 col-lg-6 aos" data-aos="fade-up">
                <div class="profile-list">
                    <div class="profile-detail">
                        <div class="profile-img-eight">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-03.jpg')}}">
                        </div>
                        <div class="profile-content">
                            <h4>Jose Anderson</h4>
                            <p>ASP,Computer Gaming</p>
                        </div>
                    </div>
                    <div class="profile-rating">
                        <div class="mendor-rating">							
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price-box">$300 <span>/ hr</span></div>
                    </div>
                </div>
            </div>
            <!-- /Profile Item -->
            
            <!-- Profile Item -->
            <div class="col-12 col-xl-3 col-lg-6 aos" data-aos="fade-up">
                <div class="profile-list">
                    <div class="profile-detail">
                        <div class="profile-img-eight">
                            <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/mendor/mendor-02.jpg')}}">
                        </div>
                        <div class="profile-content">
                            <h4>James Amen</h4>
                            <p>Digital Marketer</p>
                        </div>
                    </div>
                    <div class="profile-rating">
                        <div class="mendor-rating">							
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price-box">$400 <span>/ hr</span></div>
                    </div>
                </div>
            </div>
            <!-- /Profile Item -->
        </div>
    </div>
</section>
<!-- /Profile Section -->

<!-- Student Testimonial -->
<section class="student-testimonial">
    <div class="success-story">
        <div class="container">
            <div class="section-header-eight text-center aos" data-aos="fade-up">
                <span>Testimonials</span>
                <h2>Our Students Success Stories</h2>
                <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
                <div class="sec-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="student-online-testi">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="video-img video-img-big" data-aos="fade-up">
                            <div class="testi-img">
                                <a  href="javascript:void(0);"><img src="{{URL::asset('/assets/img/city/student-testimonial-01.jpg')}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="play-icon">
                                <a href="https://www.youtube.com/watch?v=u-Hob5pjJSA" data-fancybox><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-review" data-aos="fade-up">
                            <span class="quatation-icon">
                                <img src="{{URL::asset('/assets/img/icon/quatation-icon.svg')}}" alt="">
                            </span>
                            <div class="testi-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                            </div>
                            <div class="testi-rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                            <h5><a href="javascript:void(0);">Devon Nick</a></h5>
                            <span>USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="multiple-students">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="video-img" data-aos="fade-up">
                        <div class="testi-img">
                            <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/city/student-testimonial-02.jpg')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="play-icon">
                            <a href="https://www.youtube.com/watch?v=u-Hob5pjJSA" data-fancybox><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="video-img">
                        <div class="testi-img" data-aos="fade-up">
                            <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/city/student-testimonial-03.jpg')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="play-icon">
                            <a href="https://www.youtube.com/watch?v=u-Hob5pjJSA" data-fancybox><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="video-img">
                        <div class="testi-img" data-aos="fade-up">
                            <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/city/student-testimonial-04.jpg')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="play-icon">
                            <a href="https://www.youtube.com/watch?v=u-Hob5pjJSA" data-fancybox><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="video-img" data-aos="fade-up">
                        <div class="testi-img">
                            <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/city/student-testimonial-05.jpg')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="play-icon">
                            <a href="https://www.youtube.com/watch?v=u-Hob5pjJSA" data-fancybox><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Student Testimonial -->

<!-- Statistics Section -->
<section class="section statistics-section-eight">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="statistics-list-eight">
                    <div class="statistics-icon-eight client">
                        <i class="fas fa-street-view"></i>
                    </div>
                    <div class="statistics-content-eight">
                        <span>500+</span>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="statistics-list-eight">
                    <div class="statistics-icon-eight appointment">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="statistics-content-eight">
                        <span>120+</span>
                        <h3>Online Appointments</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="statistics-list-eight">
                    <div class="statistics-icon-eight job">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="statistics-content-eight">
                        <span>100%</span>
                        <h3>Job Satisfaction</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Statistics Section -->

<!-- Blog Section -->
<section class="section section-blogs-eight">
    <div class="container">
    
        <!-- Section Header -->
        <div class="section-header-eight text-center aos" data-aos="fade-up">
            <span>LATEST</span>
            <h2>Blogs & News</h2>
            <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
            <div class="sec-dots">
                 <span></span>
                 <span></span>
                 <span></span>
            </div>
        </div>
        <!-- /Section Header -->
        
        <div class="row blog-grid-row justify-content-center">
            <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">
            
                <!-- Blog Post -->
                <div class="blog-card">
                    <div class="blog-card-image">
                        <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-month">04 <span>Dec</span></div>
                        <ul class="meta-item-eight">
                            <li>
                                <div class="post-author-eight">
                                    <a href="{{url('blog-details')}}"><span>Tyrone Roberts</span></a>
                                </div>
                            </li>										
                        </ul>
                        <h3 class="blog-title-eight"><a href="{{url('blog-details')}}">What is Lorem Ipsum? Lorem Ipsum is simply</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                        <a href="{{url('blog-details')}}" class="read">Read more</a>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
            
            <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">
            
                <!-- Blog Post -->
                <div class="blog-card">
                    <div class="blog-card-image">
                        <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-16.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-month">05 <span>Jan</span></div>
                        <ul class="meta-item-eight">
                            <li>
                                <div class="post-author-eight">
                                    <a href="{{url('blog-details')}}"><span>Brittany Garcia</span></a>
                                </div>
                            </li>										
                        </ul>
                        <h3 class="blog-title-eight"><a href="{{url('blog-details')}}">Contrary to popular belief, Lorem Ipsum is</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                        <a href="{{url('blog-details')}}" class="read">Read more</a>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
            
            <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">
            
                <!-- Blog Post -->
                <div class="blog-card">
                    <div class="blog-card-image">
                        <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-17.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-month">06 <span>May</span></div>
                        <ul class="meta-item-eight">
                            <li>
                                <div class="post-author-eight">
                                    <a href="{{url('blog-details')}}"><span>Allen Davis</span></a>
                                </div>
                            </li>										
                        </ul>
                        <h3 class="blog-title-eight"><a href="{{url('blog-details')}}">The standard chunk of Lorem Ipsum used</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                        <a href="{{url('blog-details')}}" class="read">Read more</a>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
        </div>
        <div class="view-all text-center aos" data-aos="fade-up"> 
            <a href="{{url('blog-list')}}" class="btn btn-primary btn-view">View All</a>
        </div>
    </div>
</section>
<!-- /Blog Section -->

<!-- /Faq -->
<section class="faq-eight-sec">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header-eight text-center aos" data-aos="fade-up">
            <span>MOST VIEWED</span>
            <h2>Frequently Asked Questions</h2>
            <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
            <div class="sec-dots">
                 <span></span>
                 <span></span>
                 <span></span>
            </div>
        </div>
        <!-- /Section Header -->
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-box-eight">
                    <div class="faq-head">
                        <p><span>?</span>Is the regular license the same thing as an editorial license?</p>
                    </div>
                    <div class="faq-body">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                </div>
                <div class="faq-box-eight">
                    <div class="faq-head">
                        <p><span>?</span>Is the regular license the same thing as an editorial license?</p>
                    </div>
                    <div class="faq-body">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                </div>
                <div class="faq-box-eight border-0">
                    <div class="faq-head">
                        <p><span>?</span>Is the regular license the same thing as an editorial license?</p>
                    </div>
                    <div class="faq-body">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-box-eight">
                    <div class="faq-head">
                        <p><span>?</span>Is the regular license the same thing as an editorial license?</p>
                    </div>
                    <div class="faq-body">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                </div>
                <div class="faq-box-eight">
                    <div class="faq-head">
                        <p><span>?</span>Is the regular license the same thing as an editorial license?</p>
                    </div>
                    <div class="faq-body">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                </div>
                <div class="faq-box-eight border-0">
                    <div class="faq-head">
                        <p><span>?</span>Is the regular license the same thing as an editorial license?</p>
                    </div>
                    <div class="faq-body">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                </div>
            </div>
            <div class="view-all text-center aos aos-init aos-animate" data-aos="fade-up"> 
                <a href="javascript:void(0);" class="btn btn-primary btn-view">View All</a>
            </div>
        </div>
    </div>
</section>
<!-- /Faq -->

@endsection