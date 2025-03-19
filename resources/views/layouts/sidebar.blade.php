		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dashtrans</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			 <ul class="metismenu" id="menu">
			    <li>
					<a href="{{ url('dashboard') }}">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">Users</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-calendar-edit"></i>
						</div>
						<div class="menu-title">Admission</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">Billing</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">Pharmacy</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">Investigation</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">OT</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">MRD</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx bx-cog me-0"></i>
						</div>
						<div class="menu-title">Setting</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">MIS</div>
					</a>
					<ul>
						<li> <a href="{{ url('users') }}"><i class='bx bx-radio-circle'></i>Users</a>
						</li>
						<li> <a href="{{ url('usertypes') }}"><i class='bx bx-radio-circle'></i>User Types</a>
						</li>
					</ul>
				</li>
				
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="bx bx-user-circle"></i>
							</div>
							<div class="menu-title">Galaxy Kannan</div>
						</a>
						<ul>
							<li>
								<a href="{{ url('logout') }}">
										<div class="parent-icon"><i class="fadeIn animated bx bx-power-off"></i>
										</div>
										<div class="menu-title"> Profile</div>
									</a>
							</li>
							<li>
								<a href="{{ url('logout') }}">
										<div class="parent-icon"><i class="fadeIn animated bx bx-power-off"></i>
										</div>
										<div class="menu-title">Reset Password</div>
									</a>
							</li>
							<li>
							 <form method="POST" action="{{ route('logout') }}">
                                @csrf
								<a href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
										<div class="parent-icon"><i class="fadeIn animated bx bx-power-off"></i>
										</div>
										<div class="menu-title">Logout</div>
							    </a>
							  </form>
							</li>
						</ul>
					</li>
			</ul>
		</div>
