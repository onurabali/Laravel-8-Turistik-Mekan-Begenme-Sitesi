@extends('layouts.admin')

@section('title','Edit Product')


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
                <h3>Edit Product</h3>
                <div class="card">
                    <div class="card-body">

                        <p class="card-description"> Product Edit Form </p>
                        <form role="form" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control form-control-lg" name="category_id" >

                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" placeholder="Enter Keywords">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" class="form-control" value="{{$data->description}}" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label >İmage</label>
                                <input type="file" name="image" class="form-control" >
                                @if($data->image)
                                    <img src="{{Storage::url($data->image)}}" height="60" alt="">
                                @endif
                            </div>


                            <div class="form-group">
                                <label >Status</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option selected="selected">value="{{$data->status}}"</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Detail</label>
                                <input type="text" name="detail" value="{{$data->detail}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >City</label>
                                <input type="text" name="city" value="{{$data->city}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Country</label>
                                <input type="text" name="country" value="{{$data->country}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label >Location</label>
                                <input type="text" name="location" value="{{$data->location}}" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Update product</button>
                            <button class="btn btn-light">Cancel</button>

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


