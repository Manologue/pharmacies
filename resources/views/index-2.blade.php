@extends('layout.mainlayout')
@section('content')	
		
			<!-- Home Banner -->
			<section class="home-slide d-flex align-items-center">
				<div class="banner-two-bg-img">
					<img src="{{ URL::asset('/assets/img/bg/banner-two-bg-01.png')}}" class="img-fluid banner-two-bg" alt="">
					<img src="{{ URL::asset('/assets/img/bg/banner-two-bg-02.png')}}" class="img-fluid banner-two-bgtwo" alt="">
					<img src="{{ URL::asset('/assets/img/bg/banner-two-bg-03.png')}}" class="img-fluid banner-two-bgthree" alt="">
				</div>
				<div class="container">
					<div class="row ">
						<div class="col-lg-7 d-flex align-items-center">
							<div class="home-slide-face aos" data-aos="fade-up">
								<div class="home-slide-text ">
									<h1>Find the Perfect Mentors Near Your Location</h1>
									<p>Own your future learning new skills online</p>
								</div>
								<!-- Search -->
								<div class="search-box search-index-two">
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
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
			
			<!-- Most popular Categories -->
			<section class="most-popular">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-05.png')}}" class="img-fluid course-bg" alt="">
					</div>
					<div class="section-header section-head-one text-center aos " data-aos="fade-up">
						<h2>Browse Courses By Categories</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" class="img-fluid" alt="">
						</div>
						<p class="sub-title">144 Courses live - 20 added today.</p>
					</div>
					<div class="popular-categories popular-cat-one aos" data-aos="fade-up">
						<div class="row justify-content-center">
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-01.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Design</h4>
											<p>Over <span>550</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-02.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Photography</h4>
											<p>Over <span>750</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-03.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Finance</h4>
											<p>Over <span>700</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-04.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Research</h4>
											<p>Over <span>600</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-05.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Digital Service</h4>
											<p>Over <span>500</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-06.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>IT Security</h4>
											<p>Over <span>200</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-07.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Marketing</h4>
											<p>Over <span>230</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<a href="{{url('search')}}" data-aos="fade-up">
									<div class="sub-categories d-flex align-items-center">
										<div class="categories-img">
											<img src="{{ URL::asset('/assets/img/categories/rec-01.jpg')}}" alt="">
										</div>
										<div class="categories-text ">
											<h4>Maths & Logic</h4>
											<p>Over <span>460</span> Courses</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="explore-more text-center">
							<a href="{{url('search')}}" class="all-browse">Browse All Categories <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</section>
			<!-- /Most popular Categories -->
			
			<!-- Most trending course -->
			<section class="section trending-courses">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-04.png')}}" class="img-fluid trend-course-bgone" alt="">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-06.png')}}" class="img-fluid trend-course-bgtwo" alt="">
					</div>
					<div class="section-header section-head-one text-center aos " data-aos="fade-up">
						<h2>Most Trending Courses</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
						</div>
						<p class="sub-title">They are highly qualified and trained in their areas</p>
					</div>
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="trend-course-tab-slider most-trend-two owl-carousel">
								<div class="course-box" data-aos="fade-up">
									<div class="product">
										<div class="product-img trend-course">
											<a href="javascript:void(0);">
												<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
											</a>
										</div>
										<div class="product-content">
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													5.0 (2566)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-06.svg')}}" alt="">800 Students</span>
											</div>
											<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
											<p>Do you want to move on next step? Choose your most popular </p>
											<div class="rating rating-star rating-two align-items-center">	
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
												</div>
												<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
												<div class="course-btn">
													<span>$600</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="course-box" data-aos="fade-up">
									<div class="product">
										<div class="product-img trend-course">
											<a href="javascript:void(0);">
												<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
											</a>
										</div>
										<div class="product-content">
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													4.4 (2500)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-06.svg')}}" alt="">700 Students</span>
											</div>
											<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
											<p>Do you want to move on next step? Choose your most popular </p>
											<div class="rating rating-star rating-two align-items-center">	
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
												</div>
												<h5><a href="{{url('profile')}}">Allen Davis</a></h5>
												<div class="course-btn">
													<span>$750</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="course-box" data-aos="fade-up">
									<div class="product">
										<div class="product-img trend-course">
											<a href="javascript:void(0);">
												<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
											</a>
										</div>
										<div class="product-content">
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													4.8 (2550)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-06.svg')}}" alt="">850 Students</span>
											</div>
											<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
											<p>Do you want to move on next step? Choose your most popular </p>
											<div class="rating rating-star rating-two align-items-center">	
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
												</div>
												<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
												<div class="course-btn">
													<span>$450</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="course-box" data-aos="fade-up">
									<div class="product">
										<div class="product-img trend-course">
											<a href="javascript:void(0);">
												<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
											</a>
										</div>
										<div class="product-content">
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													4.6 (2466)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-06.svg')}}" alt="">750 Students</span>
											</div>
											<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
											<p>Do you want to move on next step? Choose your most popular </p>
											<div class="rating rating-star rating-two align-items-center">	
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
												</div>
												<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
												<div class="course-btn">
													<span>$600</span>
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
			<!-- /Most trending course -->

			<!-- join us mentor -->
			<section class="join-mentor">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-07.png')}}" class="img-fluid join-mentor-bgone" alt="">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-08.png')}}" class="img-fluid join-mentor-bgtwo" alt="">
					</div>
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="join-mentor-img aos " data-aos="fade-up">
								<img src="{{ URL::asset('/assets/img/join.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 ">
							<div class="head-join-us aos " data-aos="fade-up">
								<div class="join-mentor-details">
									<h2>Build in-demand tech skills in half the time</h2>
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
								<div class="reg-log-btn">
									<a href="{{url('register')}}" class="reg-btn">Register Now</a>
									<a href="{{url('login')}}" class="log-btn">Sign In</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /join us mentor -->

			<!-- Selection Cources -->
			<section class="section trending-courses selection-cource">
				<div class="container">
					<div class="section-header section-head-one aos " data-aos="fade-up">
						<h2>A Broad Selection Of Courses</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
						</div>
						<p class="sub-title">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</p>
					</div>
					<div class="broad-course-tab" data-aos="fade-up">
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
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-java-tab" data-bs-toggle="pill" data-bs-target="#pills-java" type="button" role="tab" aria-controls="pills-java" aria-selected="false">Javascript</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-it-tab" data-bs-toggle="pill" data-bs-target="#pills-it" type="button" role="tab" aria-controls="pills-it" aria-selected="false" tabindex="-1">IT Secuity</button>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="trend-course-tab-slider most-trend-two owl-carousel" data-aos="fade-up">
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Allen Davis</a></h5>
														<div class="course-btn">
															<span>$750</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
														<div class="course-btn">
															<span>$450</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
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
									<div class="trend-course-tab-slider most-trend-two owl-carousel">
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Allen Davis</a></h5>
														<div class="course-btn">
															<span>$750</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
														<div class="course-btn">
															<span>$450</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
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
									<div class="trend-course-tab-slider most-trend-two owl-carousel">
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Allen Davis</a></h5>
														<div class="course-btn">
															<span>$750</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
														<div class="course-btn">
															<span>$450</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
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
									<div class="trend-course-tab-slider most-trend-two owl-carousel">
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Allen Davis</a></h5>
														<div class="course-btn">
															<span>$750</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
														<div class="course-btn">
															<span>$450</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-java" role="tabpanel" aria-labelledby="pills-java-tab">
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="trend-course-tab-slider most-trend-two owl-carousel">
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
														</div>
														<h5><a href="">Allen Davis</a></h5>
														<div class="course-btn">
															<span>$750</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
														<div class="course-btn">
															<span>$450</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-it" role="tabpanel" aria-labelledby="pills-it-tab">
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="trend-course-tab-slider most-trend-two owl-carousel">
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Allen Davis</a></h5>
														<div class="course-btn">
															<span>$750</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Maths & logics – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Tyrone Roberts</a></h5>
														<div class="course-btn">
															<span>$450</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Research – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
													</div>
												</div>
											</div>
										</div>
										<div class="course-box">
											<div class="product">
												<div class="product-img trend-course">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/course/trending-course-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="product-content">
													<div class="rating rating-star rating-two align-items-center">	
														<div class="rating-img">
															<img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt="">
														</div>
														<h5><a href="{{url('profile')}}">Brittany Garcia</a></h5>
														<div class="course-btn">
															<span>$600</span>
														</div>
													</div>											
													<h3 class="title"><a href="javascript:void(0);">Learn Python – Interactive Free Tutorials</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rate-star">	
														<span class="average-rating rate-point ">
															<i class="fas fa-star"></i>
															5.0 (2566)
														</span>
														<span><i class="fas fa-user"></i>800 Students</span>
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
			<!-- /Selection Cources -->
			
			<!-- Featured Instructor -->
			<section class="featured-instructor feature-instructor-one">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-09.png')}}" class="img-fluid feature-bgone" alt="">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-10.png')}}" class="img-fluid feature-bgtwo" alt="">
					</div>
					<div class="section-header section-head-one text-center aos " data-aos="fade-up">
						<h2>Meet Our Professional Mentor</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
						</div>
						<p class="sub-title">They are highly qualified and trained in their areas</p>
					</div>
					<div class="featured-instructor-head aos " data-aos="fade-up">
						<div class="row">
							<div class="col-md-12">
								<div class="instructor-slider owl-carousel">
									<div class="large-team" data-aos="fade-up">
										<div class="student-img">
											<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/user16.png')}}" alt=""></a>
										</div>
										<div class="ins-content">
											<div class="team-name">
												<h4>
													<a href="{{url('profile')}}">David Lee</a>
												</h4>
												<span class="designation">Web Developer</span>
											</div>
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													5.0 (2566)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-icon.svg')}}" alt="">800 Students</span>
											</div>
										</div>
									</div>
									<div class="large-team" data-aos="fade-up">
										<div class="student-img">
											<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/user17.png')}}" alt=""></a>
										</div>
										<div class="ins-content">
											<div class="team-name">
												<h4>
													<a href="{{url('profile')}}">Charlotte</a>
												</h4>
												<span class="designation">Designer</span>
											</div>
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													4.8 (2550)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-icon.svg')}}" alt="">700 Students</span>
											</div>
										</div>
									</div>
									<div class="large-team" data-aos="fade-up">
										<div class="student-img">
											<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/user18.png')}}" alt=""></a>
										</div>
										<div class="ins-content">
											<div class="team-name">
												<h4>
													<a href="{{url('profile')}}">Ethan Williams</a>
												</h4>
												<span class="designation">Marketing</span>
											</div>
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													4.5 (2500)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-icon.svg')}}" alt="">850 Students</span>
											</div>
										</div>
									</div>
									<div class="large-team">
										<div class="student-img">
											<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/user19.png')}}" alt=""></a>
										</div>
										<div class="ins-content">
											<div class="team-name">
												<h4>
													<a href="{{url('profile')}}">John Hudson </a>
												</h4>
												<span class="designation">Web Developer</span>
											</div>
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													5.0 (2666)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-icon.svg')}}" alt="">600 Students</span>
											</div>
										</div>
									</div>
									<div class="large-team">
										<div class="student-img">
											<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/user18.png')}}" alt=""></a>
										</div>
										<div class="ins-content">
											<div class="team-name">
												<h4>
													<a href="{{url('profile')}}">David Lee</a>
												</h4>
												<span class="designation">Designer</span>
											</div>
											<div class="rating rate-star">	
												<span class="average-rating rate-point ">
													<i class="fas fa-star"></i>
													5.0 (2566)
												</span>
												<span><img src="{{ URL::asset('/assets/img/icon/user-icon.svg')}}" alt="">800 Students</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Featured Instructor -->

			<!-- Job Location -->
			<section class="job-location-sec location-sec-two">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-11.png')}}" class="img-fluid feature-bgthree" alt="">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-12.png')}}" class="img-fluid feature-bgfour" alt="">
					</div>
					<div class="section-header section-head-one text-center aos " data-aos="fade-up">
						<h2>Popular Job Location</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
						</div>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="job-area-slider owl-carousel">
								<div class="job-area-card" data-aos="fade-up">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-07.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Paris, France</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">14 Mentors</span>
									</div>
								</div>
								<div class="job-area-card" data-aos="fade-up">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-08.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Elpo, Mexico</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">18 Mentors</span>
									</div>
								</div>
								<div class="job-area-card" data-aos="fade-up">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-09.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Buenos Aires, Argentina</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">22 Mentors</span>
									</div>
								</div>
								<div class="job-area-card" data-aos="fade-up">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-10.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>London, England</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">20 Mentors</span>
									</div>
								</div>
								<div class="job-area-card" data-aos="fade-up">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-08.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Elpo, Mexico</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">18 Mentors</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /JOb Location -->

			<!-- Faq -->
			<section class="faq-sec faq-sec-two">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-09.png')}}" class="img-fluid feature-bgone" alt="">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-10.png')}}" class="img-fluid feature-bgtwo" alt="">
					</div>
					<!-- Section Header -->
					<div class="section-header section-head-one text-center aos " data-aos="fade-up">
						<h2>Frequently Asked Questions</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
						</div>
						<p class="sub-title">They are highly aWe collect reviews from our users so you can get an </p>
					</div>
					<!-- /Section Header -->
					<div class="row">
						<div class="col-md-12">
							<div class="faq-card">
								<div class="two-faq">
									<a class="collapsed" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
										<span> How can I book?</span>                                                                                                                                                                                     
										<div class="collapse multi-collapse" id="multiCollapseExample1">
											<div class="collapse-para">
												Lorem ipsum dolor sit amet consectetur. In nibh enim pretium vitae velit. Laoreet nibh et ultricies gravida sit elit enim metus donec. Eleifend vitae arcu enim est. Massa nibh viverra pulvinar cras nisl congue viverra. Cras est eu morbi non consectetur. Enim viverra interdum lorem turpis vel at. Nunc dignissim turpis lacinia varius purus congue massa. Ac faucibus felis sed amet. Cursus ut aliquam sit convallis. Luctus purus curabitur vivamus 
											</div>
										</div>
									</a>
								</div>
								<div class="two-faq">
									<a class="collapsed" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="true" aria-controls="multiCollapseExample2">
										<span> Quisque dignissim vulputate purus in sodales?</span>                                                                                                                                                                                   
										<div class="collapse multi-collapse" id="multiCollapseExample2">
											<div class="collapse-para">
												Lorem ipsum dolor sit amet consectetur. In nibh enim pretium vitae velit. Laoreet nibh et ultricies gravida sit elit enim metus donec. Eleifend vitae arcu enim est. Massa nibh viverra pulvinar cras nisl congue viverra. Cras est eu morbi non consectetur. Enim viverra interdum lorem turpis vel at. Nunc dignissim turpis lacinia varius purus congue massa. Ac faucibus felis sed amet. Cursus ut aliquam sit convallis. Luctus purus curabitur vivamus 
											</div>
										</div>
									</a>
								</div>
								<div class="two-faq">
									<a class="collapsed" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="true" aria-controls="multiCollapseExample3">
										<span> Nullam non vehicula neque. Vivamus sed consectetur nunc. Proin eu tristique justo, id eleifend urna? </span>                                                                                                                                                                                     
										<div class="collapse multi-collapse" id="multiCollapseExample3">
											<div class="collapse-para">
												Lorem ipsum dolor sit amet consectetur. In nibh enim pretium vitae velit. Laoreet nibh et ultricies gravida sit elit enim metus donec. Eleifend vitae arcu enim est. Massa nibh viverra pulvinar cras nisl congue viverra. Cras est eu morbi non consectetur. Enim viverra interdum lorem turpis vel at. Nunc dignissim turpis lacinia varius purus congue massa. Ac faucibus felis sed amet. Cursus ut aliquam sit convallis. Luctus purus curabitur vivamus 
											</div>
										</div>
									</a>
								</div>
								<div class="two-faq">
									<a class="collapsed" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">
										<span> Lorem Ipsum is simply dummy text of the printing and typesetting?</span>                                                                                                                                                                                  
										<div class="collapse multi-collapse" id="multiCollapseExample4">
											<div class="collapse-para">
												Lorem ipsum dolor sit amet consectetur. In nibh enim pretium vitae velit. Laoreet nibh et ultricies gravida sit elit enim metus donec. Eleifend vitae arcu enim est. Massa nibh viverra pulvinar cras nisl congue viverra. Cras est eu morbi non consectetur. Enim viverra interdum lorem turpis vel at. Nunc dignissim turpis lacinia varius purus congue massa. Ac faucibus felis sed amet. Cursus ut aliquam sit convallis. Luctus purus curabitur vivamus 
											</div>
										</div>
									</a>
								</div>
								<div class="two-faq">
									<a class="collapsed mb-0" data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">
										<span> Sit amet pulvinar metus est ut nisl? </span>                                                                                                                                                                                     
										<div class="collapse multi-collapse" id="multiCollapseExample5">
											<div class="collapse-para">
												Lorem ipsum dolor sit amet consectetur. In nibh enim pretium vitae velit. Laoreet nibh et ultricies gravida sit elit enim metus donec. Eleifend vitae arcu enim est. Massa nibh viverra pulvinar cras nisl congue viverra. Cras est eu morbi non consectetur. Enim viverra interdum lorem turpis vel at. Nunc dignissim turpis lacinia varius purus congue massa. Ac faucibus felis sed amet. Cursus ut aliquam sit convallis. Luctus purus curabitur vivamus 
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Faq -->
			
			<!-- Student say about -->
			<section class="student-say-about testimonial-section testi-mon-one">
				<div class="container">
					<div class="section-header section-head-one text-center aos " data-aos="fade-up">
						<h2>Reviews From Our Users</h2>
						<div class="title-bar">
							<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
						</div>
						<p class="sub-title">They are highly aWe collect reviews from our users so you can get an honest opinion
							of what an experience with our website are really like! and trained in their areas</p>
					</div>
					<div class="col-lg-12 col-md-12 text-center d-flex justify-content-center">
						<!-- <div id="myCarousel" class="carousel slide student-slide-testimoni aos " data-aos="fade-up" data-bs-interval="5000" data-bs-ride="carousel"> -->
							<div class="carousel-inner user-review-slide owl-carousel">
								<div class="carousel-item testi-item say-us active">
									<div class="student-group" data-aos="fade-up">
										<div class="reviewer-detail">
											<div class="student-about-img">
												<img src="{{ URL::asset('/assets/img/user/user20.png')}}" alt="">
											</div>
											<div class="reviewer-name">
												<h3><a href="{{url('reviews')}}">Hannah Schmitt</a></h3>
												<span>Lead Designer</span>
											</div>
										</div>
										<p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim </p>
										<div class="rating">
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
										</div>
									</div>
								</div>
								<div class="carousel-item testi-item say-us active">
									<div class="student-group" data-aos="fade-up">
										<div class="reviewer-detail">
											<div class="student-about-img">
												<img src="{{ URL::asset('/assets/img/user/user21.png')}}" alt="">
											</div>
											<div class="reviewer-name">
												<h3><a href="{{url('reviews')}}">Anderson Saviour</a></h3>
												<span>IT Manager</span>
											</div>
										</div>
										<p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim </p>
										<div class="rating">
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
										</div>
									</div>
								</div>
								<div class="carousel-item testi-item say-us active">
									<div class="student-group" data-aos="fade-up">
										<div class="reviewer-detail">
											<div class="student-about-img">
												<img src="{{ URL::asset('/assets/img/user/user20.png')}}" alt="">
											</div>
											<div class="reviewer-name">
												<h3><a href="{{url('reviews')}}">Hannah Schmitt</a></h3>
												<span>Lead designer</span>
											</div>
										</div>
										<p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim </p>
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
			<!-- /Student say about -->

			<!-- Our Blog -->
			<section class="section our-blog trending-courses-three popular-course-three">
				<div class="container">
					<div class="blog-head">
						<!-- Section Header -->
						<div class="section-header section-head-one aos " data-aos="fade-up">
							<h2>From Our Blogs</h2>
							<div class="title-bar">
								<img src="{{ URL::asset('/assets/img/icon/index-title-bar.svg')}}" alt="">
							</div>
							<p class="sub-title">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</p>
						</div>
						<!-- /Section Header -->
						<div class="explore-more text-center">
							<a href="{{url('blog-list')}}" class="all-browse">Browse All Blogs <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="course-box course-box-two" data-aos="fade-up">
								<div class="product">
									<div class="product-img trend-course">
										<a href="{{url('blog-details')}}">
											<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/blog-21.jpg')}}">
										</a>
									</div>
									<div class="feature-texts">
										<span>Marketing</span>
									</div>
									<div class="product-content">
										<ul class="date">	
											<li>
												<span><i class="fas fa-envelope"></i></span>
												40 Comments
											</li>
											<li>
												<span><i class="fas fa-clock"></i></span>
												21 Jan, 2023
											</li>
										</ul>
										<h3 class="title"><a href="{{url('blog-details')}}">Interview Question: Why Dont You Have a Degree?</a></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="course-box course-box-two" data-aos="fade-up">
								<div class="product">
									<div class="product-img trend-course">
										<a href="{{url('blog-details')}}">
											<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/blog-22.jpg')}}">
										</a>
									</div>
									<div class="feature-texts">
										<span>Marketing</span>
									</div>
									<div class="product-content">
										<ul class="date">	
											<li>
												<span><i class="fas fa-envelope"></i></span>
												30 Comments
											</li>
											<li>
												<span><i class="fas fa-clock"></i></span>
												20 Jan, 2023
											</li>
										</ul>
										<h3 class="title"><a href="{{url('blog-details')}}">How to Make a Perfect CV That Attracts the Attention</a></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="course-box course-box-two" data-aos="fade-up">
								<div class="product">
									<div class="product-img trend-course">
										<a href="{{url('blog-details')}}">
											<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/blog-23.jpg')}}">
										</a>
									</div>
									<div class="feature-texts">
										<span>Marketing</span>
									</div>
									<div class="product-content">
										<ul class="date">	
											<li>
												<span><i class="fas fa-envelope"></i></span>
												50 Comments
											</li>
											<li>
												<span><i class="fas fa-clock"></i></span>
												22 Jan, 2023
											</li>
										</ul>
										<h3 class="title"><a href="{{url('blog-details')}}">39 Strengths and Weaknesses To Discuss in a Courses</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Our Blog -->
			
			<!-- New Course subscribe -->
			<section class="new-course great-option">
				<div class="container">
					<div class="course-two-bg">
						<img src="{{ URL::asset('/assets/img/bg/home-two-bg-07.png')}}" class="img-fluid subscribe-bg" alt="">
					</div>
					<div class="head-join-us">
						<div class="row">
							<div class="col-xl-8" data-aos="fade-up">
								<h2>Find Your Next Great Opportunity!</h2>
							</div>
							<div class="col-xl-4">
								<div class="reg-log-btn" data-aos="fade-up">
									<a href="{{url('register')}}" class="reg-btn">Register Now</a>
									<a href="{{url('login')}}" class="log-btn">Sign In</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /New Course -->
@endsection