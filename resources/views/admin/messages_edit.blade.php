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


                        <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <table class="table">

                                    <tr>
                                        <th>İd</th> <td>{{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{ $data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th> <td>{{ $data->email}}</td>
                                    </tr>
                                    <tr><th>Phone</th> <td>{{ $data->phone}}</td>
                                    </tr>

                                    <tr>
                                        <th>Subject</th> <td>{{ $data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th> <td>{{ $data->message}}</td>
                                    </tr>
                                    <tr>
                                        <th>İp</th> <td>{{ $data->ip}}</td>
                                    </tr>
                                    <th>Admin Note</th>
                                    <td>
                                        <textarea id="note" name="note">{{$data->note}}</textarea>
                                    </td>
                                    <tr>
                                        <th><button type="submit" class="btn btn-success mr-2">Update Message</button>

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



