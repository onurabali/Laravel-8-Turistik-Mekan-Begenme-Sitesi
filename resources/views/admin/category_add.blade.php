@extends('layouts.admin')

@section('title','Category List')


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
                <h3>Add Category</h3>
                <div class="card">
                    <div class="card-body">

                        <p class="card-description"> Category Add Form </p>
                        <form role="form" action="{{route('admin_category_create')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label >Parent</label>
                                <select class="form-control form-control-lg" name="parent_id" >
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($datalist as $rs)
                                    <option value="{{ $rs->id}}">{{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" class="form-control" placeholder="Enter Keywords">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label >İmage</label>
                                <input type="text" name="image" class="form-control" placeholder="Enter İmage">
                            </div>
                            <div class="form-group">
                                <label >Status</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Add Category</button>
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


