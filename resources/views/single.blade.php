<!doctype html>
<html class="no-js" lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esther - product details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
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
    <script src="{{asset('/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jq.js') }}" defer></script>

    <style>
        table{
            margin-top: 0;
        }
         .forgot{
             font-size: 14px ;
         }
        a:hover{
            text-decoration: none !important;
        }
        .swal-text , .swal-title{
        font-family: 'IRANSans-web', sans-serif;
            text-align: center;
        }
        #zoom1{
            height: 400px;
        }
        #img-1{
            text-align: center;
        }
        .product_thumb img{
            height: 200px;
        }
    </style>

</head>

<body >
@include('header')

<!--product details start-->
<div class="product_details mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">

                        <h1>{{$product[0]->productname}}</h1>
                            <div class="price_box">
                                <p class="current_price">تومان</p> <p class="current_price">{{$product[0]->price}} </p>
                            </div>
                        <div class="product_variant color" style="text-align: right;margin: 10px">
                            <ul style="display: inline-block">
                                @foreach($pcolor as $pcolors)
                                    <li style="background: {{$pcolors->HEX}}"><a href="#"></a></li>
                                @endforeach
                            </ul>
                            <label class="color-title"> : رنگ </label>
                        </div>
                        <div class="product_variant color" style="text-align: right;margin: 10px">
                            @foreach($category_name as $category_names)
                                <p style="display: inline-block">{{$category_names->name}}</p>
                            @endforeach
                            <label class="titles"> : دسته ی کالا </label>
                        </div>
                        <div class="product_variant color" style="text-align: right;margin: 10px">
                            <p style="display: inline-block">{{$product[0]->description}}</p>
                            <label class="titles"> : توضیحات </label>
                        </div>
                        <div class="product_variant color" style="text-align: right;margin: 10px">
                            @foreach($wanted_name as $wanted)
                                <p style="display: inline-block">{{$wanted->name}}</p>
                            @endforeach
                            <label class="titles"> : دسته ی مورد نیاز کاربر </label>
                        </div>
                        @auth
                            <div class="product_variant quantity count">
                                <form style="display: inline-block" method="post" action="{{route('addtocart')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product[0]->id}}">
                                    <button class="button" type="submit">اضافه به سبد خرید</button>
                                </form>
                                <button style="display: inline-block" class="button" type="submit"><a href="tel:{{$phone}}"> خرید</a></button>
                            </div>
                        @else
                            <div class="product_variant quantity count">
                                <p> برای افزودن این محصول به سبد خرید خود وارد اکانت خود شوید .<a data-toggle="modal" data-target="#exampleModal"
                                                                     class="login_acc" href="{{route('login')}}">ورود به
                                    اکانت</a></p>
                                <button style="display: inline-block" class="button" type="submit"><a href="tel:{{$phone}}"> خرید</a></button>
                            </div>
                        @endauth

                </div>
            </div>
            <div class="col-lg-6  col-md-6">
                <div class="product-details-tab">

                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="http://127.0.0.1:8000/productimage/{{$product[0]->productimage}}"
                                 data-zoom-image="http://127.0.0.1:8000/productimage/{{$product[0]->productimage}}"
                                 alt="big-1">
                        </a>
                    </div>

                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                   data-image="http://127.0.0.1:8000/productimage/{{$product[0]->productimage}}"
                                   data-zoom-image="http://127.0.0.1:8000/productimage/{{$product[0]->productimage}}">
                                    <img src="http://127.0.0.1:8000/productimage/{{$product[0]->productimage}}" alt="zo-th-1"/>
                                </a>

                            </li>
                            @foreach($pimage as $pimages)
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                       data-image="http://127.0.0.1:8000/productimage/{{$pimages->image}}"
                                       data-zoom-image="http://127.0.0.1:8000/productimage/{{$pimages->image}}">
                                        <img src="http://127.0.0.1:8000/productimage/{{$pimages->image}}"
                                             alt="zo-th-1"/>
                                    </a>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

