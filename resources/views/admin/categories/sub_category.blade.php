<ul>
    @foreach($childs as $child)
        <li>
            @if(isset($use_id)&&$use_id)
                <button class="add_category" data-category-id="{{$child->id}}">{{$child->name}}</button>
            @else
                <a href="{{route("admin.news",['id' =>$child->id])}}">{{ $child->name }}</a>
            @endif
            @if(count($child->childs))
                @include('admin.categories.sub_category',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
