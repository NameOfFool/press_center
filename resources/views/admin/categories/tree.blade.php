<ul id="tree1">
    @foreach($categories as $category)
        <li>
            @if(isset($use_id)&&$use_id)
                <button class="add_category" data-category_id="{{$category->id}}">{{$category->name}}</button>
            @else
                <a href="{{route("admin.news",['id' =>$category->id])}}">{{ $category->name }}</a>
            @endif
            @if(count($category->childs))
                @include('admin.categories.sub_category',['childs' => $category->child])
            @endif
        </li>
    @endforeach
</ul>
