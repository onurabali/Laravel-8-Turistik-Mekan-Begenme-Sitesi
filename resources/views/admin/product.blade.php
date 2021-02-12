@extends('layouts.admin')

@section('title','Places List')


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
            <h3 class="card-title">Places List</h3>
            <a class="btn btn-primary btn-fw" href="{{route('admin_product_add')}}" type="button" >Add Place</a>

        </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>İmage</th>
                            <th>İmage Gallery</th>
                            <th>Actions</th>



                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                            <td>{{ $rs->title}}</td>
                            <td>{{ $rs->city}}</td>
                            <td>{{ $rs->country}}</td>
                            <td>{{ $rs->location}}</td>
                            <td>{{ $rs->status}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                    @endif
                            </td>
       <td><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <img src="{{asset('assets/admin/images')}}/gallery.png" height="25">
                                </a>
                            </td>

                            <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"  >
                                    <img src="{{asset('assets/admin/images')}}/editicon.png" height="25">
                                </a>
                            <a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('are you sure?')" >
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


