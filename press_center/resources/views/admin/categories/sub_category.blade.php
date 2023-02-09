<ul>
    @foreach($childs as $child)
        <li>
            <label for="vehicle1"> {{ $child->name }}</label>
            @if(count($child->childs))
                @include('admin.categories.sub_child_category',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
