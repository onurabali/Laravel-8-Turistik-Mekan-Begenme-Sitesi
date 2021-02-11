@extends('layouts.admin')

@section('title','Edit User')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

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
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h3>Edit User</h3>
                <div class="card">
                    <div class="card-body">

                        <p class="card-description"> User Edit Form </p>
                        <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{$data->address}}">
                            </div>
                            <div class="form-group">
                                <label>İmage</label>
                                <input type="file" name="image" class="form-control">
                                @if($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="60"
                                         style="border-radius: 10px" alt="">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Update</button>

                        </form>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
            </div>
        </div>
    </div>
    </body>
@endsection
@section('footer')
@endsection


