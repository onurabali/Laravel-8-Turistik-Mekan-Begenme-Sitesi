<link href="favicon.ico" rel="shortcut icon">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets') }}/css/nexus.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css" rel="stylesheet">
<!-- Google Fonts-->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
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
                <h3>Edit Message</h3>
                <div class="card">
                    @include('home.message')
                    <div class="card-body">


                        <form role="form" action="{{route('admin_comment_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <table class="table">

                                    <tr>
                                        <th>İd</th> <td>{{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td> {{ $data->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>title</th> <td>{{ $data->product->title}}</td>
                                    </tr>
                                    <tr><th>subject</th> <td>{{ $data->subject}}</td>
                                    </tr>

                                    <tr>
                                        <th>comment</th> <td>{{ $data->comment}}</td>
                                    </tr>
                                    <tr>
                                        <th>rate</th> <td>{{ $data->rate}}</td>
                                    </tr>
                                    <tr>
                                        <th>İp</th> <td>{{ $data->IP}}</td>
                                    </tr>
                                    <tr>
                                        <th>create time</th> <td>{{ $data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>update time</th> <td>{{ $data->updated_at}}</td>
                                    </tr>
                                    <th>Status</th>
                                    <td>
                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </td>

                                    <tr>
                                        <th><button type="submit" class="btn btn-success mr-2">Update Comment</button>

                                    </tr>




                        </form>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
            </div>
        </div>
    </div>
    </body>



