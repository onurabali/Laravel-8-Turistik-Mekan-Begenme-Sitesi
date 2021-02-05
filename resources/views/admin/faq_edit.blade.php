@extends('layouts.admin')

@section('title','Edit Product')
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
                <h3>Edit Faq</h3>
                <div class="card">
                    <div class="card-body">

                        <p class="card-description"> Faq Edit Form </p>
                        <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label >Question</label>
                                <input type="text" name="question" class="form-control" value="{{$data->question}}">
                            </div>


                            <div class="form-group">
                                <label >Answer</label>
                                <textarea id="answer" name="answer" >{{$data->answer}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
                            </div>

                            <div class="form-group">
                                <label >Status</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option selected="selected">value="{{$data->status}}"</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-success mr-2">Update Faq</button>
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


