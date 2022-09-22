@extends('layouts.app')

@section('style')
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
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}" >

    <link href="{{ asset('css/show.css') }}" rel="stylesheet" >
    <style>
        table{
            margin-top: 0;
        }
        .right:before{
            content: '';
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!--shopping cart area start -->
            <div class="shopping_cart_area mt-32">
                <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc">
                                    <div class="cart_page table-responsive">
                                        @if(isset($name[0]))
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th class="product_remove">حذف</th>
                                                    <th class="product_thumb">عکس</th>
                                                    <th class="product-price">قیمت</th>
                                                    <th class="product_name">نام محصول</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($name as $names)
                                                    <tr>
                                                        <td class="product_remove">
                                                            <form method="post" action="{{route('deletecart')}}">
                                                                @csrf
                                                                <input type="hidden" value="{{$names->id}}"
                                                                       name="proid">
                                                                <button class="deletecart" type="submit"><i
                                                                        style="font-size: 25px;color: red"
                                                                        class="fa fa-trash-o"></i></button>
                                                            </form>
                                                        </td>
                                                        <td class="product_thumb"><a href="#"><img
                                                                    src="productimage/{{$names->productimage}}"
                                                                    width="98px" height="98px" alt=""></a></td>
                                                        <td class="product-price">{{$names->price}}</td>
                                                        <td class="product_name"><a href="#">{{$names->productname}}</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area start-->
                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="coupon_code right">
                                        <h3>اعلانات</h3>
                                        <div class="coupon_inner">
                                            @foreach($suggests as $suggest)
                                            <div class="cart_subtotal">
                                                <p class="cart_amount">{{$suggest}}</p>
                                                <p>: محصولی برای تبادل وجود دارد. لینک محصول </p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="coupon_code right">
                                        <h3>مجموع</h3>
                                        <div class="coupon_inner">
                                            @foreach($name as $names)
                                                <div class="cart_subtotal">
                                                    <p class="cart_amount">{{$names->price}}</p>
                                                    <p>{{$names->productname}}</p>
                                                </div>
                                            @endforeach

                                            <p class="hr"></p>

                                            <div class="cart_subtotal">
                                                <p class="cart_amount">{{$sum}}</p>
                                                <p>مجموع</p>
                                            </div>
                                            <div class="checkout_btn">
                                                <a class="total" href="#">ارسال فاکتور</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area end-->
                </div>
            </div>
            <!--shopping cart area end -->
        </div>
    </div>
</div>
@endsection
