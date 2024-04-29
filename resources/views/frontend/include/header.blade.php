<div class="landing-top-header overflow-hidden">
    <div class="top sticky">
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar horizontal-main">
            <div class="container">
                <div class="row">
                    <div class="main-sidemenu navbar px-0">
                        <a class="navbar-brand ps-0 d-none d-lg-block" href="{{ route('/') }}">
                            <img src="{{ asset($company_info->color_logo) }}" alt="Color logo" class="light-logo1" style="height: auto; max-width: 165px; margin-top: -5px;">
                            <img src="{{ asset($company_info->white_logo) }}" alt="White logo" class="logo-3" style="height: auto; max-width: 165px; margin-top: -5px;">
                        </a>
                        <ul class="side-menu">
                            <li class="slide {{ (request()->is('/')) ? 'active' : '' }}">
                                <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('/') }}"><span class="side-menu__label">Home</span></a>
                            </li>
                            <li class="slide {{ (request()->is('about-us')) ? 'active' : '' }}">
                                <a class="{{ (request()->is('about-us')) ? 'active' : '' }}" href="{{ route('front.about') }}"><span class="side-menu__label">About US</span></a>
                            </li>
                            <li class="slide {{ (request()->is('internet-packages')) ? 'active' : '' }}">
                                <a class="{{ (request()->is('internet-packages')) ? 'active' : '' }}" href="{{ route('front.packages') }}"><span
                                        class="side-menu__label">Packages</span></a>
                            </li>
                            <li class="slide {{ (request()->is('bill-payment')) ? 'active' : '' }}">
                                <a class="{{ (request()->is('bill-payment')) ? 'active' : '' }}" href="{{ route('front.bill_payment') }}"><span
                                        class="side-menu__label">Bill Payment</span></a>
                            </li>
                            <li class="slide {{ (request()->is('contact-us')) ? 'active' : '' }}">
                                <a class="{{ (request()->is('contact-us')) ? 'active' : '' }}" href="{{ route('front.contact') }}"><span
                                        class="side-menu__label">Contact US</span></a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('login') }}"><span
                                        class="side-menu__label">Login</span></a>
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