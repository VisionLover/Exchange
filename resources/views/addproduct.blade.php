@extends('layouts.app')

@section('style')
    <style xmlns:v-bind="http://www.w3.org/1999/xhtml">
        .col-md-6 , .card-header{
            text-align: right;
            font-family: IRANSans-web;
        }
        .nav{
            justify-content: flex-end;
            font-family: IRANSans-web;
        }
        input{
            text-align: right;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" xmlns:v-on="http://www.w3.org/1999/xhtml"
          xmlns:v-on="http://www.w3.org/1999/xhtml">
    <link href="{{ asset('css/show.css') }}" rel="stylesheet" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <script src="{{ asset('js/jq.js') }}" defer></script>
    <script src="{{ asset('js/dropzone.js') }}" defer></script>
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/decoupled-document/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#red").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#red-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#pink").click(function () {
                $("#red-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#pink-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#purple").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#red-down").hide();
                $("#purple-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#orange").click(function () {
                $("#pink-down").hide();
                $("#red-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#orange-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#yellow").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#red-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#yellow-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#green").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#red-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#green-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#blue").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#red-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#blue-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#brown").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#red-down").hide();
                $("#white-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#brown-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#white").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#red-down").hide();
                $("#gray-down").hide();
                $("#purple-down").hide();
                $("#white-down").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#gray").click(function () {
                $("#pink-down").hide();
                $("#orange-down").hide();
                $("#yellow-down").hide();
                $("#green-down").hide();
                $("#blue-down").hide();
                $("#brown-down").hide();
                $("#white-down").hide();
                $("#red-down").hide();
                $("#purple-down").hide();
                $("#gray-down").slideToggle();
            });
        });
        $(document).ready(function(){

            const navItems = Array.from(document.getElementsByClassName("btn-primary"));

            navItems.forEach(navItem => {
                navItem.addEventListener("click", onSelect);
            });

            function onSelect(e) {
                setActive(e.target);
            }

            function setActive(element) {
                element.classList.toggle("btn-success")
            }
        });
    </script>
@endsection

