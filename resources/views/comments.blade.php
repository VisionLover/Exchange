@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font.awesome.css')}}">
@endsection
@section('content')
<div class="row justify-content-center" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <div class="col-md-8 table-responsive">
        <table id="myTable" class="table table-striped" width="100%">
            <thead>
            <tr>
                <td class="bold">id</td>
                <td class="bold">name</td>
                <td class="bold">p_id</td>
                <td class="bold">text</td>
                <td class="bold">product_id</td>
                <td class="bold">time</td>
                <td class="bold">status</td>
                <td class="bold">action</td>
            </tr>
            </thead>

            <tr v-for="comment in comments">
                <td>@{{comment.id}}</td>
                <td>@{{comment.name}}</td>
                <td>@{{comment.parent_id}}</td>
                <td>@{{comment.text}}</td>
                <td>@{{comment.product_id}}</td>
                <td>@{{comment.created_at}}</td>
                <td>
                    <button v-if="comment.status == 0" v-on:click.prevent="updatecomments(comment.id)" type="submit" class="type"><i class="fas fa-times" style="color: #8a0014;cursor: pointer"></i></button>
                    <button v-if="comment.status == 1" v-on:click.prevent="updatecomments(comment.id)" class="type1"><i class="fas fa-check" style="color: #2c8a2f;cursor: pointer"></i></button>

                    </td>
                <td>
                    <button type="submit" class="btn btn-danger btn1" v-on:click.prevent="deletecomment(comment.id)">Delete</button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
