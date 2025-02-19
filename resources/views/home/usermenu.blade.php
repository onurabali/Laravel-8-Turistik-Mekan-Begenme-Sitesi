
@auth
<div class="aside">
    <h3 class="aside-title">User Panel</h3>
    <ul class="list-links">
        <li><a href="{{route('myprofile')}}">My Profile</a></li>
        <li><a href="{{route('user_products')}}">My Places</a></li>
        <li><a href="{{route('mycomments')}}">My Comments</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
        @php
        $userRoles=Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('adminhome')}}" target="_blank">Admin Panel</a></li>
            @endif
    </ul>
</div>
@endauth