@section('content')

        <div class="col-md-8 offset-md-2" style="margin-top: 40px">
            @can('isUser')
                <div class="card">
                    <div class="card-header">اضافه کردن محصول</div>
                    <div class="card-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                   role="tab" aria-controls="nav-profile" aria-selected="false">تصاویر بیشتر برای
                                    محصولات</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">نمایش محصولات من</a>
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                   role="tab" aria-controls="nav-home" aria-selected="true">درج درخواست</a>
                            </div>
                        </nav>
                        <br>
                        <div class="tab-content" id="nav-tabContent" xmlns:v-on="http://www.w3.org/1999/xhtml">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label">قیمت محصول</label>
                                        <input v-model="pprice" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">نام محصول</label>
                                        <input v-model="pname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label"> دسته ی محصول شما</label>
                                        <select v-model="pcat" class="form-control" style="cursor:pointer;text-align: right">
                                            <option :value=cat.name v-for="cat in cats">
                                                @{{cat.name}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">دسته ی محصول دریافتی</label>
                                        <select v-model="pwant" class="form-control" style="cursor:pointer;text-align: right">
                                            <option :value=cat.name v-for="cat in cats">
                                                @{{cat.name}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <form action="/home/image" method="post" class="dropzone" id="myAwesomeDropzone">
                                    {{csrf_field()}}
                                </form>
                                <br>
                                <input type="hidden" id="image">

                                <div id="toolbar-container"></div>
                                <div id="editor"
                                     style="border: 1px solid rgba(0, 0, 0, 0.225);height: 150px;border-top: none">
                                    <p>توضیحات خود را بنویسید</p>
                                </div>
                                <br>

                                <div style="text-align: right">
                                    <p class="colors" id="red">قرمزها</p>
                                    <p class="colors" id="pink">صورتی‌ها</p>
                                    <p class="colors" id="orange">نارنجی‌ها</p>
                                    <p class="colors" id="yellow">زردها</p>
                                    <p class="colors" id="green">سبزها</p>
                                    <p class="colors" id="blue">آبی‌ها</p>
                                    <p class="colors" id="purple">بنفش‌ها</p>
                                    <p class="colors" id="brown">قهوه‌ای‌ها</p>
                                    <p class="colors" id="white">سفیدها</p>
                                    <p class="colors" id="gray">خاکستری‌ها</p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table class="table table-striped" id="red-down" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30" id="red"><big><b>قرمزها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($red as $reds)
                                                <tr>
                                                    <td>{{$reds->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$reds->HEX}}</td>
                                                    <td style="text-align: center;">{{$reds->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$reds->HEX}};"></td>
                                                    <td>
                                                        <button type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$reds->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="pink-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>صورتی‌ها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($pink as $pinks)
                                                <tr>
                                                    <td>{{$pinks->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$pinks->HEX}}</td>
                                                    <td style="text-align: center;">{{$pinks->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$pinks->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$pinks->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="orange-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>نارنجی‌ها<br/>
                                                        </b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($orange as $oranges)
                                                <tr>
                                                    <td>{{$oranges->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$oranges->HEX}}</td>
                                                    <td style="text-align: center;">{{$oranges->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$oranges->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$oranges->id}})">
                                                            select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="yellow-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><b>زردها</b></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($yellow as $yellows)
                                                <tr>
                                                    <td>{{$yellows->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$yellows->HEX}}</td>
                                                    <td style="text-align: center;">{{$yellows->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$yellows->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$yellows->id}})">
                                                            select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="green-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>سبزها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($green as $greens)
                                                <tr>
                                                    <td>{{$greens->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$greens->HEX}}</td>
                                                    <td style="text-align: center;">{{$greens->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$greens->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$greens->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="blue-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>آبی‌ها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($blue as $blues)
                                                <tr>
                                                    <td>{{$blues->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$blues->HEX}}</td>
                                                    <td style="text-align: center;">{{$blues->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$blues->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$blues->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="purple-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>بنفش‌ها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($purple as $purples)
                                                <tr>
                                                    <td>{{$purples->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$purples->HEX}}</td>
                                                    <td style="text-align: center;">{{$purples->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$purples->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$purples->id}})">
                                                            select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="brown-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>قهوه‌ای‌ها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($brown as $browns)
                                                <tr>
                                                    <td>{{$browns->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$browns->HEX}}</td>
                                                    <td style="text-align: center;">{{$browns->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$browns->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$browns->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="white-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>سفیدها<br/>
                                                        </b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($white as $whites)
                                                <tr>
                                                    <td>{{$whites->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$whites->HEX}}</td>
                                                    <td style="text-align: center;">{{$whites->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$whites->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$whites->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="gray-down" class="table table-striped" dir="rtl" border="0"
                                               width="100%" cellspacing="2" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td colspan="5" height="30"><big><b>خاکستری‌ها</b></big></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">نام فارسی</th>
                                                <th dir="ltr" style="text-align: center;"><a data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             class="post-tooltip tooltip-top"
                                                                                             title="#FFFFFF">HEX کد
                                                        رنگ</a></th>
                                                <th style="text-align: center;"><a data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   class="post-tooltip tooltip-top"
                                                                                   title="rgb(255,255,255)">کد رنگ
                                                        RGB</a></th>
                                                <th style="text-align: center;">نمونه رنگ</th>
                                                <th style="text-align: center;">عملیات</th>
                                            </tr>
                                            @foreach($gray as $grays)
                                                <tr>
                                                    <td>{{$grays->name}}</td>
                                                    <td dir="ltr" style="text-align: center;">{{$grays->HEX}}</td>
                                                    <td style="text-align: center;">{{$grays->RGB}}</td>
                                                    <td style="text-align: center; background-color: {{$grays->HEX}};"></td>
                                                    <td>
                                                        <button onclick="selectcolor" type="submit"
                                                                class="btn btn-primary btn1"
                                                                v-on:click.prevent="selectcolor({{$grays->id}})">select
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <div style="text-align: right">
                                    <button type="submit" class="btn btn-success" v-on:click.prevent="addproduct">add
                                        product
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="myTable" class="table table-striped" width="100%">
                                            <thead>
                                            <tr>
                                                <td class="bold">id</td>
                                                <td class="bold">name</td>
                                                <td class="bold">price</td>
                                                <td class="bold">action</td>
                                            </tr>
                                            </thead>

                                            <tr v-for="product in products">
                                                <td>@{{product.id}}</td>
                                                <td>@{{product.productname}}</td>
                                                <td>@{{product.price}}</td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn1"
                                                            v-on:click.prevent="moreimage(product.id)"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal" :data-whatever="product.id">
                                                        select
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="myTable1" class="table table-striped" width="100%">
                                            <thead>
                                            <tr>
                                                <td class="bold1">id</td>
                                                <td class="bold1">name</td>
                                                <td class="bold1">count</td>
                                                <td class="bold1">price</td>
                                                <td class="bold1">action</td>
                                            </tr>
                                            </thead>

                                            <tr v-for="product in products">
                                                <td>@{{product.id}}</td>
                                                <td>@{{product.productname}}</td>
                                                <td>
                                                    <button v-if="product.count == 0"
                                                            v-on:click.prevent="updatecount(product.id)" type="submit"
                                                            class="type"><i class="fas fa-times"
                                                                            style="color: #8a0014;cursor: pointer"></i>
                                                    </button>
                                                    <button v-if="product.count == 1"
                                                            v-on:click.prevent="updatecount(product.id)" class="type1">
                                                        <i class="fas fa-check"
                                                           style="color: #2c8a2f;cursor: pointer"></i></button>
                                                </td>
                                                <td>@{{product.price}}</td>
                                                <td>
                                                    <button type="submit" data-toggle="modal"
                                                            data-target="#exampleModal2" :data-whatever="product.id"
                                                            class="btn btn-primary btn1"
                                                    >update
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endcan
            @can('isAdmin')
                <div class="card">
                    <div class="card-header">تایید محصولات</div>
                    <div class="card-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                   role="tab" aria-controls="nav-home" aria-selected="true">تایید محصولات</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">تایید تصاویر</a>
                            </div>
                        </nav>
                        <br>
                        <div class="tab-content" id="nav-tabContent" xmlns:v-on="http://www.w3.org/1999/xhtml">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="myTable" class="table table-striped" width="100%">
                                            <thead>
                                            <tr>
                                                <td class="bold">id</td>
                                                <td class="bold">name</td>
                                                <td class="bold">price</td>
                                                <td class="bold">description</td>
                                                <td class="bold">productimage</td>
                                                <td class="bold">state</td>
                                                <td class="bold">action</td>
                                            </tr>
                                            </thead>

                                            <tr v-for="product in products">
                                                <td>@{{product.id}}</td>
                                                <td>@{{product.productname}}</td>
                                                <td>@{{product.price}}</td>
                                                <td>@{{product.description}}</td>
                                                <td><img v-bind:src="'http://127.0.0.1:8000/productimage/' + product.productimage" height="50px" width="50px" alt="error"></td>
                                                <td>
                                                    <button v-if="product.status == 0" v-on:click.prevent="updateproducts(product.id)" type="submit" class="type"><i class="fas fa-times" style="color: #8a0014;cursor: pointer"></i></button>
                                                    <button v-if="product.status == 1" v-on:click.prevent="updateproducts(product.id)" class="type1"><i class="fas fa-check" style="color: #2c8a2f;cursor: pointer"></i></button>

                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger btn1" v-on:click.prevent="deletepro(product.id)">Delete</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 table-responsive">
                                        <table id="myTable" class="table table-striped" width="100%">
                                            <thead>
                                            <tr>
                                                <td class="bold">id</td>
                                                <td class="bold">name</td>
                                                <td class="bold">price</td>
                                                <td class="bold">description</td>
                                                <td class="bold">productimage</td>
                                                <td class="bold">state</td>
                                                <td class="bold">action</td>
                                            </tr>
                                            </thead>

                                            <template v-for="product in images">
                                                <tr v-for="images in product.images">
                                                    <td>@{{product.id}}</td>
                                                    <td>@{{product.productname}}</td>
                                                    <td>@{{product.price}}</td>
                                                    <td>@{{product.description}}</td>
                                                    <td><img v-bind:src="'http://127.0.0.1:8000/productimage/' + images.image" height="50px" width="50px" alt="error"></td>
                                                    <td>
                                                        <button v-if="images.status == 0" v-on:click.prevent="updateimages(images.id)" type="submit" class="type"><i class="fas fa-times" style="color: #8a0014;cursor: pointer"></i></button>
                                                        <button v-if="images.status == 1" v-on:click.prevent="updateimages(images.id)" class="type1"><i class="fas fa-check" style="color: #2c8a2f;cursor: pointer"></i></button>

                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-danger btn1" v-on:click.prevent="deleteimg(images.id)">Delete</button>
                                                    </td>
                                                </tr>
                                            </template>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endcan
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">product id:</label>
                        <input disabled type="text" class="form-control" id="recipient-name1">
                    </div>

                    <form action="/home/image1" method="post" class="dropzone" id="myAwesomeDropzone">
                        {{csrf_field()}}
                        <input type="hidden" id="moreimage" name="proid">
                    </form>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" xmlns:v-on="http://www.w3.org/1999/xhtml">
                        <form method="POST" action="{{ route('updateproduct') }}">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">product id:</label>
                                <input disabled type="text" class="form-control" id="recipient-name10">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">product price:</label>
                                <input type="text" v-model="upn" class="form-control">
                            </div>

                            <div class="modal-footer" >
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" data-dismiss="modal"
                                        v-on:click.prevent="updateproduct()">update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection

