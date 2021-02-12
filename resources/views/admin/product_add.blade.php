@extends('layouts.admin')

@section('title','Add Place')
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
                <h3>Add Place</h3>
                <div class="card">
                    <div class="card-body">

                        <p class="card-description"> Place Add Form </p>
                        <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control form-control-lg" name="category_id" >

                                    @foreach($datalist as $rs)
                                    <option value="{{ $rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
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
                        <input type="file" name="image" class="form-control">
                    </div>
                            <div class="form-group">
                                <label >Status</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Detail</label>
                                <textarea id="editor1" name="detail" ></textarea>
                                <script>
                                    CKEDITOR.replace( 'editor1' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label >City</label>
                                <input type="text" name="city" class="form-control" >
                            </div><div class="form-group">
                                <label >Country</label>
                                <input type="text" name="country" class="form-control" >
                            </div><div class="form-group">
                                <label >Location</label>
                                <input type="text" name="location" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Add product</button>


                        </form>
                    </div>
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


