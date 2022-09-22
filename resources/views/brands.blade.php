@extends('layouts.app')

@section('style')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="{{ asset('js/jq.js') }}" defer></script>
    <script src="{{ asset('js/dropzone.js') }}" defer></script>
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="col-md-8 offset-md-2" style="margin-top: 40px">
        <div class="card">
            <div class="card-header">add or delete brands</div>
            <div class="card-body">

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab" aria-controls="nav-home" aria-selected="true">add brands</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab" aria-controls="nav-profile" aria-selected="false">delete brands</a>
                    </div>
                </nav>
                <br>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="container" xmlns="http://www.w3.org/1999/html" id="app"
                             xmlns:v-on="http://www.w3.org/1999/xhtml">
                            <div class="row justify-content-center">
                                <div class="col-md-9 col-12">
                                    <div class="card">
                                        <div class="card-header">add brand</div>
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label class="col-form-label">brand name</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control"
                                                               v-model="NameBrand"><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label class="col-form-label">brand country</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control"
                                                               v-model="CountryBrand"><br>
                                                    </div>
                                                </div>
                                                <form action="/home/image" method="post" class="dropzone" id="myAwesomeDropzone">
                                                    {{csrf_field()}}
                                                </form>
                                                <br>
                                                <input type="hidden" id="image">

                                                <div style="text-align: right">
                                                    <button type="submit" class="btn btn-success" v-on:click.prevent="AddBrands">add</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container" xmlns="http://www.w3.org/1999/html" id="app"
                             xmlns:v-on="http://www.w3.org/1999/xhtml">
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-header">delete brand</div>

                                        <div class="card-body">
                                            <form method="post" action="{{route('deletebrands')}}"
                                                  @submit.prevent="DeleteBrand">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label class="col-form-label">brand name</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select v-model="del" class="form-control"
                                                                style="cursor:pointer">
                                                            <option :value=brand.name v-for="brand in brands">
                                                                @{{brand.name}}
                                                            </option>
                                                        </select><br>
                                                    </div>
                                                </div>
                                                <div style="text-align: right">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        ...
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
