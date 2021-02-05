@extends('layouts.home')

@section('title', 'User Profile')


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">User Profile</li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div id="aside" class="col-md-2">
                        @include('home.usermenu')
                    </div>
                    <div id="aside" class="col-md-10">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ıd</th>
                                <th>Place</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        <a href="{{route('product',['id'=>$rs->product->id,'city'=>$rs->product->city])}}"
                                           target="_blank">
                                            {{$rs->product->title}}</a>
                                        </a>
                                    </td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin_comment_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete you sure?')">
                                            <img src="{{asset('assets/admin/images')}}/deleteicon.png" height="25">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
