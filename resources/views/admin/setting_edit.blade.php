@extends('layouts.admin')

@section('title','Edit Setting')


@section('content')
    <body>
    <section class="content-header">
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-6 col-12 p-0 fixed-top d-flex flex-row">

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
                <h3>Edit Setting</h3>
                <div class="card">
                    <div class="card-body">

                        <p class="card-description"> Setting Edit Form </p>
                        <form role="form" action="{{route('admin_setting_update')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <input type="text" id="id" name="id"  value="{{$data->id}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" class="form-control" value="{{$data->description}}">
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
                                <label >Company</label>
                                <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label >Fax</label>
                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Smtpserver</label>
                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Smtpemail</label>
                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Smtppassword</label>
                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Smtpport</label>
                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Facebook</label>
                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >İnstagram</label>
                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Twitter</label>
                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >References</label>
                                <textarea id="references" name="references" >{{$data->references}}</textarea>
                            </div>
                            <div class="form-group">
                                <label >About Us</label>
                                <textarea id="aboutus" name="aboutus" >{{$data->aboutus}}</textarea>
                            </div>
                            <div class="form-group">
                                <label >Contact</label>
                                <textarea id="contact" name="contact" >{{$data->contact}}</textarea>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('#references').summernote();
                                    $('#aboutus').summernote();
                                    $('#contact').summernote();
                                });
                            </script>



                            <button type="submit" class="btn btn-success mr-2">Update Setting</button>
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


