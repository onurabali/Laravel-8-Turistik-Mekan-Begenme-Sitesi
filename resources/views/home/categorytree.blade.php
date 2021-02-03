@foreach($children as $subcategory)
    <ul class="list-group sidebar-nav" id="sidebar-nav">
        @if(count($subcategory->children))
            <li class="list-group-item list-toggle">{{$subcategory->title}}</li>
            <ul id="collapse-typography" class="collapse" style="height: 0px;">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'keywords'=>$subcategory->title])}}">{{$subcategory->title}} </a> </li>
        @endif
    </ul>
@endforeach
