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
        <div class="card-header">
            <h3 class="card-title">Category List</h3>
            <a class="btn btn-primary btn-fw" href="{{route('admin_category_add')}}">Add Category</a>

        </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Parent</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>
                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                            </td>
                            <td>{{ $rs->title }}</td>

                            <td>{{ $rs->status}}</td>
                            <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"  >Edit</a></td>
                            <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('are you sure?')" >Delete</a></td>
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


