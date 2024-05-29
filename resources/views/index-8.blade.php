@extends('layout.mainlayout')
@section('content')
			<!-- Home Banner -->
			<section class=" home-slide home-slide-four d-flex align-items-center">
				<div class="container">
					<div class="side-four-right">
						<img  src="{{URL::asset('/assets/img/img-1.png')}}" alt="">
					</div>
					<div class="row ">
						<div class="col-lg-6 d-flex align-items-center">
							<div class="section-banner-three aos" data-aos="fade-up">
								<div class="hometwo-slide-text">
									<h1>Engaging & Accessible <span>Online Courses</span> For All</h1>
									<p>Own your future learning new skills online</p>
								</div>
								<!-- Search -->
								<div class="search-box search-eight-box">
									<form action="search.html">
										<div class="form-group search-info location-search">
											<input type="text" class="form-control text-truncate" placeholder=" Search School, Online educational centers, etc">
											<a href="{{url('search')}}" class="btn bg-search search-btn align-items-center d-flex justify-content-center">Search</a>
										</div>
									</form>
								</div>
								<!-- /Search -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="object-slide-img aos " data-aos="fade-up">
								<img  src="{{URL::asset('/assets/img/object-5.png')}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
			
			<!-- Course Categories four -->
			<section class="most-popular course-categories-four">
				<div class="container">
					<div class="side-four">
						<img  src="{{URL::asset('/assets/img/img-2.png')}}" alt="">
					</div>
					<div class="section-header h-four text-center aos " data-aos="fade-up">
						<span>Top Categories</span>
						<h2>Popular Courses Categories</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
					</div>
					<div class="popular-categories aos " data-aos="fade-up">
						<div class="row justify-content-center">
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-design d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-19.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Business</h4>
												<p class="course-count">Over 200+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-development d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-20.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Marketing</h4>
												<p class="course-count">Over 100+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-software d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-21.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Design</h4>
												<p class="course-count">Over 300+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-business d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-22.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Development</h4>
												<p class="course-count">Over 250+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-marketing d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-23.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>IT & Networking</h4>
												<p class="course-count">Over 400+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-photography d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-24.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Photography</h4>
												<p class="course-count">Over 450+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-design d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-25.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Art & Cultures</h4>
												<p class="course-count">Over 150+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<a href="{{url('search')}}">
									<div class="sub-categories bg-photography d-flex align-items-center justify-content-center">
										<div class="sub-categories-group">
											<div class="categories-img ">
												<img  src="{{URL::asset('/assets/img/categories/cate-26.png')}}" alt="">
											</div>
											<div class="categories-text text-center">
												<h4>Research</h4>
												<p class="course-count">Over 300+ Courses</p>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="explore-more text-center aos " data-aos="fade-up">
						<a href="{{url('search')}}" class="btn bg-explore">Show All Categories</a>
					</div>
				</div>
			</section>
			<!-- /Course Categories four -->
			
			<!-- Featured Courses four -->
			<section class="section featured-course-four">
				<div class="container">
					<div class="side-four-right">
						<img  src="{{URL::asset('/assets/img/img-3.png')}}" alt="">
					</div>
					<div class="side-four">
						<img  src="{{URL::asset('/assets/img/img-2.png')}}" alt="">
					</div>
					<div class="section-header h-four text-center aos " data-aos="fade-up">
						<span>What’s New</span>
						<h2>Featured Courses</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
					</div>
					<div class="featured-course-new aos " data-aos="fade-up">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="featured-course-face">
									<div class="featured-course-design">
										<div class="course-info d-flex align-items-center">
											<div class="course-bg-left">
												<img  src="{{URL::asset('/assets/img/course-bg-1.png')}}" alt="">
											</div>
											<div class="course-bg-right">
												<img  src="{{URL::asset('/assets/img/course-bg-2.png')}}" alt="">
											</div>
											<div class="rating rating-star">	
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
											</div>
											<div class="course-price">
												<h4>$400</h4>
											</div>
										</div>
										<div class="featured-course-four-head text-center">
											<h2>
												<a href="{{url('search')}}">UI/UX Design</a>
											</h2>
										</div>
										<div class="view-student">
											<ul class="view-student-four justify-content-center">
												<li><i class="fas fa-users"></i></li>
												<li>50 Students</li>
												<li><i class="fas fa-file-alt"></i></li>
												<li>85</li>	
											</ul>	
										</div>
									</div>
									<div class="course-footer-text text-center">
										<h4>
											<a href="{{url('search')}}">Information About UI/UX Design Degree</a>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="featured-course-face">
									<div class="featured-course-design">
										<div class="course-info d-flex align-items-center">
											<div class="course-bg-left">
												<img  src="{{URL::asset('/assets/img/course-bg-1.png')}}" alt="">
											</div>
											<div class="course-bg-right">
												<img  src="{{URL::asset('/assets/img/course-bg-2.png')}}" alt="">
											</div>
											<div class="rating rating-star">	
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating rate-point ">4.2<span class="rate-star-point">(15)</span></span>
											</div>
											<div class="course-price">
												<h4>Free</h4>
											</div>
										</div>
										<div class="featured-course-four-head text-center">
											<h2>
												<a href="{{url('search')}}">Photography</a>
											</h2>
										</div>
										<div class="view-student">
											<ul class="view-student-four justify-content-center">
												<li><i class="fas fa-users"></i></li>
												<li>40 Students</li>
												<li><i class="fas fa-file-alt"></i></li>
												<li>65</li>	
											</ul>	
										</div>
									</div>
									<div class="course-footer-text text-center">
										<h4>
											<a href="{{url('search')}}">Photography Crash Course for Photographer</a>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="featured-course-face">
									<div class="featured-course-design">
										<div class="course-info d-flex align-items-center">
											<div class="course-bg-left">
												<img  src="{{URL::asset('/assets/img/course-bg-1.png')}}" alt="">
											</div>
											<div class="course-bg-right">
												<img  src="{{URL::asset('/assets/img/course-bg-2.png')}}" alt="">
											</div>
											<div class="rating rating-star">	
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating rate-point ">3.4<span class="rate-star-point">(15)</span></span>
											</div>
											<div class="course-price">
												<h4>$200</h4>
											</div>
										</div>
										<div class="featured-course-four-head text-center">
											<h2>
												<a href="{{url('search')}}">React </a>
											</h2>
										</div>
										<div class="view-student">
											<ul class="view-student-four justify-content-center">
												<li><i class="fas fa-users"></i></li>
												<li>30 Students</li>
												<li><i class="fas fa-file-alt"></i></li>
												<li>75</li>	
											</ul>	
										</div>
									</div>
									<div class="course-footer-text text-center">
										<h4>
											<a href="{{url('search')}}">React – The Complete Guide (React Router) </a>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="featured-course-face">
									<div class="featured-course-design">
										<div class="course-info d-flex align-items-center">
											<div class="course-bg-left">
												<img  src="{{URL::asset('/assets/img/course-bg-1.png')}}" alt="">
											</div>
											<div class="course-bg-right">
												<img  src="{{URL::asset('/assets/img/course-bg-2.png')}}" alt="">
											</div>
											<div class="rating rating-star">	
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(15)</span></span>
											</div>
											<div class="course-price">
												<h4>$100</h4>
											</div>
										</div>
										<div class="featured-course-four-head text-center">
											<h2>
												<a href="{{url('search')}}">Marketing</a>
											</h2>
										</div>
										<div class="view-student">
											<ul class="view-student-four justify-content-center">
												<li><i class="fas fa-users"></i></li>
												<li>40 Students</li>
												<li><i class="fas fa-file-alt"></i></li>
												<li>80</li>	
											</ul>	
										</div>
									</div>
									<div class="course-footer-text text-center">
										<h4>
											<a href="{{url('search')}}">Email & Affiliate Marketing Mastermind</a>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="featured-course-face">
									<div class="featured-course-design">
										<div class="course-info d-flex align-items-center">
											<div class="course-bg-left">
												<img  src="{{URL::asset('/assets/img/course-bg-1.png')}}" alt="">
											</div>
											<div class="course-bg-right">
												<img  src="{{URL::asset('/assets/img/course-bg-2.png')}}" alt="">
											</div>
											<div class="rating rating-star">	
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(15)</span></span>
											</div>
											<div class="course-price">
												<h4>Free</h4>
											</div>
										</div>
										<div class="featured-course-four-head text-center">
											<h2>
												<a href="{{url('search')}}">Java</a>
											</h2>
										</div>
										<div class="view-student">
											<ul class="view-student-four justify-content-center">
												<li><i class="fas fa-users"></i></li>
												<li>50 Students</li>
												<li><i class="fas fa-file-alt"></i></li>
												<li>90</li>	
											</ul>	
										</div>
									</div>
									<div class="course-footer-text text-center ">
										<h4>
											<a href="{{url('search')}}">Java (Beginner) Programming Tutorials</a>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="featured-course-face">
									<div class="featured-course-design">
										<div class="course-info d-flex align-items-center">
											<div class="course-bg-left">
												<img  src="{{URL::asset('/assets/img/course-bg-1.png')}}" alt="">
											</div>
											<div class="course-bg-right">
												<img  src="{{URL::asset('/assets/img/course-bg-2.png')}}" alt="">
											</div>
											<div class="rating rating-star">	
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
											</div>
											<div class="course-price">
												<h4>$400</h4>
											</div>
										</div>
										<div class="featured-course-four-head text-center">
											<h2>
												<a href="{{url('search')}}">Python</a>
											</h2>
										</div>
										<div class="view-student">
											<ul class="view-student-four justify-content-center">
												<li><i class="fas fa-users"></i></li>
												<li>50 Students</li>
												<li><i class="fas fa-file-alt"></i></li>
												<li>85</li>	
											</ul>	
										</div>
									</div>
									<div class="course-footer-text text-center">
										<h4>
											<a href="{{url('search')}}">Complete Python Bootcamp: Go from zero to hero.</a>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="explore-more text-center aos " data-aos="fade-up">
						<a href="{{url('search')}}" class="btn bg-explore">Show All Categories</a>
					</div>
				</div>
			</section>
			<!-- /Featured Courses four -->
			
			<!-- Top Rating Instructor four -->
			<section class="rating-instructor-four">
				<div class="container">
					<div class="section-header h-four text-center aos " data-aos="fade-up">
						<span>EXPERT</span>
						<h2>Top Rating Instructor</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
					</div>
					<div class="instructor-four-face aos " data-aos="fade-up">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="large-team">
									<div class="student-img">
										<a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/user/user-26.jpg')}}" alt=""></a>
										<div class="rating-student-four">
											<div class="expert-student">
												<ul class="student-view-four">
													<li><i class="fas fa-users"></i></li>
													<li>40 Students</li>
												</ul>
											</div>
											<div class="expert-social-icon d-flex align-items-center">
												<ul class="social-icon-four">
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="team-name">
										<h4>
											<a href="{{url('profile')}}">Jack Wilson</a>
										</h4>
										<span class="designation">Developer</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="large-team">
									<div class="student-img">
										<a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/user/user-27.jpg')}}" alt=""></a>
										<div class="rating-student-four">
											<div class="expert-student">
												<ul class="student-view-four">
													<li><i class="fas fa-users"></i></li>
													<li>30 Students</li>
												</ul>
											</div>
											<div class="expert-social-icon d-flex align-items-center">
												<ul class="social-icon-four">
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="team-name">
										<h4>
											<a href="{{url('profile')}}">Daziy Millar</a>
										</h4>
										<span class="designation">PHP Expert</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="large-team">
									<div class="student-img">
										<a href="{{url('profile')}}"><img  src="{{URL::asset('/assets/img/user/user-28.jpg')}}" alt=""></a>
										<div class="rating-student-four">
											<div class="expert-student">
												<ul class="student-view-four">
													<li><i class="fas fa-users"></i></li>
													<li>50 Students</li>
												</ul>
											</div>
											<div class="expert-social-icon d-flex align-items-center">
												<ul class="social-icon-four">
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="team-name">
										<h4>
											<a href="{{url('profile')}}">James </a>
										</h4>
										<span class="designation">Web Developer</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="large-team">
									<div class="student-img">
										<img  src="{{URL::asset('/assets/img/user/user-29.jpg')}}" alt="">
										<div class="rating-student-four">
											<div class="expert-student">
												<ul class="student-view-four">
													<li><i class="fas fa-users"></i></li>
													<li>40 Students</li>
												</ul>
											</div>
											<div class="expert-social-icon d-flex align-items-center">
												<ul class="social-icon-four">
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#" class="social-icon-space d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="team-name">
										<h4>
											<a href="{{url('profile')}}">David Lee</a>
										</h4>
										<span class="designation">Developer</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="explore-more text-center aos " data-aos="fade-up">
						<a href="{{url('profile')}}" class="btn bg-explore">Show All Categories</a>
					</div>
				</div>
			</section>
			<!-- /Top Rating Instructor four -->

			<!-- Faq -->
			<section class="faq-five-sec">
				<div class="container">
					<!-- Section Header -->
					<div class="section-header h-four text-center aos " data-aos="fade-up">
						<span>Most Viewed</span>
						<h2>Frequently Asked Questions</h2>
						<p class="sub-title">Are you looking to join online institutions? Now it’s very simple, Sign up with mentoring</p>
					</div>
					<!-- /Section Header -->
					<div class="row">
						<div class="col-lg-6">
							<div class="faq-box-eight" data-aos="fade-up">
								<div class="faq-head">
									<p><span>?</span>Is the regular license the same thing as an editorial license?</p>
								</div>
								<div class="faq-body">
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
							</div>
							<div class="faq-box-eight" data-aos="fade-up">
								<div class="faq-head">
									<p><span>?</span>Is the regular license the same thing as an editorial license?</p>
								</div>
								<div class="faq-body">
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
							</div>
							<div class="faq-box-eight border-0" data-aos="fade-up">
								<div class="faq-head">
									<p><span>?</span>Is the regular license the same thing as an editorial license?</p>
								</div>
								<div class="faq-body">
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="faq-box-eight" data-aos="fade-up">
								<div class="faq-head">
									<p><span>?</span>Is the regular license the same thing as an editorial license?</p>
								</div>
								<div class="faq-body">
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
							</div>
							<div class="faq-box-eight" data-aos="fade-up">
								<div class="faq-head">
									<p><span>?</span>Is the regular license the same thing as an editorial license?</p>
								</div>
								<div class="faq-body">
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
							</div>
							<div class="faq-box-eight border-0" data-aos="fade-up">
								<div class="faq-head">
									<p><span>?</span>Is the regular license the same thing as an editorial license?</p>
								</div>
								<div class="faq-body">
									<p>Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
								</div>
							</div>
						</div>
						<div class="view-all text-center aos aos-init aos-animate" data-aos="fade-up"> 
							<a href="javascript:void(0);" class="btn bg-explore">View All</a>
						</div>
					</div>
				</div>
			</section>
			<!-- /Faq -->

			<!-- Blog Section -->
			<section class="section section-blogs-five">
				<div class="container">
				
					<!-- Section Header -->
					<div class="section-header h-four text-center aos " data-aos="fade-up">
						<span>Latest</span>
						<h2>Blogs & News</h2>
						<p class="sub-title">Are you looking to join online institutions? Now it’s very simple, Sign up with mentoring</p>
					</div>
					<!-- /Section Header -->
					
					<div class="row blog-grid-row justify-content-center">
						<div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">
						
							<!-- Blog Post -->
							<div class="blog-card">
								<div class="blog-card-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid"  src="{{URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
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
									<a href="{{url('blog-details')}}"><img class="img-fluid"  src="{{URL::asset('/assets/img/blog/blog-16.jpg')}}" alt="Post Image"></a>
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
									<a href="{{url('blog-details')}}"><img class="img-fluid"  src="{{URL::asset('/assets/img/blog/blog-17.jpg')}}" alt="Post Image"></a>
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
									<h3 class="blog-title-eight"><a href="blog-details')}}">The standard chunk of Lorem Ipsum used</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									<a href="{{url('blog-details')}}" class="read">Read more</a>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
					</div>
					<div class="view-all text-center aos" data-aos="fade-up"> 
						<a href="{{url('blog-list')}}" class="btn btn-primary bg-explore">View All</a>
					</div>
				</div>
			</section>
			<!-- /Blog Section -->
            @endsection