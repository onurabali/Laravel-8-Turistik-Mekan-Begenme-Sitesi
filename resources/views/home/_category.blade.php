
@php
     $parentCategories=\App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="col-md-2">
<div class="category-nav @if (!isset($page)) show-on-click @endif">
    <ul class="list-group sidebar-nav" id="sidebar-nav">
        <!-- Typography -->
        @foreach($parentCategories as $rs)
        <li class="list-group-item list-toggle">
            <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">{{$rs->title}}</a>

                @if(count($rs->children))
                    @include('home.categorytree',['children'=>$rs->children])
                @endif

        </li>
        @endforeach
    </ul>
</div>

</div>
