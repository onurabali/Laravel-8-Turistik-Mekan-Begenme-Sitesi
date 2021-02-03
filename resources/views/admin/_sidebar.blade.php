<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset('assets')}}/admin/assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="info">
                    @auth
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                        <a href="{{route('logout')}}" class="d-block">Logout</a>
                    @endauth
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('adminhome')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_category')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_products')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_setting')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Setting</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">HomePage</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_message')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Contact Messages</span>
            </a>
        </li>

    </ul>
</nav>
