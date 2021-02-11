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
<title>{{$data->name}}</title>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card-header">
                <h3 class="card-title">User Detail</h3>
                @include('home.message')


            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th rowspan="6" align="center" valign="center">
                            <td>
                                @if($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="150" style="border-radius: 10px">
                                @endif
                            </td>
                            </th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Date Sing in</th>
                            <td>{{$data->created_at}}</td>
                        </tr>

                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                                   onclick="return confirm('Are you sure?')">
                                                    <img src="{{asset('assets/admin/images')}}/deleteicon.png" height="25">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                </form>
                            </td>
                        </tr>


                    </table>


                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                </div>
            </div>
    </div>
</div>
</body>



