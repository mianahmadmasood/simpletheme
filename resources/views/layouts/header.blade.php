<!-- Header -->
<header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
    <!-- Logo -->
    <div class="logo">
        <a href="#" class="default-logo"><img src="{{ asset('public/assets/img/logo.png') }}" alt=""></a>
        <a href="#" class="mobile-logo"><img src="{{ asset('public/assets/img/mobile-logo.png') }}" alt=""></a>
    </div>
    <!-- End Logo -->

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-12 col-xl-12">
                    <!-- Header Left -->
                    <div class=" main-header-right d-flex justify-content-end ">
                        <!-- Main Header User -->
                        <div class="main-header-user">
                            <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                <div class="menu-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="user-profile d-xl-flex align-items-center d-none">
                                    <!-- User Avatar -->
                                    <div class="user-avatar">
                                        <img src="{{ asset('public/assets/img/avatar/user.png') }}" alt="">
                                    </div>
                                    <!-- End User Avatar -->

                                    <!-- User Info -->
                                    <div class="user-info">
                                        <h4 class="user-name">Mian Ahmad</h4>
                                        <p class="user-email">MianAhmadQep@gmail.com</p>
                                    </div>
                                    <!-- End User Info -->
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#">My Profile</a>
                                <a href="#">task</a>
                                <a href="#">Settings</a>
                                <a href="#">Log Out</a>
                            </div>
                        </div>
                        <!-- End Main Header User -->

                        <!-- Main Header Menu -->
                        <div class="main-header-menu d-block d-lg-none">
                            <div class="header-toogle-menu">
                                <!-- <i class="icofont-navigation-menu"></i> -->
                                <img src="{{ asset('public/assets/img/menu.png') }}" alt="">
                            </div>
                        </div>
                        <!-- End Main Header Menu -->
                    </div>
                    <!-- End Header Left -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Header -->
</header>
<!-- End Header -->
