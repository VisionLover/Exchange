<!doctype html>
<html class="no-js" lang="en">

<head>
    <style>
        .product_thumb img{
            height: 200px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esther - Car Accessories Shop HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS
   ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <!--owl carousel min css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <!--slick min css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/slick.css')}}">
    <!--magnific popup min css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/magnific-popup.css')}}">
    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font.awesome.css')}}">
    <!--font ionicons css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/ionicons.min.css')}}" >
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!--jquery ui min css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/jquery-ui.min.css')}}" >
    <!--slinky menu css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/slinky.menu.css')}}" >
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}" >

    <link rel="stylesheet" type="text/css" href="{{asset('/css/show.css')}}" >

    <!--modernizr min js here-->
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/jq.js')}}"></script>

</head>

<body>

@include('header')

<!--slider area start-->
<section class="slider_section slider_s_two">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/img/slider/slider7.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-7 col-md-6 offset-md-6">
                        <div class="slider_content slider_c_three">
                            <h2>با پنج مبادله</h2>
                            <h1> اعتبار دریافت کنید</h1>
                            <p>انواع اعتبارات</p>
                            <a href="#xchange">همین حالا مبادله کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/img/slider/slider8.jpeg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_content slider_c_three">
                            <h2>با ده مبادله</h2>
                            <h1>جایزه بگیرید</h1>
                            <p>جوایز متنوع</p>
                            <a href="#xchange">همین حالا مبادله کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/img/slider/slider9.jpeg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-7 col-md-6 offset-md-6">
                        <div class="slider_content slider_c_three">
                            <h2>پنجاه مبادله</h2>
                            <h1> قرعه کشی</h1>
                            <p>شرکت کنید</p>
                            <a href="#xchange">همین حالا مبادله کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--shipping area start-->
<div class="shipping_area shipping_three">
    <div class="container">
        <div class="shipping_inner">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_shipping col1">
                        <div class="shipping_content">
                            <h3>ارسال رایگان پس از مبادله</h3>
                        </div>
                        <div class="shipping_icone">
                            <i class="icon-truck"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_shipping col2">
                        <div class="shipping_content">
                            <h3>پشتیبانی 24 ساعته</h3>
                        </div>
                        <div class="shipping_icone">
                            <i class="icon-phone-call"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_shipping col3">
                        <div class="shipping_content">
                            <h3>مهلت 30 روزه برای مرجوعی کالا</h3>
                        </div>
                        <div class="shipping_icone">
                            <i class="icon-send"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_shipping col4">
                        <div class="shipping_content">
                            <h3>ضمانت اصل بودن کالا</h3>
                        </div>
                        <div class="shipping_icone">
                            <i class="icon-credit-card"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shipping area end-->

<!--product area start-->
<section class="product_area mb-60" id="xchange">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title">
                        <h2> محصولات</h2>
                    </div>
                </div>
            </div>
        </div>

        @if(isset($products[0]))
        <div class="tab-content">
            <div class="tab-pane fade show active" id="automobiles" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel" >
                    @foreach($products as $product)
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="/single/{{$product->id}}/{{$product->slack}}"><img
                                            src="http://127.0.0.1:8000/productimage/{{$product->productimage}}" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="/single/{{$product->id}}/{{$product->slack}}"><a href="/single/{{$product->id}}/{{$product->slack}}"
                                                                    title="افزودن به علاقه مندی ها"><i
                                                        class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="/single/{{$product->id}}/{{$product->slack}}" title="مقایسه"><i
                                                        class="icon-repeat"></i></a></li>
                                            <li class="quick_button"><a href="/single/{{$product->id}}/{{$product->slack}}" data-toggle="modal"
                                                                        data-target="#modal_box" title="مشاهده"> <i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="/single/{{$product->id}}/{{$product->slack}}" title="add to cart">افزودن به سبد خرید</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <h4 class="pname"><a
                                            href="/single/{{$product->id}}/{{$product->slack}}">{{$product->productname}}</a>
                                    </h4>
                                    <div class="price_box">
                                        @if($product->count == 0)
                                            <p class="not_enough">نا موجود</p>
                                        @else
                                            <p class="current_price1">تومان</p>
                                            <p class="current_price1">
                                                {{$product->price}}
                                            </p><br>

                                            <p class="current_price1">
                                                {{$product->name}}
                                            </p>
                                            <p class="current_price1">قابل معاوضه با </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        @else
            <p style="text-align: right"> محصولی وجود ندارد </p>
        @endif
    </div>
</section>
<!--product area end-->

@include('footer')

<!-- modal area start-->

<!-- modal area end-->

<!-- JS
============================================ -->
<!--jquery min js-->
<script src="{{asset('assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
<!--popper min js-->
<script src="{{asset('assets/js/popper.js')}}"></script>
<!--bootstrap min js-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--owl carousel min js-->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!--slick min js-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!--magnific popup min js-->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--jquery countdown min js-->
<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<!--jquery ui min js-->
<script src="{{asset('assets/js/jquery.ui.js')}}"></script>
<!--jquery elevatezoom min js-->
<script src="{{asset('assets/js/jquery.elevatezoom.js')}}"></script>
<!--isotope packaged min js-->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!--slinky menu js-->
<script src="{{asset('assets/js/slinky.menu.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>



</body>

</html>
