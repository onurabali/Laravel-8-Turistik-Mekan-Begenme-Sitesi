@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<header>
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href={{route("home")}} title="">
                        <img src="{{ asset('assets') }}/img/logo.png" alt="Logo"/>
                    </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- Top Menu -->
    <div id="hornav" class="container no-padding">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="text-center visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="{{route('home')}}" class="fa-home">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="fa-copy">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('faq')}}" class="fa-copy">Faq</a>
                        </li>
                        <li>
                            <a href="{{route('references')}}" class="fa-copy">References</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}" class="fa-copy">Contact</a>
                        </li>

                        <div class="pull-right">
                            <li class="header-account dropdown default-dropdown">
                                @auth
                                    <div class="dropdown-toggle" role="button" data-toggle="dropdown"
                                         aria-expanded="true">
                                        <div class="header-btns-icon">
                                            <i class="fa fa-user-0"></i>
                                        </div>
                                        <strong class="text-uppercase">{{Auth::user()->name}} <i
                                                class="fa fa-caret-down"></i></strong>
                                    </div>
                                @endauth
                                @guest
                                    <a href="/login" class="uppercase">Login</a>/<a href="register" class="uppercase">Join</a>
                                @endguest
                                <ul class="custom-menu">
                                    <li><a href="{{route('myprofile')}}">My Account</a></li>
                                    <li><a href="{{route('mycomments')}} ">My Comments</a></li>
                                    <li><a href="{{route('user_products')}}">Myplaces</a></li>
                                    <li><a href="{{route('logout')}} ">Logout</a></li>


                                </ul>

                            </li>

                        </div>

                    </ul>
                    <div class="header-search">
                        <form action="{{route('getproduct')}}" method="post">
                            @csrf
                            @livewire('search')
                            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                        @livewireScripts
                        @section('footerjs')
                            @livewireScripts
                        @endsection

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->

    <div id="content-top-border" class="container">
    </div>
    <!-- === END HEADER === -->
</header>

