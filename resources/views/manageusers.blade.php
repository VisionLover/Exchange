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
                           role="tab" aria-controls="nav-home" aria-selected="true">show users</a>
                    </div>
                </nav>
                <br>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container" xmlns="http://www.w3.org/1999/html" id="app"
                             xmlns:v-on="http://www.w3.org/1999/xhtml">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <table id="myTable" class="table table-striped" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="bold">id</td>
                                            <td class="bold">name</td>
                                            <td class="bold">email</td>
                                            <td class="bold">phone</td>
                                            <td class="bold">type</td>
                                            <td class="bold">created at</td>
                                        </tr>
                                        </thead>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->type}}</td>
                                                <td>{{$user->created_at}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
