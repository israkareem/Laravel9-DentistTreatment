<ul class="mybg">
@foreach($children as $rs )
    <li class="mybg">
        @if(count($rs->children))
                @include('home.categorytree',['children'=>$rs->children])
        @else
            <a href="{{route('categorytreatments',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
        @endif
    </li>
@endforeach
</ul>
