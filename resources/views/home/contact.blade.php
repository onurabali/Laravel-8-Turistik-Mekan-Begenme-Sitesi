
@extends('layouts.home')

@section('title','Contact '. $setting->title)
@section('description') {{ $setting->description }} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div class="content">
        <div class="container background-white">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>Contact</h2>
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-6 ">
                    <h2>Contact Form</h2>
                    @include('home.message')
                    <form id="checkout-form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <label>Name</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <label>Email
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="email">
                            </div>
                        </div>
                        <label>Phone</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="phone">
                            </div>
                        </div>
                        <label>Subject</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" name="subject">
                            </div>
                        </div>
                        <label>Message</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="6" class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
