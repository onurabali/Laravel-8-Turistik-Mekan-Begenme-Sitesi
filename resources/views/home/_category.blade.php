@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist()
@endphp

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="category-nav @if (!isset($page)) show-on-click @endif">
                    <ul class="list-group sidebar-nav" id="sidebar-nav">
                        <!-- Typography -->
                        @foreach($parentCategories as $rs)
                            <li class="list-group-item list-toggle">
                                <a class="accordion-toggle collapsed" data-toggle="collapse"
                                   href="#collapse-typography">{{$rs->title}}</a>

                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                @endif

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
