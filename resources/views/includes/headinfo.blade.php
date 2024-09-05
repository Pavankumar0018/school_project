	<!--start header -->
	
	<header>
		
	    <div class="topbar d-flex align-items-center">
	        <nav class="navbar navbar-expand gap-3">
	            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
	            </div>
                <div class="top-menu ms-auto text-center">
	                <ul class="navbar-nav align-items-end gap-1">
                        <h4 class="text-cyan">Ram Sumitra Bal Niketan</h4> 
	                </ul>
	            </div>
				<div class="user-box dropdown px-3 ms-auto">

				</div>
	            {{-- <div class="user-box dropdown px-3 ms-auto">
	                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

						@if(session('image') && File::exists(public_path(session('image'))))
							<img src="{{ session('image') }}" class="user-img" alt="user avatar">
						@else
							<img src="{{ asset('assets/images/user-avtar.webp') }}" class="user-img" alt="user avatar">
						@endif

	                    <div class="user-info text-center">
	                        <p class="user-name text-cyan fw-bolder mb-0">{{ session('name') }}</p>
	                        <p class="designattion mb-0 text-capitalize text-yellow font-weight-bold">{{session('usertype') }}</p>
	                    </div>
	                </a>
	                <ul class="dropdown-menu dropdown-menu-end">
	                    <li><a class="dropdown-item font-16 d-flex align-items-center text-blue" href="{{ url('/updateProfile')}}"><i class="fa-solid fa-user"></i><span>User Profile</span></a>
	                    </li>
						<div class="dropdown-divider my-1"></div>
						<li><a class="dropdown-item font-16 d-flex align-items-center text-green" href="{{ url('/Password')}}"><i class="fa-solid fa-lock"></i><span>Change Password</span></a>
						</li>
	                    <div class="dropdown-divider my-1"></div>
	                    </li>
	                    <li><a class="dropdown-item font-16 d-flex align-items-center text-red" href="{{ url('/Logout')}}"><i class="bx bx-log-out-circle"></i><span>Logout User</span></a>
	                    </li>
						@if (session('roles'))
						<div class="dropdown-divider my-1"></div>
						<li style="cursor: pointer"><a class="dropdown-item font-16 d-flex align-items-center text-info" data-bs-toggle="modal" data-bs-target="#modal-switch" ><i class="fa-solid fa-rotate"></i><span>Switch role</span></a>
	                    </li>
						@endif
	                </ul>
	            </div> --}}
	        </nav>
	    </div>
	</header>
	<!--end header -->
