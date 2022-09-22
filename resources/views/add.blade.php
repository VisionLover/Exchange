@extends('layouts.app')

@section('style')
    <script src="{{ asset('js/jq.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
@endsection

@section('content')

        <div class="col-md-8 offset-md-2" style="margin-top: 40px">
            <div class="card">
                <div class="card-header">add or delete category</div>
                <div class="card-body">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                               role="tab" aria-controls="nav-home" aria-selected="true">add category</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                               role="tab" aria-controls="nav-profile" aria-selected="false">delete category</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                               role="tab" aria-controls="nav-profile" aria-selected="false">show category</a>
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
                                            <div class="card-header">add category</div>

                                            <div class="card-body">
                                                <form method="post" action="{{route('add')}}"
                                                      @submit.prevent="AddCategory">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label class="col-form-label">category name</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control"
                                                                   v-model="NameCat"><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label class="col-form-label">category parent_id</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select v-model="parent" class="form-control"
                                                                    style="cursor:pointer">
                                                                <option value=0>دسته ی اصلی</option>
                                                                <option :value=item.id v-for="item in items">
                                                                    @{{item.name}}
                                                                </option>
                                                            </select><br>
                                                        </div>
                                                    </div>

                                                    <div style="text-align: right">
                                                        <button type="submit" class="btn btn-success">add</button>
                                                    </div>
                                                </form>
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
                                            <div class="card-header">delete category</div>

                                            <div class="card-body">
                                                <form method="post" action="{{route('delete')}}"
                                                      @submit.prevent="DeleteCat">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label class="col-form-label">category name</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select v-model="del" class="form-control"
                                                                    style="cursor:pointer">
                                                                <option :value=item.name v-for="item in items">
                                                                    @{{item.name}}
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
                            <div class="container" xmlns="http://www.w3.org/1999/html" id="app"
                                 xmlns:v-on="http://www.w3.org/1999/xhtml">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <table id="myTable" class="table table-striped" width="100%">
                                            <thead>
                                            <tr>
                                                <td class="bold">id</td>
                                                <td class="bold">name</td>
                                                <td class="bold">p_id</td>
                                                <td class="bold">action</td>
                                            </tr>
                                            </thead>

                                            <tr v-for="item in items">
                                                <td>@{{item.id}}</td>
                                                <td>@{{item.name}}</td>
                                                <td>@{{item.parent_id}}</td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger btn1" v-on:click.prevent="deletecat1(item.id)">Delete</button>
                                                    <button type="submit" class="btn btn-primary btn1" data-toggle="modal" data-target="#exampleModal" :data-whatever="item.id">Update</button>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('update')}}">
                                                            <div class="form-group" >
                                                                <label for="recipient-name" class="col-form-label">category id:</label>
                                                                <input disabled type="text" class="form-control" id="recipient-name1" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">category name:</label>
                                                                <input type="text" class="form-control" id="recipient-name" v-model="upn">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click.prevent="update">update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@endsection
