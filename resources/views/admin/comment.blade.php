@extends('layouts.admin')

@section('title','Comments List')


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
            <h3 class="card-title">Comment List</h3>
           @include('home.message')

        </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>name</th>
                            <th>Subject</th>
                            <th>Comment</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)

                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>
                                    <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        {{$rs->user->name}}
                                    </a>

                                </td>
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
                               <td><a href="{{route('admin_comment_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        <img src="{{asset('assets/admin/images')}}/gallery.png" height="25">
                                <td>
                                    <a href="{{route('admin_comment_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete you sure?')">
                                        <img src="{{asset('assets/admin/images')}}/deleteicon.png" height="25">
                                    </a>
                                </td>
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