<!--product info start-->
<div class="product_d_info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">توضیخات</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">مشخصات</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">نظرات</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="product_info_content">
                                <p style="display: inline-block">{{$product[0]->description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                            <div class="product_d_table">
                                <form action="#">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td class="first_child">رنگ</td>
                                            <td>
                                                @php
                                                $x = 0 ;
                                                @endphp
                                                @foreach($pcolor as $pcolors)
                                                    @if($x>0)
                                                        ,
                                                    @endif
                                                    {{$pcolors->name}}
                                                        @php
                                                            $x = $x + 1 ;
                                                        @endphp
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="first_child"> دسته بندی</td>
                                            @foreach($category_name as $category_names)
                                                <td>{{$category_names->name}}</td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel" >
                            <div class="reviews_wrapper" id="app">
                                @auth()
                                <div class="comment_title">
                                    <h2>افزودن نظر</h2>
                                    <p>آدرس ایمیل شما منتشر نخواهد شد.
                                        قسمت های مورد نیاز را پر کنید </p>
                                </div>
                                <div class="product_review_form" xmlns:v-on="http://www.w3.org/1999/xhtml">
                                    <form method="post" action="{{route('postcm')}}" @submit.prevent="submitcm({{$product[0]->id}} , {{Auth::user()->id}})">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12" style="text-align: right">
                                                <label for="review_comment">نظر شما</label>
                                                <textarea v-model="comment" id="review_comment" required
                                                          oninvalid="this.setCustomValidity('پر کردن این فیلد اجباری است')"
                                                          oninput="setCustomValidity('')"></textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="qsubmit" >ثبت نظر</button>
                                    </form>
                                </div>
                                @else
                                    <p> برای ثبت نظر وارد اکانت خود شوید .<a data-toggle="modal" data-target="#exampleModal" class="login_acc" href="{{route('login')}}">ورود به اکانت</a></p>
                                @endauth

                                <h2>آخرین نظرات</h2>
                                <div class="reviews_comment_box">
                                    @if(isset($comments[0]))
                                        @foreach($comments as $comment)
                                            <div class="col-md-6 offset-md-6 col-12 comment_text"
                                                 xmlns="http://www.w3.org/1999/html" id="app">
                                                <div class="reviews_meta">
                                                    <p><strong>{{$comment->name}}</strong>- September 12, 2018</p>
                                                    <span class="cm">{{$comment->text}}</span>
                                                    @auth
                                                        <p data-toggle="modal" data-target="#exampleModal1"
                                                           class="answer"
                                                           data-whatever="{{$comment->id}}">پاسخ</p>
                                                        <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                             role="dialog" aria-labelledby="exampleModalLabel"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            پاسخ به دیدگاه</h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body"
                                                                         xmlns="http://www.w3.org/1999/html">
                                                                        <form method="POST"
                                                                              action="{{ route('postanswer') }}"
                                                                              @submit.prevent="submitanswer({{$product[0]->id}} , {{Auth::user()->id}})">
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <input type="hidden"
                                                                                       class="form-control"
                                                                                       id="recipient-name1">
                                                                            </div>
                                                                            <div
                                                                                class="form-group row justify-content-center">
                                                                                <div style="text-align: right"
                                                                                     class="col-md-10">
                                                                                    <label for="textarea"
                                                                                           class="col-form-label">:
                                                                                        پاسخ </label>
                                                                                    <textarea v-model="answer"
                                                                                              id="textarea"
                                                                                              class="form-control"
                                                                                              rows="4" cols="50"
                                                                                              required></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary msubmit"
                                                                                        id="close"
                                                                                        data-dismiss="modal">Close
                                                                                </button>
                                                                                <button type="submit"
                                                                                        class="btn btn-primary msubmit">
                                                                                    ارسال
                                                                                </button>
                                                                            </div>
                                                                            <br>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endauth
                                                </div>
                                            </div><br>
                                            @foreach($answers as $answer)
                                                @if($answer->parent_id == $comment->id)
                                                    <div class="col-md-6 offset-md-5 col-12 answer_text">
                                                        <div class="reviews_meta">
                                                            <p><strong>{{$answer->name}}</strong>- September 12, 2018
                                                            </p>
                                                            <span class="cm">{{$answer->text}}</span>
                                                        </div>
                                                    </div><br>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @else
                                        <p>برای این محصول هیچ نظری ثبت نشده</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

<!--product area start-->

<section class="product_area mb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>محصولات مشابه</h2>
                </div>
                <div class="tab-content">
                    @if(isset($products[0]))
                    <div class="tab-pane fade show active" id="automobiles" role="tabpanel">
                        <div class="product_carousel product_column5 owl-carousel" >
                                @foreach($products as $product)
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                               href="/single/{{$product->id}}/{{$product->slack}}"><img
                                                    src="http://127.0.0.1:8000/productimage/{{$product->productimage}}"
                                                    alt="error"></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="/single/{{$product->id}}/{{$product->slack}}"
                                                                            title="افزودن به علاقه مندی ها"><i
                                                                class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="/single/{{$product->id}}/{{$product->slack}}" title="مقایسه"><i
                                                                class="icon-repeat"></i></a></li>
                                                    <li class="quick_button"><a href="/single/{{$product->id}}/{{$product->slack}}" data-toggle="modal"
                                                                                data-target="#modal_box" title="مشاهده">
                                                            <i
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
                                                <p class="current_price1">تومان</p>
                                                <p class="current_price1"> {{$product->price}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    @else
                        <p style="text-align: right"> محصول مشابهی وجود ندارد </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--product area end-->

<!--footer area start-->
@include('footer')
<!--footer area end-->


<!-- modal area start-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ورود به اکانت</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row justify-content-center">
                        <div style="text-align: right" class="col-md-10">
                            <label for="email" class="col-form-label">: ایمیل </label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus
                                   oninvalid="this.setCustomValidity('پر کردن این فیلد اجباری است')"
                                   oninput="setCustomValidity('')">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                         <strong>این کاربر وجود ندارد</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div style="text-align: right" class="col-md-10">
                            <label for="password" class="col-form-label">: رمز عبور </label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password"
                                   oninvalid="this.setCustomValidity('پر کردن این فیلد اجباری است')"
                                   oninput="setCustomValidity('')">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                         <strong>این کاربر وجود ندارد</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                            <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block;">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
                            @endif
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary msubmit" data-dismiss="modal">بستن</button>
                        <button type="submit" class="btn btn-primary msubmit">
                            {{ __('ورود') }}
                        </button>
                    </div>
                    <br>

                    <div style="text-align: center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                                {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                            </a>
                        @endif<br>
                        <a class="signin" href="{{route('register')}}"> ثبت نام در سایت&nbsp;</a>
                        <p class="member">کاربر جدید هستید؟ &nbsp; </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->

<!-- JS
============================================ -->
<!--jquery min js-->
<script  src="{{asset('assets/js/vendor/jquery-3.4.1.min.js')}}" type ="text/javascript"></script>
<!--popper min js-->
<script  src="{{asset('assets/js/popper.js')}}" type ="text/javascript"></script>
<!--bootstrap min js-->
<script  src="{{asset('assets/js/bootstrap.min.js')}}" type ="text/javascript"></script>
<!--owl carousel min js-->
<script  src="{{asset('assets/js/owl.carousel.min.js')}}" type ="text/javascript"></script>
<!--slick min js-->
<script  src="{{asset('assets/js/slick.min.js')}}" type ="text/javascript"></script>
<!--magnific popup min js-->
<script  src="{{asset('assets/js/jquery.magnific-popup.min.js')}}" type ="text/javascript"></script>
<!--jquery countdown min js-->
<script  src="{{asset('assets/js/jquery.countdown.js')}}" type ="text/javascript"></script>
<!--jquery ui min js-->
<script  src="{{asset('assets/js/jquery.ui.js')}}" type ="text/javascript"></script>
<!--jquery elevatezoom min js-->
<script  src="{{asset('assets/js/jquery.elevatezoom.js')}}" type ="text/javascript"></script>
<!--isotope packaged min js-->
<script  src="{{asset('assets/js/isotope.pkgd.min.js')}}" type ="text/javascript"></script>
<!--slinky menu js-->
<script  src="{{asset('assets/js/slinky.menu.js')}}" type ="text/javascript"></script>
<!-- Plugins JS -->
<script  src="{{asset('assets/js/plugins.js')}}" type ="text/javascript"></script>

<!-- Main JS -->
<script  src="{{asset('assets/js/main.js')}}" type ="text/javascript"></script>


</body>

</html>
