
@extends('layouts.home')

@section('title','About Us '. $setting->title)
@section('description') {{ $setting->description }} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12 margin-top-30">
                    <h2>About Us</h2>
                       {!! $setting->aboutus !!}
                </div>
            </div>
        </div>
    </div>
@endsection
