@extends('layouts.home')

@section('title', 'Add User Place')
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Add Place</li>
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
                    <div id="aside" class="col-md-10">
                        <form role="form" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control form-control-lg" name="category_id" >

                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" class="form-control" placeholder="Enter Keywords">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter Description">
                            </div>

                            <div class="form-group">
                                <label >İmage</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Status</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Detail</label>
                                <textarea id="detail" name="detail" ></textarea>
                                <script>
                                    CKEDITOR.replace('detail');
                                </script>
                            </div>
                            <div class="form-group">
                                <label >City</label>
                                <input type="text" name="city" class="form-control" >
                            </div><div class="form-group">
                                <label >Country</label>
                                <input type="text" name="country" class="form-control" >
                            </div><div class="form-group">
                                <label >Location</label>
                                <input type="text" name="location" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Add product</button>


                        </form>
                    </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
