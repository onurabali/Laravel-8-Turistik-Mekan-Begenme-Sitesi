@extends('layouts.admin')

@section('title','Category List')


@section('content')
    <body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

            <div class="navbar-menu-wrapper d-flex align-items-center">

            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Title</th>
                            <th>Parent</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs  )
                            <p></p>
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->title }}</td>
                            <td>{{ $rs->parent_id}}</td>
                            <td>{{ $rs->status}}</td>
                            <td>{{ $rs->status}}</td>
                            <td>{{ $rs->status}}</td>


                        </tr>
                        @endforeach
                        </tbody>
                    </table>


                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
            </div>
        </div>
    </div>
    </body>
@endsection
@section('footer')
@endsection


