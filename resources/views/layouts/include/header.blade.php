

<header id="header-container" class="fullwidth ">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="#"><img src="{{asset('_landing/images/logo2.png')}}" data-sticky-logo="{{asset('dashboard/images/logo.png')}}" alt=""></a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">
                    <ul id="responsive">

                        <li><a class="current" href="{{url('/admin')}}">Home</a></li>


                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">

                <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger">
					    <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					    </button>
				        </span>


                    <!--  User Notifications / End -->

                    <!-- User Menu -->
                    <div class="header-widget">

                        <!-- Messages -->
                        <div class="header-notifications user-menu">
                            <div class="header-notifications-trigger">
                                <a href="#"><div class="user-avatar status-online"><img src="{{asset('dashboard/images/user-avatar-small-01.jpg')}}" alt=""></div></a>
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">

                                <!-- User Status -->
                                <div class="user-status">

                                    <!-- User Name / Avatar -->
                                    <div class="user-details">
                                        <div class="user-avatar status-online"><img src="{{asset('dashboard/images/user-avatar-small-01.jpg')}}" alt=""></div>
                                        <div class="user-name">
                                            {{Auth::user()->name}} <span>
                                            </span>
                                        </div>
                                    </div>



                                </div>

                                <ul class="user-menu-small-nav">
                                    <li><a href="{{url('/admin')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="{{'/logout'}}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                    <!-- User Menu / End -->
            <!-- Mobile Navigation Button -->
                <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>

