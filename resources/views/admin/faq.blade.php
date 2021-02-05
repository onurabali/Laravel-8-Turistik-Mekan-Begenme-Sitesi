@extends('layouts.admin')

@section('title','Faq List')


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
        <h3 class="card-title">Faqs List</h3>
        <a class="btn btn-primary btn-fw" href="{{route('admin_faq_add')}}" type="button">Add Faq</a>
        @include('home.message')

    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>İd</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Status</th>
                    <th>Actions</th>


                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)

                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->question}}</td>
                        <td>{!! $rs->answer !!}</td>
                        <td>{{ $rs->status}}</td>
                        <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}">
                                <img src="{{asset('assets/admin/images')}}/editicon.png" height="25">
                            </a>
                            <a href="{{route('admin_faq_delete',['id'=>$rs->id])}}"
                               onclick="return confirm('are you sure?')">
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


