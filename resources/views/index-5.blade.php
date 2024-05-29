@extends('layout.mainlayout')
@section('content')	

	<!-- Home Banner -->
    <section class="home-slide home-slide-five six-slide-search d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="home-slide-face aos" data-aos="fade-up">
                        <div class="home-slide-text ">
                            <h4> <span></span> Categories</h4>
                            <h1>Find the Perfect Mentors Near Your Location</h1>
                            <p>Own your future learning new skills online</p>
                        </div>
                        <div class="banner-five-btns">
                            <a href="{{url('login')}}">Get Started</a>
                            <a href="javascript:void(0);"><span><i class="fas fa-play"></i></span> Demo Class</a>
                        </div>
                        <!-- Search -->
                        <div class="search-box">
                            <form action="search.html">
                                <div class="form-group search-info location-search">
                                    <input type="text" class="form-control text-truncate" placeholder="Search School, Online educational centers, etc">
                                    <a href="{{url('search')}}" class="btn bg-search search-btn align-items-center d-flex justify-content-center"><img src="{{URL::asset('/assets/img/icon/search-white-icon.svg')}}" alt=""></a>
                                </div>
                            </form>
                        </div>
                        <!-- /Search -->
                        <div class="pop-search">
                            <p><span>Popular Search :</span> Designer, Developer, Web, iOS, PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-end">
                    <div class="girl-slide-img aos " data-aos="fade-up">
                        <img src="{{URL::asset('/assets/img/object-6.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="banner-six-counter">
                        <div class="counter-box">
                            <h5><span class="counterUp">256</span>+</h5>
                            <h4>Courses Added</h4>
                        </div>
                        <div class="counter-box">
                            <h5><span class="counterUp">17</span>k+</h5>
                            <h4>Mentors</h4>
                        </div>
                        <div class="counter-box">
                            <h5><span class="counterUp">15</span>k+</h5>
                            <h4>Users Registered</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <section class="banner-feature-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box-six">
                        <span class="icon-book">
                            <img src="{{URL::asset('/assets/img/icon/book-06.svg')}}" alt="">
                        </span>
                        <h3>Learn From Experts</h3>
                        <p>We always provide people a complete solution upon focused of any business</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box-six">
                        <span class="icon-book">
                            <img src="{{URL::asset('/assets/img/icon/book-06.svg')}}" alt="">
                        </span>
                        <h3>450+ Quality Lessons</h3>
                        <p>We always provide people a complete solution upon focused of any business</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box-six">
                        <span class="icon-book">
                            <img src="{{URL::asset('/assets/img/icon/book-06.svg')}}" alt="">
                        </span>
                        <h3>Provide Update Programs</h3>
                        <p>We always provide people a complete solution upon focused of any business</p>
                    </div>
                </div>	
            </div>
        </div>
    </section>
    
    <!-- Most popular Categories -->
    <section class="most-popular most-popular-five">
        <div class="container">
            <div class="section-header section-head-left aos " data-aos="fade-up">
                <div class="section-head-five">
                    <h4><span></span>Categories</h4>
                    <h2>Browse Courses By Categories</h2>
                </div>
                <div class="view-all ">
                    <a href="{{url('search')}}">View All Category</a>
                </div>
            </div>
            <div class="popular-categories aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-01.svg')}}" alt=""></span>
                                    <span class="cat-rat">5.0</span>
                                </div>
                                <div class="categories-text">
                                    <h4>Design & Development</h4>
                                    <h5><span>300+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-02.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.7</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>Digital Marketing</h4>
                                    <h5><span>400+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-03.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.4</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>Marketing & Communication</h4>
                                    <h5><span>500+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-01.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.8</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>IT & Security</h4>
                                    <h5><span>350+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-04.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.2</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>Finance Management</h4>
                                    <h5><span>450+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-01.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.3</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>Business & Consulting</h4>
                                    <h5><span>550+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-05.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.0</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>SEO & Security</h4>
                                    <h5><span>200+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url('search')}}">
                            <div class="sub-categories-five">
                                <div class="categories-five-img">
                                    <span><img src="{{URL::asset('/assets/img/icon/course-cat-01.svg')}}" alt=""></span>
                                    <span class="cat-rat">4.5</span>
                                </div>
                                <div class="categories-text ">
                                    <h4>Self Development</h4>
                                    <h5><span>250+ </span> Courses Available</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Most popular Categories -->
    
    <!-- Most Trending  Courses -->
    <section class="section trending-courses trending-courses-three popular-course-three popular-course-five five-course-card">
        <div class="container">
            <div class="section-header section-head-left aos " data-aos="fade-up">
                <div class="section-head-five">
                    <h4><span></span>Our trending courses</h4>
                    <h2>Featured Courses Of The Day</h2>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Categories</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Design</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">Development</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sales-tab" data-bs-toggle="pill" data-bs-target="#pills-sales" type="button" role="tab" aria-controls="pills-sales" aria-selected="false" tabindex="-1">Marketing</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
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
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$36.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2500)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Computer Science – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="course-btn">
                                                    <span>$23.10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="course-btn">
                                                    <span>$6.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$35.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
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
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$36.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2500)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Computer Science – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="course-btn">
                                                    <span>$23.10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="course-btn">
                                                    <span>$6.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$35.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
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
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$36.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2500)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Computer Science – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="course-btn">
                                                    <span>$23.10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="course-btn">
                                                    <span>$6.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$35.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-sales" role="tabpanel" aria-labelledby="pills-sales-tab">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
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
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$36.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2500)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Computer Science – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                                <div class="course-btn">
                                                    <span>$23.10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Tutorial</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                                <div class="course-btn">
                                                    <span>$6.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box course-box-five">
                                    <div class="product">
                                        <div class="product-img trend-course">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating rate-star rating-star-five">	
                                                <div class="feature-texts">
                                                    <span>Marketing</span>
                                                </div>
                                                <span class="average-rating rate-point ">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    5.0 <b> (2566)</b>
                                                </span>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <div class="lesson-student-five">
                                                <div class="student-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                                </div>
                                                <div class="lesson-five">
                                                    <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                                </div>
                                            </div>
                                            <div class="rating rating-star rating-two rating-five align-items-center">	
                                                <div class="rating-img">
                                                    <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                                </div>
                                                <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                                <div class="course-btn">
                                                    <span>$35.99</span>
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
    <!-- Most Trending Courses -->
    
    <!-- Featured Instructor -->
    <section class="featured-instructor featured-instructor-three featured-instructor-three">
        <div class="container">
            <div class="section-header section-head-left aos d-block" data-aos="fade-up">
                <div class="section-head-five section-head-five-two">
                    <div>
                        <h4><span></span>Meet Our</h4>
                        <h2>Highly Skilled Mentors</h2>
                    </div>
                    <div class="sec-para owl-custom-nav">
                        <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                        <div class="owl-navigation">
                            <div class="owl-nav mynav1 nav-control"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-instructor-head aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="instructor-slider-two owl-carousel ">
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/exclusive-mentor-05.jpg')}}" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h4>
                                        <a href="{{url('profile')}}">Steve kennedy</a>
                                        <i class="fas fa-check-double"></i>
                                    </h4>
                                    <span class="star-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-2" alt="">Norway</li>
                                            <li>17 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/exclusive-mentor-06.jpg')}}" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h4>
                                        <a href="{{url('profile')}}">William Harvey</a>
                                        <i class="fas fa-check-double"></i>
                                    </h4>
                                    <span class="star-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-2" alt="">Canada</li>
                                            <li>15 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/exclusive-mentor-07.jpg')}}" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h4>
                                        <a href="{{url('profile')}}">Leonardo</a>
                                        <i class="fas fa-check-double"></i>
                                    </h4>
                                    <span class="star-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        4.7
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-2" alt="">U.S.A</li>
                                            <li>20 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/exclusive-mentor-08.jpg')}}" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h4>
                                        <a href="{{url('profile')}}">George Franklin</a>
                                        <i class="fas fa-check-double"></i>
                                    </h4>
                                    <span class="star-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        4.8
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-2" alt="">U.S.A</li>
                                            <li>19 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img src="{{URL::asset('/assets/img/mendor/exclusive-mentor-02.jpg')}}" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h4>
                                        <a href="{{url('profile')}}">William Harvey</a>
                                        <i class="fas fa-check-double"></i>
                                    </h4>
                                    <span class="star-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        4.5
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-2" alt="">Norway</li>
                                            <li>18 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Instructor -->
    
    <!-- Student Feedback -->
    <section class="student-feedback">
        <div class="container">
            <div class="bg-icons">
                <img src="{{URL::asset('/assets/img/bg/home-five-bg-05.svg')}}" alt="">
                <img src="{{URL::asset('/assets/img/bg/home-five-bg-06.svg')}}" alt="">
                <img src="{{URL::asset('/assets/img/bg/home-five-bg-07.svg')}}" alt="">
            </div>
            <div class="section-header section-head-left aos " data-aos="fade-up">
                <div class="section-head-five">
                    <h4><span></span>What our Students are saying About us?</h4>
                    <h2>Testimonials & Reviews</h2>
                </div>
            </div>
            <div class="owl-carousel popular-course-slide-two owl-theme owl-loaded owl-drag aos " data-aos="fade-up">
                <div class="student-profile-five">
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
                <div class="student-profile-five">
                    <div class="student-profile-text">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="quatation-para">
                            <span><img src="{{URL::asset('/assets/img/icon/quatation-white.svg')}}" alt=""></span> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                        </div>
                        <div class="student-profile-viewfive">
                            <div class="student-name">
                                <div class="student-img">
                                    <span><img src="{{URL::asset('/assets/img/user/user1.jpg')}}" alt=""></span>
                                </div>
                                <div class="student-name-info">
                                    <h3>
                                        <a href="{{url('reviews')}}">Stella</a>
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
                <div class="student-profile-five">
                    <div class="student-profile-text">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="quatation-para">
                            <span><img src="{{URL::asset('/assets/img/icon/quatation-white.svg')}}" alt=""></span> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                        </div>
                        <div class="student-profile-viewfive">
                            <div class="student-name">
                                <div class="student-img">
                                    <span><img src="{{URL::asset('/assets/img/user/user2.jpg')}}" alt=""></span>
                                </div>
                                <div class="student-name-info">
                                    <h3>
                                        <a href="{{url('profile')}}">Reo Raj</a>
                                    </h3>
                                    <span> Web Developer</span>
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
                <div class="student-profile-five">
                    <div class="student-profile-text">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="quatation-para">
                            <span><img src="{{URL::asset('/assets/img/icon/quatation-white.svg')}}" alt=""></span> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet.</p>
                        </div>
                        <div class="student-profile-viewfive">
                            <div class="student-name">
                                <div class="student-img">
                                    <span><img src="{{URL::asset('/assets/img/user/user3.jpg')}}" alt=""></span>
                                </div>
                                <div class="student-name-info">
                                    <h3>
                                        <a href="{{url('reviews')}}">Mathan</a>
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
        </div>
    </section>
    <!-- /Student Feedback -->

    <!-- Share Your Knowledge -->
    <section class="share-knowledge-three share-knowledge-five">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center ">
                    <div class="knowledge-img-three aos " data-aos="fade-up">
                        <img src="{{URL::asset('/assets/img/choose-mentor-02.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="join-us-all aos " data-aos="fade-up">
                        <div class="section-header section-head-left aos " data-aos="fade-up">
                            <div class="section-head-five">
                                <h4><span></span>About Us</h4>
                                <h2>The experts in local and international mentors in all industries</h2>
                                <p>Agent hen an unknown printer took a galley of type and scramble  it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                            </div>
                        </div>
                        <div class="join-two-face">
                            <ul>
                                <li><img src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">Outstanding Mentos</li>
                                <li><img src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">More than 200+ Locations</li>
                                <li><img src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">Specialised Courses</li>
                                <li><img src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">Market-leading research</li>
                            </ul>
                            <div class="explore-more ">
                                <a href="javascript:void(0);" class="btn bg-explore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Share Your Knowledge -->

    <!-- Most Trending  Courses -->
    <section class="section trending-courses trending-courses-three popular-course-three popular-course-five trending-five five-course-card">
        <div class="bg-icons-two">
            <img src="{{URL::asset('/assets/img/bg/home-five-bg-05.svg')}}" alt="">
            <img src="{{URL::asset('/assets/img/bg/home-five-bg-05.svg')}}" alt="">
            <img src="{{URL::asset('/assets/img/bg/home-five-bg-07.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="section-header section-head-left aos " data-aos="fade-up">
                <div class="section-head-five">
                    <h4><span></span>Our trending courses</h4>
                    <h2>Our Popular Courses</h2>
                </div>
                <div class="view-all ">
                    <a href="javascript:void(0);">View All Category</a>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="trend-course-tab-slider owl-carousel">
                        <div class="course-box course-box-five">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-08.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star rating-star-five">	
                                        <div class="feature-texts">
                                            <span>Marketing</span>
                                        </div>
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            5.0 <b> (2566)</b>
                                        </span>
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
                                    <div class="rating rating-star rating-two rating-five align-items-center">	
                                        <div class="rating-img">
                                            <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                        <div class="course-btn">
                                            <span>$36.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box course-box-five">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-06.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star rating-star-five">	
                                        <div class="feature-texts">
                                            <span>Marketing</span>
                                        </div>
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            5.0 <b> (2566)</b>
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Computer Science – Interactive Tutorial</a></h3>
                                    <div class="lesson-student-five">
                                        <div class="student-five">
                                            <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">600 Students</span>
                                        </div>
                                        <div class="lesson-five">
                                            <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
                                        </div>
                                    </div>
                                    <div class="rating rating-star rating-two rating-five align-items-center">	
                                        <div class="rating-img">
                                            <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">James</a></h5>
                                        <div class="course-btn">
                                            <span>$23.10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box course-box-five">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-07.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star rating-star-five">	
                                        <div class="feature-texts">
                                            <span>Marketing</span>
                                        </div>
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            4.8 <b> (2400)</b>
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Tutorial</a></h3>
                                    <div class="lesson-student-five">
                                        <div class="student-five">
                                            <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
                                        </div>
                                        <div class="lesson-five">
                                            <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">65 Lessons</span>
                                        </div>
                                    </div>
                                    <div class="rating rating-star rating-two rating-five align-items-center">	
                                        <div class="rating-img">
                                            <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Remora Jaine </a></h5>
                                        <div class="course-btn">
                                            <span>$6.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box course-box-five">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-05.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star rating-star-five">	
                                        <div class="feature-texts">
                                            <span>Marketing</span>
                                        </div>
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            4.5 <b> (2500)</b>
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                    <div class="lesson-student-five">
                                        <div class="student-five">
                                            <span><img src="{{URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
                                        </div>
                                        <div class="lesson-five">
                                            <span><img src="{{URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
                                        </div>
                                    </div>
                                    <div class="rating rating-star rating-two rating-five align-items-center">	
                                        <div class="rating-img">
                                            <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Remora Jaine</a></h5>
                                        <div class="course-btn">
                                            <span>$35.99</span>
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
    
    <!-- New Course subscribe -->
    <section class="new-course subscribe-course">
        <div class="container">
            <div class="section-header section-head-left aos " data-aos="fade-up">
                <div class="section-head-five">
                    <h4><span></span>Join With Us</h4>
                    <h2>Join Our Courses & Get More Benefits</h2>
                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                </div>
            </div>
            <div class="new-course-five">
                <div class="row">
                    <div class="col-lg-6 col-md-12 d-flex align-items-center">
                        <div class="join-instructor">
                            <div class="ins-img">
                                <img src="{{URL::asset('/assets/img/mendor/join-ins-01.jpg')}}" alt="">
                            </div>
                            <div class="ins-content">
                                <h3><a href="{{url('search')}}">As An Instructor?</a></h3>
                                <p>Agent hen an unknown printer took a galley of type and scramble  it to make a type specimen book.</p>
                                <div class="join-btn">
                                    <a href="{{url('search')}}">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex align-items-center">
                        <div class="join-instructor">
                            <div class="ins-img">
                                <img src="{{URL::asset('/assets/img/mendor/join-ins-02.jpg')}}" alt="">
                            </div>
                            <div class="ins-content">
                                <h3><a href="{{url('search')}}">As An Student?</a></h3>
                                <p>Agent hen an unknown printer took a galley of type and scramble  it to make a type specimen book.</p>
                                <div class="join-btn">
                                    <a href="{{url('search')}}">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Course -->

    <!-- Faq -->
    <section class="faq-four-sec faq-five-sec">
        <div class="container">
            <div class="faq-sec-five">
                <div class="section-header section-head-left aos " data-aos="fade-up">
                    <div class="section-head-five">
                        <h4><span></span>Have many questions?</h4>
                        <h2>Frequently asked questions</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <ul class="nav nav-pills pills-five" id="pills-tab-two" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-general-tab" data-bs-toggle="pill" data-bs-target="#pills-general" type="button" role="tab" aria-controls="pills-general" aria-selected="true">General</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-mentor-tab" data-bs-toggle="pill" data-bs-target="#pills-mentor" type="button" role="tab" aria-controls="pills-mentor" aria-selected="false" tabindex="-1">Mentor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-mentee-tab" data-bs-toggle="pill" data-bs-target="#pills-mentee" type="button" role="tab" aria-controls="pills-mentee" aria-selected="false">Mentees</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-booking-tab" data-bs-toggle="pill" data-bs-target="#pills-booking" type="button" role="tab" aria-controls="pills-booking" aria-selected="false" tabindex="-1">Booking</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-download-tab" data-bs-toggle="pill" data-bs-target="#pills-download" type="button" role="tab" aria-controls="pills-download" aria-selected="false" tabindex="-1">Download</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10">
                        <div class="tab-content" id="pills-tabContent-two">
                            <div class="tab-pane fade active show" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="faq-card">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    Is the regular license the same thing as an editorial license?
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
                                                                    Is the regular license the same thing as an editorial license?
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
                                                                    Is the regular license the same thing as an editorial license?
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
                                                                    Is the regular license the same thing as an editorial license?
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
                            <div class="tab-pane fade" id="pills-mentor" role="tabpanel" aria-labelledby="pills-mentor-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="faq-card">
                                            <div class="panel-group" id="accordion-two" role="tablist" aria-multiselectable="true">
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne-two">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-two" href="#collapseOne-two" aria-expanded="false" aria-controls="collapseOne-two">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseOne-two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-two" data-bs-parent="#accordion-two">
                                                            <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo-two">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-two" href="#collapseTwo-two" aria-expanded="false" aria-controls="collapseTwo-two">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseTwo-two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-two" data-bs-parent="#accordion-two">
                                                            <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree-two">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-two" href="#collapseThree-two" aria-expanded="false" aria-controls="collapseThree-two">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseThree-two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-two" data-bs-parent="#accordion-two">
                                                            <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour-two">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-two" href="#collapseFour-two" aria-expanded="false" aria-controls="collapseFour-two">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseFour-two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-two" data-bs-parent="#accordion-two">
                                                            <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-mentee" role="tabpanel" aria-labelledby="pills-mentee-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="faq-card">
                                            <div class="panel-group" id="accordion-three" role="tablist" aria-multiselectable="true">
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne-three">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-three" href="#collapseOne-three" aria-expanded="false" aria-controls="collapseOne-three">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseOne-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-three" data-bs-parent="#accordion-three">
                                                            <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo-three">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-three" href="#collapseTwo-three" aria-expanded="false" aria-controls="collapseTwo-three">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseTwo-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-three" data-bs-parent="#accordion-three">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree-three">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-three" href="#collapseThree-three" aria-expanded="false" aria-controls="collapseThree-three">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseThree-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-three" data-bs-parent="#accordion-three">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour-three">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-three" href="#collapseFour-three" aria-expanded="false" aria-controls="collapseFour-three">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseFour-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-three" data-bs-parent="#accordion-three">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-booking" role="tabpanel" aria-labelledby="pills-booking-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="faq-card">
                                            <div class="panel-group" id="accordion-four" role="tablist" aria-multiselectable="true">
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne-four">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-four" href="#collapseOne-four" aria-expanded="false" aria-controls="collapseOne-four">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseOne-four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-four" data-bs-parent="#accordion-four">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo-four">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-four" href="#collapseTwo-four" aria-expanded="false" aria-controls="collapseTwo-four">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseTwo-four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-four" data-bs-parent="#accordion-four">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree-four">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-four" href="#collapseThree-four" aria-expanded="false" aria-controls="collapseThree-four">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseThree-four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-four" data-bs-parent="#accordion-four">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour-four">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-four" href="#collapseFour-four" aria-expanded="false" aria-controls="collapseFour-four">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseFour-four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-four" data-bs-parent="#accordion-four">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-download" role="tabpanel" aria-labelledby="pills-download-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="faq-card">
                                            <div class="panel-group" id="accordion-five" role="tablist" aria-multiselectable="true">
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne-five">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-five" href="#collapseOne-five" aria-expanded="false" aria-controls="collapseOne-five">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseOne-five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-five" data-bs-parent="#accordion-five">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo-five">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-five" href="#collapseTwo-five" aria-expanded="false" aria-controls="collapseTwo-five">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseTwo-five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-five" data-bs-parent="#accordion-five">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree-five">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-five" href="#collapseThree-five" aria-expanded="false" aria-controls="collapseThree-five">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseThree-five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-five" data-bs-parent="#accordion-five">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="faq-tab">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour-five">
                                                            <p class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion-five" href="#collapseFour-five" aria-expanded="false" aria-controls="collapseFour-five">
                                                                    Is the regular license the same thing as an editorial license?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="collapseFour-five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-five" data-bs-parent="#accordion-five">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
            
                
            </div>					
        </div>
    </section>
    <!-- /Faq -->

    <!-- Blogs -->
    <section class="section trending-courses trending-courses-three popular-course-three popular-course-five five-course-card blog-five">
        <div class="container">
            <div class="section-header section-head-left aos " data-aos="fade-up">
                <div class="section-head-five">
                    <h4><span></span>Get the latest News</h4>
                    <h2>News And Blog</h2>
                    <p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                </div>
                <div class="view-all ">
                    <a href="{{url('blog-list')}}">View All Blogs</a>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="course-box course-box-five">
                        <div class="product">
                            <div class="product-img trend-course">
                                <a href="{{url('blog-details')}}">
                                    <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-11.jpg')}}" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="rating rate-star rating-star-five">	
                                    <div class="feature-texts">
                                        <span>Marketing</span>
                                    </div>
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/time-icon.svg')}}" alt=""> 15 Min to read
                                    </span>
                                </div>
                                <h3 class="title"><a href="{{url('blog-details')}}">39 Strengths and Weaknesses To Discuss in a Courses</a></h3>
                                <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
                                <div class="rating rating-star rating-two rating-five align-items-center">	
                                    <div class="rating-img">
                                        <img src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                    </div>
                                    <h5 class="user-name"><a href="{{url('profile')}}">Casandra</a> <span> 09 Jan 2023</span></h5>
                                    <div class="course-btn">
                                        <a href="{{url('blog-details')}}">Read-more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-box course-box-five">
                        <div class="product">
                            <div class="product-img trend-course">
                                <a href="{{url('blog-details')}}">
                                    <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-12.jpg')}}" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="rating rate-star rating-star-five">	
                                    <div class="feature-texts">
                                        <span>Marketing</span>
                                    </div>
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/time-icon.svg')}}" alt=""> 20 Min to read
                                    </span>
                                </div>
                                <h3 class="title"><a href="{{url('blog-details')}}">How to Make a Perfect CV That Attracts the Attention</a></h3>
                                <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
                                <div class="rating rating-star rating-two rating-five align-items-center">	
                                    <div class="rating-img">
                                        <img src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                    </div>
                                    <h5 class="user-name"><a href="{{url('profile')}}">Steve</a> <span> 08 Jan 2023</span></h5>
                                    <div class="course-btn">
                                        <a href="{{url('blog-details')}}">Read-more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-box course-box-five">
                        <div class="product">
                            <div class="product-img trend-course">
                                <a href="{{url('blog-details')}}">
                                    <img class="img-fluid" alt="" src="{{URL::asset('/assets/img/course/trending-course-13.jpg')}}" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="rating rate-star rating-star-five">	
                                    <div class="feature-texts">
                                        <span>Marketing</span>
                                    </div>
                                    <span class="average-rating rate-point ">
                                        <img src="{{URL::asset('/assets/img/icon/time-icon.svg')}}" alt=""> 25 Min to read
                                    </span>
                                </div>
                                <h3 class="title"><a href="{{url('blog-details')}}">Interview Question: Why Dont You Have a Degree?</a></h3>
                                <p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
                                <div class="rating rating-star rating-two rating-five align-items-center">	
                                    <div class="rating-img">
                                        <img src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                    </div>
                                    <h5 class="user-name"><a href="{{url('profile')}}">Harvey</a> <span> 07 Jan 2023</span></h5>
                                    <div class="course-btn">
                                        <a href="{{url('blog-details')}}">Read-more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs -->
@endsection