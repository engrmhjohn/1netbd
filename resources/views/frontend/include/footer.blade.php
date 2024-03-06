<div class="demo-footer">
    <div class="container">
        <div class="row">
            <div class="top-footer pt-5">
                <div class="row">
                    <div class="col-xl-4 col-sm-8 col-lg-6">
                        <div>
                            <!-- Page plugin's width will be 190px -->
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOneNet.ISP&tabs=timeline&width=300&height=271&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="300" height="271" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                        <hr>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-lg-6">
                        <h6>Quick Link</h6>
                        <ul class="list-unstyled mb-5 mb-lg-0">
                            <li><a href="index.html">Bill Pay Process</a></li>
                            <li><a href="alerts.html">Online Payment Process</a></li>
                            <li><a href="form-elements.html">About Us</a></li>
                            <li><a href="{{ route('front.btrc') }}">BTRC Approved Tariff</a></li>
                            <li><a href="{{ route('terms_condition') }}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-sm-12 col-lg-12">
                        <h6>Google Maps</h6>
                        <iframe
                            src="{{ $company_info->map_link }}"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <footer class="main-footer px-0 pb-3 text-center">
                <div class="row" style="color: whitesmoke;">
                    <div class="col-md-12">
                        Copyright © <span id="year"></span> <strong>{{ $company_info->en_name }}</strong> | All
                        rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
