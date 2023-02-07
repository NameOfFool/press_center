<ul>
    @foreach($childs as $child)
        <li>
            <input type="radio"  id="{{ $child->id }}" name="parent_id" value="{{ $child->id }}">
            <label for="vehicle1"> {{ $child->name }}</label><br>
            @if(count($child->childs))
                @include('admin.categories.sub_child_category',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
