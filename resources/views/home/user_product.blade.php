@extends('layouts.home')

@section('title', 'User Places')


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">User Places</li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div id="aside" class="col-md-2">
                        @include('home.usermenu')
                    </div>
                    <div class="card-header col-md-10">
                        <h3 class="card-title">Places List</h3>
                        <a class="btn btn-primary btn-fw" href="{{route('user_product_add')}}" type="button" >Add Product</a>
@include('home.message')
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
                                        <td><a href="{{route('user_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <img src="{{asset('assets/admin/images')}}/gallery.png" height="25">
                                            </a>
                                        </td>

                                        <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}"  >
                                                <img src="{{asset('assets/admin/images')}}/editicon.png" height="25">
                                            </a>
                                            <a href="{{route('user_product_delete',['id'=>$rs->id])}}" onclick="return confirm('are you sure?')" >
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
                </div>
            </div>
        </div>
    </div>
@endsection
