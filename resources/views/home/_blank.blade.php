
@extends('layouts.home')

@section('title', $setting->title)
@section('description') {{ $setting->description }} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">User Profile </li>
            </ul>
        </div>
    </div>
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-12 margin-top-30">
                            <pre><code>&lt;div class="panel panel-red-style"&gt;
                                        &lt;div class="panel-heading"&gt;
                                            &lt;h3 class="panel-title"&gt;&lt;i class="fa fa-angle-double-right"&gt;&lt;/i&gt; Panel Header Text&lt;/h3&gt;
                                        &lt;/div&gt;
                                        &lt;div class="panel-body"&gt;
                                            &lt;h4&gt;Lorem Ipsum&lt;/h4&gt;
                                            &lt;p&gt;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.&lt;/p&gt;
                                        &lt;/div&gt;
                                        &lt;/div&gt;</code></pre>
            </div>
        </div>
    </div>
</div>
@endsection
