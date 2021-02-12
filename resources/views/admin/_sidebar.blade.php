<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    @if(Auth::user()->profile_photo_path)
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="img-xs rounded-circle" alt="profile image">
                    @endif
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    @auth
                        <a href="{{route("adminhome")}}" class="d-block">{{\Illuminate\Support\Facades\Auth::user()-> name  }}</a>
                        <a href="{{route('logout')}}">Logout</a>

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
                <span class="menu-title">Places</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_faq')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Faqs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_setting')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Setting</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_comment')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Comments</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_users')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Users</span>
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
