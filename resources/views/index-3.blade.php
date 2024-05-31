@extends('layout.mainlayout')
@section('content')

			<!-- Home Banner -->
			<section class="section section-search home-slider-two index-three">
				<div class="container">
					<div class="banner-wrapper m-auto text-center aos" data-aos="fade-up">
						<div class="banner-header">
							<h1>Find the Perfect Mentors Near Your Location</h1>
							<p>Own your future learning new skills online</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box search-three">
							<form action="{{url('search')}}">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Keyword / Course Name">
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="City or Postalcode">
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i><img src="{{ URL::asset('/assets/img/icon/search-white-icon.svg')}}" alt=""></i> <span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->
						<div class="poular-search">
							<p><span>Popular Search :</span> Designer, Developer, Web, iOS, PHP</p>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Most popular Categories -->
			<section class="most-popular most-popular-two">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>Browse by category</h2>
							<p class="sub-title">Find the Categories that’s perfect for you. about 800+ new courses everyday</p>
						</div>
					</div>
					<div class="popular-categories aos " data-aos="fade-up">
						<div class="row justify-content-center">
							<div class="col-md-12">
								<div class="browse-cat-slider owl-carousel">
									<a href="{{url('search')}}">
										<div class="sub-categories align-items-center">
											<div class="categories-img d-flex justify-content-center align-items-center">
												<img src="{{ URL::asset('/assets/img/categories/cate-1.svg')}}" alt="">
											</div>
											<div class="categories-text">
												<h4>UI Design</h4>
												<h5><span>120</span> Mentors Available</h5>
											</div>
										</div>
									</a>
									<a href="{{url('search')}}">
										<div class="sub-categories align-items-center">
											<div class="categories-img d-flex justify-content-center align-items-center">
												<img src="{{ URL::asset('/assets/img/categories/cate-2.svg')}}" alt="">
											</div>
											<div class="categories-text">
												<h4>Development</h4>
												<h5><span>200</span> Mentors Available</h5>
											</div>
										</div>
									</a>
									<a href="{{url('search')}}">
										<div class="sub-categories align-items-center">
											<div class="categories-img d-flex justify-content-center align-items-center">
												<img src="{{ URL::asset('/assets/img/categories/cate-3.svg')}}" alt="">
											</div>
											<div class="categories-text">
												<h4>IT & Software</h4>
												<h5><span>240</span> Mentors Available</h5>
											</div>
										</div>
									</a>
									<a href="{{url('search')}}">
										<div class="sub-categories align-items-center">
											<div class="categories-img d-flex justify-content-center align-items-center">
												<img src="{{ URL::asset('/assets/img/categories/cate-4.svg')}}" alt="">
											</div>
											<div class="categories-text">
												<h4>Business</h4>
												<h5><span>292</span> Mentors Available</h5>
											</div>
										</div>
									</a>
									<a href="{{url('search')}}">
										<div class="sub-categories align-items-center">
											<div class="categories-img d-flex justify-content-center align-items-center">
												<img src="{{ URL::asset('/assets/img/categories/cate-5.svg')}}" alt="">
											</div>
											<div class="categories-text">
												<h4>Marketing</h4>
												<h5><span>150</span> Mentors Available</h5>
											</div>
										</div>
									</a>
									<a href="{{url('search')}}">
										<div class="sub-categories align-items-center">
											<div class="categories-img d-flex justify-content-center align-items-center">
												<img src="{{ URL::asset('/assets/img/categories/cate-6.svg')}}" alt="">
											</div>
											<div class="categories-text">
												<h4>Photography</h4>
												<h5><span>160</span> Mentors Available</h5>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Most popular Categories -->

			<!-- Lets Work -->
			<section class="lets-work">
				<div class="container">
					<div class="lets-work-card">
						<div class="row align-items-center">
							<div class="col-lg-8">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="explore-img">
											<img src="{{ URL::asset('/assets/img/work-img.png')}}" class="img-fluid" alt="">
										</div>
									</div>
									<div class="col-md-8">
										<div class="explore-title">
											<h2>Let’s Work Together <span> & Explore Opportunities</span></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="work-btns">
									<div class="btn-reg">
										<a href="{{url('register')}}">Register Now</a>
									</div>
									<div class="btn-log">
										<a href="{{url('login')}}">Sign In</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Most trending course -->
			<section class="section trending-courses trending-courses-two trend-two">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>Featured courses of the day</h2>
							<p class="sub-title">Featured courses of the day</p>
						</div>
					</div>
					<div class="broad-course-tab trending-tab">
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
							<div class="course-two-all aos " data-aos="fade-up">
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user3.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$300</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user4.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$150</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user5.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">500 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">80 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$400</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user6.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user7.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">400 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$100</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
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
							<div class="course-two-all aos " data-aos="fade-up">
								<div class="row">
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$300</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user3.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$150</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user4.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">500 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">80 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$400</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user5.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user6.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">400 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$100</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
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
							<div class="course-two-all aos " data-aos="fade-up">
								<div class="row">
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user4.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$300</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user5.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$150</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user7.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">500 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">80 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$400</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user6.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user3.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">400 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$100</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
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
							<div class="course-two-all aos " data-aos="fade-up">
								<div class="row">
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$300</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$150</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">500 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">80 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$400</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">400 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$100</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-java" role="tabpanel" aria-labelledby="pills-java-tab">
							<div class="course-two-all aos " data-aos="fade-up">
								<div class="row">
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$300</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$150</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">500 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">80 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$400</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">400 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$100</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-it" role="tabpanel" aria-labelledby="pills-it-tab">
							<div class="course-two-all aos " data-aos="fade-up">
								<div class="row">
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">700 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$300</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">50 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$150</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">500 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">80 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$400</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">800 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$200</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="course-box course-box-three">
											<div class="product">
												<div class="product-img">
													<a href="javascript:void(0);">
														<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
													</a>
												</div>
												<div class="fav-star">
													<span class="average-rating rate-point three-rate">
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														<i class="fas fa-star text-warning"></i>
														5.0
													</span>
													<span class="favourite">
														<i class="fas fa-heart"></i>
													</span>
												</div>
												<div class="rating-img">
													<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
												</div>
												<div class="product-content">
													<div class="course-info d-flex align-items-center">
														<div class="user-student">
															<span><img src="{{ URL::asset('/assets/img/icon/user-icon-05.svg')}}" alt="">400 Students</span>
														</div>
														<div class="user-lesson">
															<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">40 Lessons</span>
														</div>
													</div>
													<h3 class="title"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h3>
													<p>Do you want to move on next step? Choose your most popular </p>
													<div class="rating rating-star rating-two align-items-center">	
														<div class="course-price">
															<h4>$100</h4>
														</div>
														<div class="book">
															<a href="javascript:void(0);">Book Now</a>
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
			<!-- /Most trending course -->

			<section class="join-mentor join-mentor-two">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="join-mentor-img aos aos-init aos-animate" data-aos="fade-up">
								<img src="{{ URL::asset('/assets/img/join-02.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 ">
							<div class="head-join-us aos aos-init aos-animate" data-aos="fade-up">
								<div class="join-mentor-details">
									<span class="sub">Variety of Courses</span>
									<h2>Find The One That’s <span>Right</span> For You</h2>
									<p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
								</div>
								<div class="reg-log-btn">
									<a href="{{url('search')}}" class="find-ment">Find Mentors</a>
									<a href="javascript:void(0);" class="view-course">View All Courses</a>
								</div>
							</div>
						</div>
					</div>
					<div class="course-counter">
						<div class="row justify-content-center">
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="counter-box text-center">
									<h5 ><span class="counterUp">25</span>K</h5>
									<h4>Updated Courses</h4>
									<p>We always provide people acomplete solution upon focused of any business</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="counter-box text-center">
									<h5><span class="counterUp">200</span>K</h5>
									<h4>Featured Mentors</h4>
									<p>We always provide people acomplete solution upon focused of any business</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="counter-box text-center">
									<h5><span class="counterUp">600</span>K</h5>
									<h4>Skilled Users</h4>
									<p>We always provide people acomplete solution upon focused of any business</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="counter-box text-center">
									<h5><span class="counterUp">100</span>%</h5>
									<h4>Job Satisfaction</h4>
									<p>We always provide people acomplete solution upon focused of any business</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Top Rating Instructor -->
			<section class="rating-instructor istructor-taring-three same-dots">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>Top Mentors</h2>
							<p class="sub-title">Discover your next career move, freelance gig, or internship</p>
						</div>
					</div>
					<div class="owl-carousel mentoring-course  rating-instructor-slide owl-theme aos " data-aos="fade-up">
						<div class="mentor-top-one">
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-01.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Steve kennedy</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Italy</span>
									<span>17 Courses</span>
								</div>
							</div>
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-02.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Wright</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Netherland</span>
									<span>18 Courses</span>
								</div>
							</div>
						</div>
						<div class="mentor-top-one">
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-03.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Angela</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Germany</span>
									<span>20 Courses</span>
								</div>
							</div>
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-04.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Barbara</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Norway</span>
									<span>22 Courses</span>
								</div>
							</div>
						</div>
						<div class="mentor-top-one">
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-05.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Lee</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Jamaica</span>
									<span>17 Courses</span>
								</div>
							</div>
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-06.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Gonzales</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">USA</span>
									<span>15 Courses</span>
								</div>
							</div>
						</div>
						<div class="mentor-top-one">
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-07.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Abigail</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Norway</span>
									<span>17 Courses</span>
								</div>
							</div>
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-08.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Christopher</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Italy</span>
									<span>17 Courses</span>
								</div>
							</div>
						</div>
						<div class="mentor-top-one">
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-01.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Steve kennedy</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Jamaica</span>
									<span>17 Courses</span>
								</div>
							</div>
							<div class="mentor-slide-card">
								<div class="slide-mentor-info d-flex align-items-center">
									<div class="slide-img">
										<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/mendor/top-mentor-02.jpg')}}" alt=""></a>
									</div>
									<div class="slide-name ">
										<h4><a href="{{url('profile')}}">Steve kennedy</a></h4>
										<span class="average-rating rate-point three-rate">
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											<i class="fas fa-star text-warning"></i>
											5.0
										</span>
									</div>
								</div>
								<div class="slide-location">
									<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Italy</span>
									<span>17 Courses</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Top Rating Instructor -->

			<!-- Most Popular Courses -->
			<section class="trending-courses trending-courses-two popular-course-two same-dots home-three-course">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>Popular Courses Near You</h2>
							<p class="sub-title">Search and connect with the right Courses faster.</p>
						</div>
					</div>
					<div class="owl-carousel popular-course-slide-two owl-theme aos " data-aos="fade-up">
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-01.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-02.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user3.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-03.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user4.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-04.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user5.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-05.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user6.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-06.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user7.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="course-box course-box-three">
							<div class="product">
								<div class="product-img product-img-three">
									<a href="javascript:void(0);">
										<img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/blog/trend-img-07.jpg')}}" width="600" height="300">
									</a>
								</div>
								<div class="fav-star">
									<span class="average-rating rate-point three-rate">
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										<i class="fas fa-star text-warning"></i>
										5.0
									</span>
									<span class="favourite">
										<i class="fas fa-heart"></i>
									</span>
								</div>
								<div class="product-content">
									<div class="course-info d-flex align-items-center">
										<div class="user-student">
											<span><img src="{{ URL::asset('/assets/img/icon/location-02.svg')}}" alt="">Russia</span>
										</div>
										<div class="user-lesson">
											<span><img src="{{ URL::asset('/assets/img/icon/book-content-icon.svg')}}" alt="">60 Lessons</span>
										</div>
									</div>
									<h3 class="title"><a href="javascript:void(0);">Learn CorelDraw – Interactive Tutorial</a></h3>
									<div class="rating rating-star rating-two align-items-center">	
										<div class="course-price">
											<h4>$200</h4>
										</div>
										<div class="rating-img price-img">
											<img src="{{ URL::asset('/assets/img/user/user2.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="reg-log-btn d-flex">
						<a href="javascript:void(0);" class="view-course">View All Courses</a>
					</div>
				</div>
			</section>
			<!-- Most Popular Courses -->

			<!-- Say testimonial Two -->
			<section class="testimonial-two">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>See Some Words</h2>
							<p class="sub-title">Thousands of employee get their ideal jobs and feed back to us!</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="testi-customer-slider owl-carousel">
								<div class="review-testi-box">
									<div class="testi-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortorsed eros aliquam eleifend.</p>
										<div class="polygon-arrow">
											<img src="{{ URL::asset('/assets/img/polygon.svg')}}" class="img-fluid w-auto" alt="">
										</div>
									</div>
									<div class="news-user-name">
										<a href="{{url('reviews')}}"><img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt=""></a>
										<h5>
											<a href="{{url('reviews')}}">Steve</a>
											<span>Designer</span>
										</h5>
									</div>
								</div>
								<div class="review-testi-box">
									<div class="testi-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortorsed eros aliquam eleifend.</p>
										<div class="polygon-arrow">
											<img src="{{ URL::asset('/assets/img/polygon.svg')}}" class="img-fluid w-auto" alt="">
										</div>
									</div>
									<div class="news-user-name">
										<a href="{{url('reviews')}}"><img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt=""></a>
										<h5>
											<a href="{{url('reviews')}}">Harvey</a>
											<span>Business Marketing</span>
										</h5>
									</div>
								</div>
								<div class="review-testi-box">
									<div class="testi-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortorsed eros aliquam eleifend.</p>
										<div class="polygon-arrow">
											<img src="{{ URL::asset('/assets/img/polygon.svg')}}" class="img-fluid w-auto" alt="">
										</div>
									</div>
									<div class="news-user-name">
										<a href="{{url('reviews')}}"><img src="{{ URL::asset('/assets/img/user/user.jpg')}}" alt=""></a>
										<h5>
											<a href="{{url('reviews')}}">Tyson</a>
											<span>Finance</span>
										</h5>
									</div>
								</div>
								<div class="review-testi-box">
									<div class="testi-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortorsed eros aliquam eleifend.</p>
										<div class="polygon-arrow">
											<img src="{{ URL::asset('/assets/img/polygon.svg')}}" class="img-fluid w-auto" alt="">
										</div>
									</div>
									<div class="news-user-name">
										<a href="{{url('reviews')}}"><img src="{{ URL::asset('/assets/img/user/user1.jpg')}}" alt=""></a>
										<h5>
											<a href="{{url('reviews')}}">Gonzales</a>
											<span>Developer</span>
										</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Say testimonial Two -->

			<!-- Job Location -->
			<section class="job-location-sec location-sec-three">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>Popular Locations</h2>
							<p class="sub-title">Search and connect with the right Courses faster.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="job-area-slider owl-carousel">
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-14.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Paris, France</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">14 Mentors</span>
									</div>
								</div>
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-11.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Elpo, Mexico</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">18 Mentors</span>
									</div>
								</div>
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-12.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Elpo, Mexico</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">18 Mentors</span>
									</div>
								</div>
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-13.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Elpo, Mexico</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">18 Mentors</span>
									</div>
								</div>
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-11.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Elpo, Mexico</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">18 Mentors</span>
									</div>
								</div>
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-12.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>Buenos Aires, Argentina</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">22 Mentors</span>
									</div>
								</div>
								<div class="job-area-card">
									<div class="job-img">
										<a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/city/city-13.jpg')}}" alt=""></a>
									</div>
									<div class="job-place">
										<h5>London, England</h5>
										<span><img src="{{ URL::asset('/assets/img/icon/user-circle-03.svg')}}" alt="">20 Mentors</span>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /JOb Location -->

			<!-- New Course subscribe -->
			<section class="new-course great-option">
				<div class="bg-img">
					<img src="{{ URL::asset('/assets/img/great-option-01.png')}}" class="img-fluid bg-option" alt="">
					<img src="{{ URL::asset('/assets/img/great-option-02.png')}}" class="img-fluid bg-option-two" alt="">
				</div>
				<div class="container">
					<div class="head-join-us">
						<div class="row">
							<div class="col-lg-12">
								<div class="great-option-three text-center">
									<h2>Find Your Next Great Opportunity!</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies </p>
									<div class="reg-log-btn">
										<a href="{{url('register')}}" class="reg-btn">Register Now</a>
										<a href="{{url('login')}}" class="log-btn">Sign In</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /New Course -->

			<!-- Faq -->
			<section class="faq-sec faq-sec-three">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>Frequently Asked Qusetions</h2>
							<p class="sub-title">Have Questions? We are here to help</p>
						</div>
					</div>
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
			</section>
			<!-- /Faq -->

			<!-- Blog Two -->
			<div class="news-blog-three">
				<div class="container">
					<div class="section-top-head top-head-three">
						<div class="section-header aos " data-aos="fade-up">
							<h2>News and Blog</h2>
							<p class="sub-title">Get the latest news, updates and tips</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="news-card-slider owl-carousel">
								<div class="news-card">
									<div class="news-card-img">
										<a href="{{url('blog-details')}}"><img src="{{ URL::asset('/assets/img/blog/news-blog-01.jpg')}}" class="img-fluid" alt=""></a>
									</div>
									<div class="news-card-content">
										<div class="marketing-text">
											<span>Marketing</span>
										</div>
										<h3><a href="{{url('blog-details')}}">How to Make a Perfect CV That Attracts the Attention</a></h3>
										<p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
										<div class="news-user-info">
											<div class="news-user-name">
												<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt=""></a>
												<h5>
													<a href="{{url('profile')}}">Harvey</a>
													<span>06 Jan 2023</span>
												</h5>
											</div>
											<div class="read-duration">
												<span><img src="{{ URL::asset('/assets/img/icon/time-icon.svg')}}" alt="">20 Min to read</span>
											</div>
										</div>
									</div>
								</div>
								<div class="news-card">
									<div class="news-card-img">
										<a href="{{url('blog-details')}}"><img src="{{ URL::asset('/assets/img/blog/news-blog-02.jpg')}}" class="img-fluid" alt=""></a>
									</div>
									<div class="news-card-content">
										<div class="marketing-text">
											<span>Marketing</span>
										</div>
										<h3><a href="{{url('blog-details')}}">Interview Question: Why Dont You Have a Degree?</a></h3>
										<p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
										<div class="news-user-info">
											<div class="news-user-name">
												<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/profile-02.jpg')}}" alt=""></a>
												<h5>
													<a href="{{url('profile')}}">Steve</a>
													<span>06 Jan 2023</span>
												</h5>
											</div>
											<div class="read-duration">
												<span><img src="{{ URL::asset('/assets/img/icon/time-icon.svg')}}" alt="">20 Min to read</span>
											</div>
										</div>
									</div>
								</div>
								<div class="news-card">
									<div class="news-card-img">
										<a href="{{url('blog-details')}}"><img src="{{ URL::asset('/assets/img/blog/news-blog-03.jpg')}}" class="img-fluid" alt=""></a>
									</div>
									<div class="news-card-content">
										<div class="marketing-text">
											<span>Marketing</span>
										</div>
										<h3><a href="{{url('blog-details')}}">39 Strengths and Weaknesses To Discuss in a Courses</a></h3>
										<p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
										<div class="news-user-info">
											<div class="news-user-name">
												<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/profile-03.jpg')}}" alt=""></a>
												<h5>
													<a href="{{url('profile')}}">Casandra</a>
													<span>06 Jan 2023</span>
												</h5>
											</div>
											<div class="read-duration">
												<span><img src="{{ URL::asset('/assets/img/icon/time-icon.svg')}}" alt="">20 Min to read</span>
											</div>
										</div>
									</div>
								</div>
								<div class="news-card">
									<div class="news-card-img">
										<a href="{{url('blog-details')}}"><img src="{{ URL::asset('/assets/img/blog/news-blog-01.jpg')}}" class="img-fluid" alt=""></a>
									</div>
									<div class="news-card-content">
										<div class="marketing-text">
											<span>Marketing</span>
										</div>
										<h3><a href="{{url('blog-details')}}">How to Make a Perfect CV That Attracts the Attention</a></h3>
										<p>Lorem ipsum dolor sit amet, et alii clita tritani per. Vix ut vidisse pertinacia, ius ut maiorum omittam....</p>
										<div class="news-user-info">
											<div class="news-user-name">
												<a href="{{url('profile')}}"><img src="{{ URL::asset('/assets/img/user/profile-01.jpg')}}" alt=""></a>
												<h5>
													<a href="{{url('profile')}}">Steve</a>
													<span>06 Jan 2023</span>
												</h5>
											</div>
											<div class="read-duration">
												<span><img src="{{ URL::asset('/assets/img/icon/time-icon.svg')}}" alt="">20 Min to read</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="reg-log-btn d-flex">
						<a href="{{url('blog-list')}}" class="view-course">View All Blogs</a>
					</div>
				</div>
			</div>
			<!-- /Blog Two -->

@endsection