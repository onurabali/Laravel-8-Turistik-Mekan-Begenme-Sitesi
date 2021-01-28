@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- === BEGIN FOOTER === -->
<div id="content-bottom-border" class="container">
</div>
<div id="base">
    <div class="container padding-vert-30 margin-top-60">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-md-4 margin-bottom-20">
                <h3 class="margin-bottom-10">Contact Details</h3>
                <p>
                    <span class="fa-phone">Telephone:</span>{{$setting->phone}}
                    <br>
                    <span class="fa-envelope">Email:</span>
                    <a href="mailto:info@joomla51.com">{{$setting->email}}</a>
                    <br>
                    <span class="fa-link">Address:</span>
                    <a href="">{{$setting->address}}</a>
                    <br>
                    <span class="fa-link">Company:</span>
                    <a href="">{{$setting->company}}</a>
                    <br>
                </p>

            </div>
            <!-- End Contact Details -->
            <!-- Sample Menu -->
            <div class="col-md-3 margin-bottom-20">
                <h3 class="margin-bottom-10">Social Media</h3>
                <ul class="menu">
                    <li>
                        <a class="fa-lg fa-facebook" href="{{$setting->facebook}}" target="_blank" >Facebook</a>
                    </li>
                    <li>
                        <a class="fa-lg fa-facebook" href="{{$setting->instagram}} "target="_blank" >İnstagram</a>
                    </li>
                    <li>
                        <a class="fa-lg fa-twitter" href="{{$setting->twitter}}" target="_blank">Twitter</a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- End Sample Menu -->
            <div class="col-md-1"></div>
            <!-- Disclaimer -->
            <div class="col-md-3 margin-bottom-20 ">
                <h3 class="margin-bottom-10">Customer Services</h3>
                <ul class="menu">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>

                </ul>
            </div>
            <!-- End Disclaimer -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Footer Menu -->

<!-- End Footer Menu -->
<!-- JS -->
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/scripts.js"></script>
<!-- Isotope - Portfolio Sorting -->
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.isotope.js" type="text/javascript"></script>
<!-- Mobile Menu - Slicknav -->
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.slicknav.js" type="text/javascript"></script>
<!-- Animate on Scroll-->
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.visible.js" charset="utf-8"></script>
<!-- Sticky Div -->
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.sticky.js" charset="utf-8"></script>
<!-- Slimbox2-->
<script type="text/javascript" src="{{ asset('assets') }}/js/slimbox2.js" charset="utf-8"></script>
<!-- Modernizr -->
<script src="{{ asset('assets') }}/js/modernizr.custom.js" type="text/javascript"></script>
<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->
