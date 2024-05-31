@extends('layout.mainlayout')
@section('content')	
	<!-- Home Banner -->
    <section class=" home-slide home-slide-three d-flex align-items-center home-four">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="section-banner-three aos " data-aos="fade-up">
                        <div class="hometwo-slide-text ">
                            <h1>Find the Perfect Mentors Near Your Location</h1>
                            <p>Own your future learning new skills online</p>
                        </div>
                        <!-- Search -->
                        <div class="search-box">
                            <form action="search.html">
                                <div class="form-group search-info location-search location-search-four">
                                    <input type="text" class="form-control text-truncate key" placeholder=" Keyword / Course Name">
                                    <input type="text" class="form-control text-truncate city" placeholder=" City or Postalcode">
                                    <a href="{{url('search')}}" class="btn bg-search search-btn align-items-center d-flex justify-content-center">Find Mentors</a>
                                </div>
                            </form>
                        </div>
                        <!-- /Search -->
                        <div class="poular-search">
                            <p><span>Popular Search :</span> Designer, Developer, Web, iOS, PHP</p>
                        </div>
                        <div class="banner-counter">
                            <ul>
                                <li>
                                    <h5><span class="counterUp">256</span>+</h5>
                                    Courses Added
                                </li>
                                <li>
                                    <h5><span class="counterUp">17</span>K</h5>
                                    Mentors
                                </li>
                                <li>
                                    <h5><span class="counterUp">15</span>K</h5>
                                    Users Registered
                                </li>
                                <li>
                                    <h5><span class="counterUp">60</span>K</h5>
                                    Reviews From Users
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="object-slide-img aos " data-aos="fade-up">
                        <img  src="{{URL::asset('/assets/img/object-4.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Course Categories -->
    <section class="most-popular course-categories-three pb-0">
        <div class="container">
            <div class="section-header h-three aos " data-aos="fade-up">
                <h2>Course Categories</h2>
                <div class="heading-bar">
                    <span></span>
                    <span></span>
                </div>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
            </div>
            <div class="popular-categories aos pt-3" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="popular-cat-slider owl-carousel">
                            <a href="javascript:void(0);">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img  src="{{URL::asset('/assets/img/course/course-cat-01.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="categories-text">
                                        <div class="cat-bottom-content">
                                            <p class="course-count">100 Mentors</p>
                                            <h4>Design Courses</h4>
                                        </div>
                                        <div class="next-arrow">
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img  src="{{URL::asset('/assets/img/course/course-cat-02.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="categories-text">
                                        <div class="cat-bottom-content">
                                            <p class="course-count">89 Mentors</p>
                                            <h4>Development</h4>
                                        </div>
                                        <div class="next-arrow">
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img  src="{{URL::asset('/assets/img/course/course-cat-03.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="categories-text">
                                        <div class="cat-bottom-content">
                                            <p class="course-count">64 Mentors</p>
                                            <h4>Marketing Strategy</h4>
                                        </div>
                                        <div class="next-arrow">
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img  src="{{URL::asset('/assets/img/course/course-cat-04.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="categories-text">
                                        <div class="cat-bottom-content">
                                            <p class="course-count">55 Mentors</p>
                                            <h4>Python Development</h4>
                                        </div>
                                        <div class="next-arrow">
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img  src="{{URL::asset('/assets/img/course/course-cat-02.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="categories-text">
                                        <div class="cat-bottom-content">
                                            <p class="course-count">89 Mentors</p>
                                            <h4>Development</h4>
                                        </div>
                                        <div class="next-arrow">
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img  src="{{URL::asset('/assets/img/course/course-cat-03.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="categories-text">
                                        <div class="cat-bottom-content">
                                            <p class="course-count">64 Mentors</p>
                                            <h4>Marketing Strategy</h4>
                                        </div>
                                        <div class="next-arrow">
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>							
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Course Categories -->

    <!-- Most popular course -->
    <section class="section trending-courses trending-courses-three">
        <div class="container">
            <div class="h-three tab-panel">
                <div class="section-header h-three aos " data-aos="fade-up">
                    <h2>Our Trending Courses</h2>
                    <div class="heading-bar">
                        <span></span>
                        <span></span>
                    </div>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Web development</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">SEO</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sales-tab" data-bs-toggle="pill" data-bs-target="#pills-sales" type="button" role="tab" aria-controls="pills-sales" aria-selected="false" tabindex="-1">Sales</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">marketing</span>
                                                </div>													
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>800</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>5.0</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>20</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user10.jpg')}}" alt="">
                                                </div>
                                                <h5>James Collins</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-02.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$500</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">Digital Marketer</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>700</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.5</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>25</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user11.jpg')}}" alt="">
                                                </div>
                                                <h5>Allen Davis</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$400</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>850</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.7</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>15</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>600</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.6</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>18</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">marketing</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>800</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>5.0</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>20</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user10.jpg')}}" alt="">
                                                </div>
                                                <h5>James Collins</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-02.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">Digital Marketer</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>650</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.6</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>18</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user11.jpg')}}" alt="">
                                                </div>
                                                <h5>Allen Davis</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>750</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.9</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>25</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>740</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.4</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>22</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">marketing</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>800</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>5.0</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>20</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user10.jpg')}}" alt="">
                                                </div>
                                                <h5>James Collins</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-02.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">Digital Marketer</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>700</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.8</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>25</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user11.jpg')}}" alt="">
                                                </div>
                                                <h5>Allen Davis</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>850</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.6</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>16</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>780</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.8</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>18</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trend-course-tab-slider owl-carousel">
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">marketing</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>800</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>5.0</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>20</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user10.jpg')}}" alt="">
                                                </div>
                                                <h5>James Collins</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-02.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">Digital Marketer</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>700</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>5.0</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>10</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user11.jpg')}}" alt="">
                                                </div>
                                                <h5>Allen Davis</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>600</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.4</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>25</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="javascript:void(0);">
                                                <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
                                            </a>
                                            <span class="text-bottom">$600</span>
                                        </div>
                                        <div class="feature-texts bgs-blue">
                                            <span>Featured</span>
                                            <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info ">
                                                <div class="rating rating-star">	
                                                    <span class="average-rating rate-point ">IT Security</span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                            <p>Do you want to move on next step? Choose your most popular </p>
                                            <ul>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/user-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Students<span>850</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Ratings<span>4.5</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><img  src="{{URL::asset('/assets/img/icon/star-icon.svg')}}" alt=""></span>
                                                    <div class="list-item">
                                                        <h5>Lessons<span>15</span></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="rating rating-star rating-two align-items-center">	
                                                <div class="rating-img">
                                                    <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                                                </div>
                                                <h5>Tyrone Roberts</h5>
                                                <div class="course-btn">
                                                    <a href="javascript:void(0);">View Details</a>
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
    <!-- /Most popular course -->

    <!-- Share Your Knowledge -->
    <section class="share-knowledge-three p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center ">
                    <div class="knowledge-img-three aos " data-aos="fade-up">
                        <img  src="{{URL::asset('/assets/img/choose-mentor.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center justify-content-center">
                    <div class="join-us-all aos " data-aos="fade-up">
                        <div class="join-us-heading">
                            <span>WHY CHOOSE MENTORING</span>
                            <h2>Experts in local & international Mentors From Industries</h2>
                            <p>Agent hen an unknown printer took a galley of type and scramble  it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                        <div class="join-two-face">
                            <ul>
                                <li><img  src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">Outstanding Mentos</li>
                                <li><img  src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">More than 200+ Locations</li>
                                <li><img  src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">Specialised Courses</li>
                                <li><img  src="{{URL::asset('/assets/img/icon/tick-icon.svg')}}" alt="">Market-leading research</li>
                            </ul>
                            <div class="explore-more ">
                                <a href="{{url('search')}}" class="btn bg-explore">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Share Your Knowledge -->

    <!-- Most Trending  Courses -->
    <section class="section trending-courses trending-courses-three popular-course-three">
        <div class="container">
            <div class="popular-three-head">
                <div class="section-header h-three aos " data-aos="fade-up">
                    <h2>Our Popular Courses</h2>
                    <div class="heading-bar">
                        <span></span>
                        <span></span>
                    </div>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                </div>
                <div class="view-all">
                    <a href="javascript:void(0);">View All Courses<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="trend-course-tab-slider owl-carousel">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Featured</span>
                                    <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star mb-3">	
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            5.0
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="rating rating-star rating-two align-items-center">	
                                        <div class="rating-img">
                                            <img  src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                        <div class="course-btn">
                                            <span>$600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Maths</span>
                                    <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star mb-3">	
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            4.7
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="rating rating-star rating-two align-items-center">	
                                        <div class="rating-img">
                                            <img  src="{{URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Allen Davis</a></h5>
                                        <div class="course-btn">
                                            <span>$500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Research</span>
                                    <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star mb-3">	
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            4.6
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="rating rating-star rating-two align-items-center">	
                                        <div class="rating-img">
                                            <img  src="{{URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
                                        <div class="course-btn">
                                            <span>$700</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Featured</span>
                                    <span><img  src="{{URL::asset('/assets/img/icon/feature-badge.svg')}}" alt=""></span>
                                </div>
                                <div class="product-content">
                                    <div class="rating rate-star mb-3">	
                                        <span class="average-rating rate-point ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            4.5
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="rating rating-star rating-two align-items-center">	
                                        <div class="rating-img">
                                            <img  src="{{URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
                                        </div>
                                        <h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
                                        <div class="course-btn">
                                            <span>$650</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trusted-by">
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
                                        <img  src="{{URL::asset('/assets/img/icon/trust-icon-01.svg')}}" alt="">
                                    </div>
                                    <span>Angular Js</span>
                                </li>
                                <li>
                                    <div class="trust-icon">
                                        <img  src="{{URL::asset('/assets/img/icon/trust-icon-02.svg')}}" alt="">
                                    </div>
                                    <span>App Store</span>
                                </li>
                                <li>
                                    <div class="trust-icon">
                                        <img  src="{{URL::asset('/assets/img/icon/trust-icon-03.svg')}}" alt="">
                                    </div>
                                    <span>Podcast</span>
                                </li>
                                <li>
                                    <div class="trust-icon">
                                        <img  src="{{URL::asset('/assets/img/icon/trust-icon-04.svg')}}" alt="">
                                    </div>
                                    <span>Promit</span>
                                </li>
                                <li>
                                    <div class="trust-icon">
                                        <img  src="{{URL::asset('/assets/img/icon/trust-icon-05.svg')}}" alt="">
                                    </div>
                                    <span>Dribble</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>	
        </div>
    </section>
    <!-- Most Trending Courses -->

    <!-- Say testimonial Two -->
    <section class="testimonial-two student-say-about testimonial-section">
        <div class="container">
            <div class="section-header h-three aos " data-aos="fade-up">
                <h2>Testimonials & Reviews</h2>
                <div class="heading-bar">
                    <span></span>
                    <span></span>
                </div>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 aos" data-aos="fade-up" data-bs-interval="5000">
                    <div class="customer-review">
                        <div class="review-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                            <div class="customer">
                                <img  src="{{URL::asset('/assets/img/user/user30.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="cus-name">
                            <a href="javascript:void(0);">Madison</a>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos" data-aos="fade-up" data-bs-interval="5000">
                    <div class="customer-review">
                        <div class="review-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                            <div class="customer">
                                <img  src="{{URL::asset('/assets/img/user/user12.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="cus-name">
                            <a href="javascript:void(0);">Alexander</a>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos" data-aos="fade-up" data-bs-interval="5000">
                    <div class="customer-review">
                        <div class="review-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                            <div class="customer">
                                <img  src="{{URL::asset('/assets/img/user/user13.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="cus-name">
                            <a href="javascript:void(0);">Barrett Valentine</a>
                            <span>Marketer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Say testimonial Two -->

    <!-- Featured Instructor -->
    <section class="featured-instructor featured-instructor-three">
        <div class="container">
            <div class="popular-three-head">
                <div class="section-header h-three aos " data-aos="fade-up">
                    <h2>Our Exclusive Mentors</h2>
                    <div class="heading-bar">
                        <span></span>
                        <span></span>
                    </div>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
                </div>
                <div class="view-all">
                    <a href="{{url('search')}}">View All Mentors<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="featured-instructor-head aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="instructor-slider owl-carousel ">
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/mendor/exclusive-mentor-01.jpg')}}" alt=""></a>
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
                                            <li><img  src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-1" alt="">Norway</li>
                                            <li>17 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/mendor/exclusive-mentor-02.jpg')}}" alt=""></a>
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
                                            <li><img  src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-1" alt="">U.S.A</li>
                                            <li>16 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/mendor/exclusive-mentor-03.jpg')}}" alt=""></a>
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
                                        4.8
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img  src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-1" alt="">canada</li>
                                            <li>20 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/mendor/exclusive-mentor-04.jpg')}}" alt=""></a>
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
                                        4.9
                                    </span>
                                    <div class="view-student-three">
                                        <ul class="view-student-three-list justify-content-between">
                                            <li><img  src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-1" alt="">Norway</li>
                                            <li>22 Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-team">
                                <div class="student-img">
                                    <a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/mendor/exclusive-mentor-02.jpg')}}" alt=""></a>
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
                                            <li><img  src="{{URL::asset('/assets/img/icon/location-02.svg')}}" class="me-1" alt="">U.S.A</li>
                                            <li>23Courses</li>
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

    <!-- Faq -->
    <section class="faq-four-sec">
        <div class="container">
            <div class="section-header h-three aos " data-aos="fade-up">
                <h2>Have Many Questions?</h2>
                <div class="heading-bar">
                    <span></span>
                    <span></span>
                </div>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum </p>
            </div>
            <div class="faq-tab-list">
                <ul class="nav nav-pills mb-3" id="pills-tab-two" role="tablist">
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
    </section>
    <!-- /Faq -->

    <!-- Our Blog -->
    <section class="section our-blog trending-courses-three popular-course-three blog-four">
        <div class="container">
            <div class="section-header h-three aos " data-aos="fade-up">
                <h2>From Our Blog</h2>
                <div class="heading-bar">
                    <span></span>
                    <span></span>
                </div>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="trend-course-tab-slider owl-carousel">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/blog/blog-18.jpg')}}">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Marketing</span>
                                </div>
                                <div class="product-content">
                                    <ul class="date">	
                                        <li>
                                            <span><i class="fe fe-user"></i></span>
                                            Robert Forex
                                        </li>
                                        <li>
                                            <span><i class="fas fa-calendar-alt"></i></span>
                                            21 Jan, 2023
                                        </li>
                                    </ul>
                                    <h3 class="title"><a href="{{url('blog-details')}}">Learn Python – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="reads-more">
                                        <a href="{{url('blog-details')}}">Read More <i class="fe fe-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/blog/blog-19.jpg')}}">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Designer</span>
                                </div>
                                <div class="product-content">
                                    <ul class="date">	
                                        <li>
                                            <span><i class="fe fe-user"></i></span>
                                            Leonardo
                                        </li>
                                        <li>
                                            <span><i class="fas fa-calendar-alt"></i></span>
                                            25 Jan, 2023
                                        </li>
                                    </ul>
                                    <h3 class="title"><a href="{{url('blog-details')}}">Learn Python – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="reads-more">
                                        <a href="{{url('blog-details')}}">Read More <i class="fe fe-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/blog/blog-20.jpg')}}">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Developer</span>
                                </div>
                                <div class="product-content">
                                    <ul class="date">	
                                        <li>
                                            <span><i class="fe fe-user"></i></span>
                                            Madison
                                        </li>
                                        <li>
                                            <span><i class="fas fa-calendar-alt"></i></span>
                                            19 Jan, 2023
                                        </li>
                                    </ul>
                                    <h3 class="title"><a href="{{url('blog-details')}}">Learn Python – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="reads-more">
                                        <a href="{{url('blog-details')}}">Read More <i class="fe fe-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img trend-course">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" alt=""  src="{{URL::asset('/assets/img/blog/blog-18.jpg')}}">
                                    </a>
                                </div>
                                <div class="feature-texts">
                                    <span>Designer</span>
                                </div>
                                <div class="product-content">
                                    <ul class="date">	
                                        <li>
                                            <span><i class="fe fe-user"></i></span>
                                            Alexander
                                        </li>
                                        <li>
                                            <span><i class="fas fa-calendar-alt"></i></span>
                                            20 Jan, 2023
                                        </li>
                                    </ul>
                                    <h3 class="title"><a href="{{url('blog-details')}}">Learn Python – Interactive Free Tutorials</a></h3>
                                    <p>Do you want to move on next step? Choose your most popular </p>
                                    <div class="reads-more">
                                        <a href="{{url('blog-details')}}">Read More <i class="fe fe-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Our Blog -->
    
    <!-- New Course join -->
    <section class="new-course new-course-three">
        <div class="container">
            <div class="become-mentor">
                <div class="row">
                    <div class="col-md-12">
                        <div class="every-new-course aos " data-aos="fade-up">
                            <div class="section-header">
                                <h2>Become a Popular Mentor </h2>
                                <p>We only work with the best Courses around the globe.</p>
                            </div>
                            <div class="mentor-btns">
                                <div class="log-btn">
                                    <a href="{{url('login')}}">Start Login<img  src="{{URL::asset('/assets/img/icon/login-circle.svg')}}" alt="" class="ms-2"></a>
                                </div>
                                <div class="register-btn">
                                    <a href="{{url('register')}}">Register Now<i class="fas fa-user ms-2"></i></a>											
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Course -->


@endsection