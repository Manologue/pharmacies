<?php $page="favourites";?>
@extends('layout.mainlayout')
@section('content')	
	<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Favourites</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Favourites</h2>
						</div>
						<div class="col-md-4 col-12">
							<form class="search-form custom-search-form">
								<div class="input-group">
									<input type="text" placeholder="Search Favourites..." class="form-control">
									<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Sidebar -->
							<div class="profile-sidebar">
								<div class="user-widget">
									<div class="pro-avatar">JD</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
									</div>
									<div class="user-info-cont">
										<h4 class="usr-name">Jonathan Doe</h4>
										<p class="mentor-type">English Literature (M.A)</p>
									</div>
								</div>
								<div class="progress-bar-custom">
									<h6>Complete your profiles ></h6>
									<div class="pro-progress">
										<div class="tooltip-toggle" tabindex="0"></div>
										<div class="tooltip">80%</div>
									</div>
								</div>
								<div class="custom-sidebar-nav">
									<ul>
										<li><a href="dashboard-mentee"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="bookings-mentee"><i class="fas fa-clock"></i>Bookings <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="chat-mentee"><i class="fas fa-comments"></i>Messages <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="favourites" class="active"><i class="fas fa-star"></i>Favourites <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="profile-mentee"><i class="fas fa-user-cog"></i>Profile <span><i class="fas fa-chevron-right"></i></span></a></li>
										<li><a href="login"><i class="fas fa-sign-out-alt"></i>Logout <span><i class="fas fa-chevron-right"></i></span></a></li>
									</ul>
								</div>
							</div>
							<!-- /Sidebar -->

						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Ruby Perrin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">Digital Marketer</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating">(17)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Florida, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user1.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Darren Elder</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">UNIX, Calculus, Trigonometry</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(35)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Newyork, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $50 - $300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user2.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Deborah Angel</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">Computer Programming</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(27)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Georgia, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user3.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Sofia Brient</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">ASP.NET,Computer Gaming</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(4)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Louisiana, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $150 - $250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user4.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Marvin Campbell</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">Digital Marketer</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(66)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Michigan, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $50 - $700 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user5.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Katharine Berthold</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">UNIX, Calculus, Trigonometry</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(52)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Texas, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $500 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user6.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Linda Tobin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">General Course</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(43)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Kansas, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $1000 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user7.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Paul Richard</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">ASP.NET,Computer Gaming</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(49)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> California, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $400 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user8.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">John Gibbs</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">Digital Marketer</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(112)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $500 - $2500 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user9.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Olga Barlow</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">Digital Marketer</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(65)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Montana, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $75 - $250 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user10.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Julia Washington</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">UNIX, Calculus, Trigonometry</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(5)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $275 - $450 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="user-avatar">
											<a href="profile">
												<img class="img-fluid" alt="User Image" src="assets/img/user/user11.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="profile">Shaun Aponte</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">Diploma in (DLO)</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(5)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Indiana, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $150 - $350 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
										
							</div>

							<div class="blog-pagination mt-4">
								<nav>
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>

						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
@endsection