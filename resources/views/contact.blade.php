<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esther - contact page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />

    <!-- CSS
   ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--font ionicons css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>
@include('header');
<!--contact map start-->
<div class="contact_map mt-32">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-area">
                    <div id="map" style="width:100%;height:400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact map end-->

<!--contact area start-->
<div class="contact_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact_message content">
                    <h3>تماس با ما</h3>
                    <p>
                        راه های ارتباطی با ما
                    </p>
                    <ul>
                        <li class="contact"> آدرس : استان قم، قم، بلوار غدیر،دانشگاه قم <i class="fa fa-fax"></i></li>
                        <li class="contact"> esther.la <i class="fa fa-phone"></i></li>
                        <li class="contact"> 09901816165 <i class="fa fa-envelope-o"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact_message form">
                    <h3>ارسال دیدگاه</h3>
                    <form method="POST" action="{{route('suggests')}}">
                        @csrf
                        <p>
                            <label> نام </label>
                            <input required name="name" placeholder="نام" type="text">
                        </p>
                        <p>
                            <label> ایمیل </label>
                            <input required name="email" placeholder="ایمیل " type="email">
                        </p>
                        <p>
                            <label> موضوع </label>
                            <input required name="subject" placeholder="موضوع" type="text">
                        </p>
                        <div class="contact_textarea">
                            <label> متن دیدگاه </label>
                            <textarea required placeholder="متن دیدگاه" name="message" class="form-control2"></textarea>
                        </div>
                        <button class="sendbutton" type="submit"> ارسال </button>
                        <p class="form-messege"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--contact area end-->


<!--footer area start-->
@include('footer')
<!--footer area end-->

<!-- JS
============================================ -->


<!--map js code here-->
<script src="https://www.google.com/jsapi"></script>

<!--jquery min js-->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
<script src="assets/js/popper.js"></script>
<!--bootstrap min js-->
<script src="assets/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="assets/js/owl.carousel.min.js"></script>
<!--slick min js-->
<script src="assets/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--jquery countdown min js-->
<script src="assets/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="assets/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="assets/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="assets/js/slinky.menu.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>
    var map = L.map('map').setView([34.6014030659007, 50.82565740309117], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([34.6014030659007, 50.82565740309117]).addTo(map)
        .bindPopup('<p>دانشگاه قم</p>')
        .openPopup();
</script>

</body>

</html>
