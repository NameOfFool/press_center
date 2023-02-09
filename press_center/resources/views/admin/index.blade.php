@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            <h3>{{__("Category")}}:</h3>
            <ul id="tree1">

                @foreach($categories as $category)
                    <li>
                        <label for="parent_id"> {{ $category->name }}</label><br>
                    </li>
                    @if(count($category->childs))
                        @include('admin.categories.sub_category',['childs' => $category->childs])
                    @endif
                @endforeach
            </ul>
            @if ($errors->has('parent_id'))
                <span class="text-red" role="alert">
                           <strong>{{ $errors->first('parent_id') }}</strong>
                           </span>
            @endif
        </div>
            <a href="{{route("category.create")}}" class="btn btn-primary">Создать</a>
    </div>
    <script type="module">
        $.fn.extend({
            treed: function (o) {

                var openedClass = 'glyphicon-minus-sign';
                var closedClass = 'glyphicon-plus-sign';

                if (typeof o != 'undefined'){
                    if (typeof o.openedClass != 'undefined'){
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined'){
                        closedClass = o.closedClass;
                    }
                };

                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function(){
                    $(this).on('click', function () {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
    </script>
@endsection
