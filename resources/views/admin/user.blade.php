@extends('layouts.admin')

@section('title','Users List')


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
            <h3 class="card-title">Users List</h3>
            @include('home.message')


        </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Roles</th>
                            <th>Actions</th>



                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>

                            <td>
                                @if($rs->profile_photo_path)
                                    <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px">
                            @endif
                            </td>

                            <td>
                                <a style="color: cornflowerblue;" href="{{ route('admin_user_show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                    {{ $rs->name }}
                                </a>
                            </td>
                            <td>{{ $rs->email}}</td>
                            <td>{{ $rs->phone}}</td>
                            <td>{{ $rs->address}}</td>
                            <td>
                                @foreach($rs->roles as $row)
                                    {{$row->name}},
                                @endforeach
                                    <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa-play"></i>
                                        </button>
                                    </a>
                            </td>

                            <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"  >
                                    <img src="{{asset('assets/admin/images')}}/editicon.png" height="25">
                                </a>
                            <a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('are you sure?')" >
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


