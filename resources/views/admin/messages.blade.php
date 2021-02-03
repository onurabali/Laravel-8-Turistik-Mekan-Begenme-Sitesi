@extends('layouts.admin')

@section('title','Contact Messages List')


@section('content')
    <body>
    <section class="content-header">
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

            <div class="navbar-menu-wrapper d-flex align-items-center">

            </div>
        </nav>
    </section>
        <!-- partial -->
        <div class="card-header">
            <h3 class="card-title">Messages List</h3>

        @include('home.message')
        </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>İp</th>
                            <th>AdminNote</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->name}}</td>
                            <td>{{ $rs->email}}</td>
                            <td>{{ $rs->phone}}</td>
                            <td>{{ $rs->subject}}</td>
                            <td>{{ $rs->message}}</td>
                            <td>{{ $rs->ip}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->status}}</td>

       <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=700,height=600')">
                                    <img src="{{asset('assets/admin/images')}}/editicon.png" height="25">
                                </a>
                            </td>
                         <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('are you sure?')" >
                                    <img src="{{asset('assets/admin/images')}}/deleteicon.png" height="25">
                                </a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
            </div>
        </div>

    </body>
@endsection
@section('footer')
@endsection


