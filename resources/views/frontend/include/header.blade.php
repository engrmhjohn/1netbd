<div class="landing-top-header overflow-hidden">
    <div class="top sticky">
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar bg-transparent horizontal-main">
            <div class="container">
                <div class="row">
                    <div class="main-sidemenu navbar px-0">
                        <a class="navbar-brand ps-0 d-none d-lg-block" href="{{ route('/') }}">
                            <img alt=""
                                src="{{ asset('backendAssets') }}/static_images/logo.png" style="height: auto; max-width: 165px;">
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
                        </ul>
                        <div class="header-nav-right d-none d-lg-flex">
                            @if (Auth::check())
                                <a href="{{ url('/dashboard') }}"
                                    class="btn ripple btn-min w-sm btn-danger me-2 my-auto"
                                    target="_blank">Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn ripple btn-min w-sm btn-danger me-2 my-auto"
                                    target="_blank">Login
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>
    
</div>