@extends('layouts.home')

@section('title', 'Edit User Place')
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Edit Place</li>
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
                        <form role="form" action="{{route('user_product_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control form-control-lg" name="category_id" >

                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" placeholder="Enter Keywords">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" class="form-control" value="{{$data->description}}" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label >İmage</label>
                                <input type="file" name="image" class="form-control" >
                                @if($data->image)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" height="60" alt="">
                                @endif
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
                                <label >Detail</label>
                                <input type="text" id="detail" name="detail"  value="{{$data->detail}}" class="form-control">
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label >City</label>
                                <input type="text" name="city" value="{{$data->city}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Country</label>
                                <input type="text" name="country" value="{{$data->country}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label >Location</label>
                                <input type="text" name="location" value="{{$data->location}}" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Update product</button>
                            <button class="btn btn-light">Cancel</button>

                        </form>
                    </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
