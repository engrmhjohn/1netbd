<div class="landing-top-header overflow-hidden">
    <div class="top sticky">
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar horizontal-main">
            <div class="container">
                <div class="row">
                    <div class="main-sidemenu navbar px-0">
                        <a class="navbar-brand ps-0 d-none d-lg-block" href="{{ route('/') }}">
                            <img src="{{ asset($company_info->color_logo) }}" alt="Color logo" class="light-logo1" style="height: auto; max-width: 165px;">
                            <img src="{{ asset($company_info->white_logo) }}" alt="White logo" class="logo-3" style="height: auto; max-width: 165px;">
                        </a>
                        <ul class="side-menu">
                            <li class="slide">
                                <a href="{{ route('/') }}"><span class="side-menu__label">Home</span></a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('front.about') }}"><span
                                        class="side-menu__label">About US</span></a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('front.packages') }}"><span
                                        class="side-menu__label">Packages</span></a>
                            </li>
                            <li class="slide">
                                <a class="" data-bs-toggle="slide"
                                    href="javascript:void(0)">
                                    <span class="side-menu__label">Payment</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Submenu
                                            items</a></li>
                                    <li><a href="https://onesky.com.bd" class="slide-item">bKash Payment
                                            System</a></li>
                                    <li><a href="https://skytrackerbd.com" class="slide-item">Online
                                            Payment System</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="{{ route('front.contact') }}"><span
                                        class="side-menu__label">Contact</span></a>
                            </li>
                            <li class="slide">
                                <a class="" data-bs-toggle="slide"
                                    href="javascript:void(0)">
                                    <span class="side-menu__label">Admin Panel</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ route('login') }}" class="slide-item">Login</a></li>
                                    <li><a href="{{ route('register') }}" class="slide-item">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="header-nav-right d-none d-lg-flex">
                            <div class="d-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting" id="theme-toggle">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>
    
</div>