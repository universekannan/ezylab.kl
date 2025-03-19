@extends('layouts.app')
@section('content')
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{!! asset('assets/images/county/02.png') !!}" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/01.png') !!}" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/02.png') !!}" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/03.png') !!}" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/04.png') !!}" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/05.png') !!}" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/06.png') !!}" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/07.png') !!}" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{!! asset('assets/images/county/08.png') !!}" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/slack.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/behance.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="{!! asset('assets/images/app/google-drive.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/outlook.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/github.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/stack-overflow.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/figma.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/twitter.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/google-calendar.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/spotify.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/google-photos.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/pinterest.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/linkedin.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/dribble.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/youtube.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/google.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/envato.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{!! asset('assets/images/app/safari.png') !!}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{!! asset('assets/images/avatars/avatar-1.png') !!}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{!! asset('assets/images/avatars/avatar-2.png') !!}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="{!! asset('assets/images/app/outlook.png') !!}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{!! asset('assets/images/avatars/avatar-4.png') !!}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="{!! asset('assets/images/app/github.png') !!}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{!! asset('assets/images/avatars/avatar-8.png') !!}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-light w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/11.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/02.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/03.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/04.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/05.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/06.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/07.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/08.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{!! asset('assets/images/products/09.png') !!}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-light w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{!! asset('assets/images/avatars/avatar-2.png') !!}" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
			
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
				  <div class="col">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Total Orders</p>
										  <h5 class="mb-0 text-white">867</h5>
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-cart font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" id="chart1"></div>
						  </div>
					  </div>
					  <div class="col">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Total Income</p>
										  <h5 class="mb-0 text-white">$52,945</h5>
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-wallet font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" id="chart2"></div>
						  </div>
					  </div>
					  <div class="col">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Total Users</p>
										  <h5 class="mb-0 text-white">24.5K</h5>
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-group font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" id="chart3"></div>
						  </div>
					  </div>
					  <div class="col">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Comments</p>
										  <h5 class="mb-0 text-white">869</h5>
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-chat font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" id="chart4"></div>
						  </div>
					  </div>
				</div><!--end row-->
				
				
				<div class="row">
				  <div class="col-12 col-xl-8 d-flex">
					<div class="card radius-10 w-100">
						  <div class="card-body">
							  <div class="" id="chart5"></div>
						  </div>
					  </div>
				  </div>
				  <div class="col-12 col-xl-4 d-flex">
					<div class="card radius-10 w-100">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
									  <div>
										  <h5 class="mb-1">Sales Target</h5>
									  </div>
									  <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
									  </div>
								  </div>
							  <div class="mt-4" id="chart6"></div>
							  <div class="d-flex align-items-center">
									  <div>
										  <h2 class="mb-0">2248</h2>
										  <p class="mb-0">/2,800 target</p>
									  </div>
									  <div class="ms-auto d-flex align-items-center border radius-10 px-2">
										<i class='bx bxs-checkbox font-22 me-1 text-white'></i><span>Marketing Sales</span>
									  </div>
								</div>
						  </div>
					  </div>
				  </div>
				</div><!--end row-->
  
  
				<div class="row row-cols-1 row-cols-xl-2">
				  <div class="col d-flex">
					  <div class="card radius-10 w-100">
						  <div class="card-body">
							  <div class="" id="chart7"></div>
						  </div>
					  </div>
				  </div>
				  <div class="col d-flex">
					  <div class="card radius-10 w-100">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
								  <div>
									  <h5 class="mb-1">Sales Report</h5>
								  </div>
								  <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								  </div>
							  </div>
							  <div class="" id="chart8"></div>
						  </div>
					  </div>
				  </div>
				</div><!--end row-->
  
				<div class="row">
				  <div class="col-12 col-xl-4 col-xxl-3 d-flex">
					  <div class="card radius-10 w-100 overflow-hidden">
						  <div class="card-body">
							  <p class="mb-1">Overall Sales Performance</p>
							  <div class="">
								  <h2 class="mb-0">$84,126.5</h2>
								  <p class="mb-0">+2.5% vs last month</p>
							  </div>
						  </div>
						  <div class="" id="chart9"></div>
					  </div>
				  </div>
				  <div class="col-12 col-xl-8 col-xxl-9 d-flex">
					  <div class="card w-100 radius-10">
						  <div class="row g-0">
							<div class="col-md-4 border-end">
							  <div class="card-body">
								<h5 class="card-title">Top Sales Locations</h5>
								<h2 class="mt-4 mb-1">25.860 <i class="flag-icon flag-icon-us rounded"></i></h2>
								<p class="mb-0">Our Most Customers in US</p>
							  </div>
							  <ul class="list-group mt-4 list-group-flush">
								  <li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-white'></i>
									<span>Massive</span>
									<strong class="ms-auto">18.4k</strong>
								  </li>
								  <li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-light-2'></i>
									<span>Large</span>
									<strong class="ms-auto">6.9k</strong>
								  </li>
								  <li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-light-3'></i>
									<span>Medium</span>
									<strong class="ms-auto">5.4k</strong>
								  </li>
								  <li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-light-4'></i>
									<span>Small</span>
									<strong class="ms-auto">875</strong>
								  </li>
							  </ul>
							</div>
							<div class="col-md-8">
								<div class="p-3">
								  <div class="" id="geographic-map-3"></div>
								</div>
							</div>
						  </div>
						</div>
				  </div>
				</div><!--end row-->
  
				 <div class="row">
				   <div class="col-12 col-xl-4 d-flex">
					  <div class="card radius-10 w-100">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
								  <div>
									  <h5 class="mb-0">New Customers</h5>
								  </div>
								  <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								  </div>
							  </div>
						  </div>
						  <div class="customers-list p-3 mb-3">
							  <div class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-1.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Emy Jackson</h6>
									  <p class="mb-0 font-13">emy_jac@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-2.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Martin Hughes</h6>
									  <p class="mb-0 font-13">martin.hug@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-3.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Laura Madison</h6>
									  <p class="mb-0 font-13">laura_01@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-4.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Shoan Stephen</h6>
									  <p class="mb-0 font-13">s.stephen@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-5.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Keate Medona</h6>
									  <p class="mb-0 font-13">Keate@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-6.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Paul Benn</h6>
									  <p class="mb-0 font-13">pauly.b@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-7.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Winslet Maya</h6>
									  <p class="mb-0 font-13">winslet_02@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-8.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Bruno Bernard</h6>
									  <p class="mb-0 font-13">bruno.b@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-9.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Merlyn Dona</h6>
									  <p class="mb-0 font-13">merlyn.d@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
							  <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								  <div class="">
									  <img src="{!! asset('assets/images/avatars/avatar-10.png') !!}" class="rounded-circle" width="46" height="46" alt="" />
								  </div>
								  <div class="ms-2">
									  <h6 class="mb-1 font-14">Alister Campel</h6>
									  <p class="mb-0 font-13">alister_42@xyz.com</p>
								  </div>
								  <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									  <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								  </div>
							  </div>
						  </div>
					  </div>
				   </div>
				   <div class="col-12 col-xl-4 d-flex">
					  <div class="card radius-10 w-100 overflow-hidden">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
								  <div>
									  <h5 class="mb-0">Store Metrics</h5>
								  </div>
								  <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								  </div>
							  </div>
						  </div>
  
						  <div class="store-metrics p-3 mb-3">
							  
							  <div class="card mt-3 radius-10 bg-transparent border shadow-none">
								  <div class="card-body">
									  <div class="d-flex align-items-center">
										  <div>
											  <p class="mb-0">Total Products</p>
											  <h4 class="mb-0">856</h4>
										  </div>
										  <div class="widgets-icons ms-auto"><i class='bx bxs-shopping-bag'></i>
										  </div>
									  </div>
								  </div>
							  </div>
							  <div class="card radius-10 border bg-transparent  shadow-none">
								  <div class="card-body">
									  <div class="d-flex align-items-center">
										  <div>
											  <p class="mb-0">Total Customers</p>
											  <h4 class="mb-0">45,241</h4>
										  </div>
										  <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
										  </div>
									  </div>
								  </div>
							  </div>
							  <div class="card radius-10 border bg-transparent  shadow-none">
								  <div class="card-body">
									  <div class="d-flex align-items-center">
										  <div>
											  <p class="mb-0">Total Categories</p>
											  <h4 class="mb-0">98</h4>
										  </div>
										  <div class="widgets-icons ms-auto"><i class='bx bxs-category'></i>
										  </div>
									  </div>
								  </div>
							  </div>
							  <div class="card radius-10 border bg-transparent  shadow-none">
								  <div class="card-body">
									  <div class="d-flex align-items-center">
										  <div>
											  <p class="mb-0">Total Orders</p>
											  <h4 class="mb-0">124</h4>
										  </div>
										  <div class="widgets-icons ms-auto"><i class='bx bxs-cart-add'></i>
										  </div>
									  </div>
								  </div>
							  </div>
							  <div class="card radius-10 border bg-transparent  shadow-none mb-0">
								  <div class="card-body">
									  <div class="d-flex align-items-center">
										  <div>
											  <p class="mb-0">Total Vendors</p>
											  <h4 class="mb-0">55</h4>
										  </div>
										  <div class="widgets-icons ms-auto"><i class='bx bxs-user-account'></i>
										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
					  </div>
				   </div>
  
				   <div class="col-12 col-xl-4 d-flex">
					  <div class="card radius-10 w-100 ">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
								  <div>
									  <h5 class="mb-1">Top Products</h5>
								  </div>
								  <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								  </div>
							  </div>
						  </div>
  
						  <div class="product-list-2 p-3 mb-3">
  
							   <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/01.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Black Boost Chair</h6>
									  <p class="mb-0">148 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$246.24</h6>
								  </div>
								</div>
							   
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/03.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Red Single Sofa</h6>
									  <p class="mb-0">122 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$328.14</h6>
								  </div>
								</div>
							  
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/04.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Pink Rounded Sofa</h6>
									  <p class="mb-0">105 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$124.35</h6>
								  </div>
								</div>
							   
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/05.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Brown Single Table</h6>
									  <p class="mb-0">201 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$158.34</h6>
								  </div>
								</div>
								
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/06.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Grey Long Chair</h6>
									  <p class="mb-0">146 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">158.24</h6>
								  </div>
								</div>
								
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/07.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Beautiful Sofa</h6>
									  <p class="mb-0">210 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$520.24</h6>
								  </div>
								</div>
							   
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/08.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Grey Stand Table</h6>
									  <p class="mb-0">115 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$345.24</h6>
								  </div>
								</div>
							   
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/09.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Brown Single Table</h6>
									  <p class="mb-0">116 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$126.24</h6>
								  </div>
								</div>
							   
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/10.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Four Leg Chair</h6>
									  <p class="mb-0">154 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$425.24</h6>
								  </div>
								</div>
							   
								<div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								  <div class="product-img-2 me-2">
									   <img src="{!! asset('assets/images/products/11.png') !!}" alt="product img">
									</div>
								  <div class="">
									  <h6 class="mb-0 font-14">Blue Light T-Shirt</h6>
									  <p class="mb-0">186 Sales</p>
								  </div>
								  <div class="ms-auto">
									  <h6 class="mb-0">$149.34</h6>
								  </div>
								</div>
							   
						  </div>
					  </div>
				   </div>
				  </div><!--end row-->
  
  
				  <div class="row">
					  <div class="col">
						  <div class="card radius-10">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <h5 class="mb-1">Recent Orders</h5>
									  </div>
									  <div class="ms-auto">
										  <a href="javscript:;" class="btn btn-light btn-sm radius-30">View All Products</a>
									  </div>
								  </div>
  
								 <div class="table-responsive mt-3">
									 <table class="table align-middle mb-0">
										 <thead class="table-light">
											 <tr>
												 <th>Tracking ID</th>
												 <th>Products Name</th>
												 <th>Date</th>
												 <th>Status</th>
												 <th>Price</th>
												 <th>Actions</th>
											 </tr>
										 </thead>
										 <tbody>
											 <tr>
												 <td>#55879</td>
												 <td>
												  <div class="d-flex align-items-center">
													  <div class="recent-product-img">
														  <img src="{!! asset('assets/images/products/15.png') !!}" alt="">
													  </div>
													  <div class="ms-2">
														  <h6 class="mb-1 font-14">Light Red T-Shirt</h6>
													  </div>
												  </div>
												 </td>
												 <td>22 Jun, 2020</td>
												 <td class=""><span class="badge bg-light text-white w-100">Completed</span></td>
												 <td>#149.25</td>
												 <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
												 </td>
											 </tr>
											 <tr>
											  <td>#88379</td>
											  <td>
											   <div class="d-flex align-items-center">
												   <div class="recent-product-img">
													   <img src="{!! asset('assets/images/products/16.png') !!}" alt="">
												   </div>
												   <div class="ms-2">
													   <h6 class="mb-1 font-14">Grey Headphone</h6>
												   </div>
											   </div>
											  </td>
											  <td>22 Jun, 2020</td>
											  <td class=""><span class="badge bg-light text-white w-100">Cancelled</span></td>
											  <td>#149.25</td>
											  <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
											  </td>
										  </tr>
										  <tr>
											  <td>#68823</td>
											  <td>
											   <div class="d-flex align-items-center">
												   <div class="recent-product-img">
													   <img src="{!! asset('assets/images/products/19.png') !!}" alt="">
												   </div>
												   <div class="ms-2">
													   <h6 class="mb-1 font-14">Grey Hand Watch</h6>
												   </div>
											   </div>
											  </td>
											  <td>22 Jun, 2020</td>
											  <td class=""><span class="badge bg-light text-white w-100">Pending</span></td>
											  <td>#149.25</td>
											  <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
											  </td>
										  </tr>
										  <tr>
											  <td>#54869</td>
											  <td>
											   <div class="d-flex align-items-center">
												   <div class="recent-product-img">
													   <img src="{!! asset('assets/images/products/07.png') !!}" alt="">
												   </div>
												   <div class="ms-2">
													   <h6 class="mb-1 font-14">Brown Sofa</h6>
												   </div>
											   </div>
											  </td>
											  <td>22 Jun, 2020</td>
											  <td class=""><span class="badge bg-light text-white w-100">Completed</span></td>
											  <td>#149.25</td>
											  <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
											  </td>
										  </tr>
										  <tr>
											  <td>#22536</td>
											  <td>
											   <div class="d-flex align-items-center">
												   <div class="recent-product-img">
													   <img src="{!! asset('assets/images/products/17.png') !!}" alt="">
												   </div>
												   <div class="ms-2">
													   <h6 class="mb-1 font-14">Black iPhone 11</h6>
												   </div>
											   </div>
											  </td>
											  <td>22 Jun, 2020</td>
											  <td class=""><span class="badge bg-light text-white w-100">Completed</span></td>
											  <td>#149.25</td>
											  <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
											  </td>
										  </tr>
										  <tr>
											  <td>#25796</td>
											  <td>
											   <div class="d-flex align-items-center">
												   <div class="recent-product-img">
													   <img src="{!! asset('assets/images/products/14.png') !!}" alt="">
												   </div>
												   <div class="ms-2">
													   <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
												   </div>
											   </div>
											  </td>
											  <td>22 Jun, 2020</td>
											  <td class=""><span class="badge bg-light text-white w-100">Pending</span></td>
											  <td>#149.25</td>
											  <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
											  </td>
										  </tr>
										  <tr>
											  <td>#98754</td>
											  <td>
											   <div class="d-flex align-items-center">
												   <div class="recent-product-img">
													   <img src="{!! asset('assets/images/products/08.png') !!}" alt="">
												   </div>
												   <div class="ms-2">
													   <h6 class="mb-1 font-14">Grey Stand Table</h6>
												   </div>
											   </div>
											  </td>
											  <td>22 Jun, 2020</td>
											  <td class=""><span class="badge bg-light text-white w-100">Cancelled</span></td>
											  <td>#149.25</td>
											  <td>
												  <div class="d-flex order-actions">	<a href="javascript:;" class="text-white bg-light border-0"><i class='bx bxs-trash'></i></a>
													  <a href="javascript:;" class="ms-4 text-white bg-light border-0"><i class='bx bxs-edit' ></i></a>
												  </div>
											  </td>
										  </tr>
										 </tbody>
									 </table>
								 </div>
								  
							  </div>
						  </div>
					  </div>
				  </div><!--end row-->
			  
			  </div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		
@endsection
