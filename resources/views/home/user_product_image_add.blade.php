<html>
<head>
    <title>İmage Gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/shared/style.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/demo_1/style.css">

    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/favicon.ico" />
</head>



    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h3>İmage Gallery</h3>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product:{{$data->title}}</h3>
                    </div>
                    <div class="card-body">


                        <p class="card-description">İmage Add Form </p>
                        <form role="form" action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label >İmage</label>
                                <input type="file" name="image" class="form-control">
                            </div>




                            <button type="submit" class="btn btn-success mr-2">Add image</button>
                            <button class="btn btn-light">Cancel</button>

                        </form>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>İd</th>
                                <th>Title</th>
                                <th>İmage</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="50" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Record will be deleted?')" >
                                            <img src="{{asset('assets/admin/images')}}/deleteicon.png" height="25">
                                        </a></td>
                                </tr>


                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
            </div>
        </div>
    </div>
    </body>

</html>


