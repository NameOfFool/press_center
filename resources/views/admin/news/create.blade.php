@extends('layouts.app')
@section('content')
    <x-rich-text-laravel::core-styles/>
    <form action="{{route("news.create-post")}}" method="post" class="card">
        @csrf
        <div class="card-header">Новость</div>
        @if(isset($news))
            <input type="hidden" value="{{$news->id}}" name="id">
        @endif
        <div class="card-body">
            <div class="form-outline">
                <input type="text" name="name" class="form-control" value="{{isset($news)?$news->name:""}}">
                <label for="name" class="form-label">Название</label>
            </div>
            <div class="form-outline mt-4 mb-4">
                @if(isset($news))
                    <x-trix-field name="news_content" value="{!!base64_decode($news->content)!!}" class="form-textarea"
                                  id="content"/>
                @else
                    <x-trix-field name="news_content" class="form-textarea"
                                  id="content"/>
                @endif
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline datetimepicker-inline">
                        <input type="datetime-local" id="publication"
                               value="{{isset($news)?$news->date_of_publication:now()}}" class="form-control"
                               name="date_of_publication"/>
                        <label class="form-label">Дата публикации</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline datetimepicker-inline">
                        <input type="datetime-local" id="drop"
                               value="{{isset($news)?$news->date_of_drop:"5000-01-01 00:00"}}" class="form-control"
                               name="date_of_drop"/>
                        <label class="form-label">Дата удаления</label>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered mb-3" id="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Категория</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @if(isset($current))
                        <td>{{$current->id}}</td>
                        <td>{{$current->name}}</td>
                    @else
                        @foreach($categories as $category)
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        @endforeach
                    @endif
                </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-around">
                <button class="btn btn-secondary" id="add_category">Добавить привязку</button>
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
            <div id="modal" class="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-content">
                    <div class="modal-header">Выберите категорию</div>
                    <div class="modal-body">
                        @include("admin.categories.tree",["use_id"=>true])
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="module" src="{{asset('tree.js')}}"></script>
    <script type="module">
        function initializeDatepicker() {
            var dialog = new mdDateTimePicker({
                type: 'date',
                future: moment().add(21, 'years')
            });

            var fields = document.querySelectorAll('input[type="datetime"]');
            Array.prototype.forEach.call(fields, (field) => {
                field.addEventListener('onOk', function () {
                    field.value = x.time().toString();
                });
                field.addEventListener('click', function () {
                    dialog.toggle();
                });
            });
        }

        let table = $("#table").DataTable({
            paging: false,
            searching: false,
            info: false,
            ordering: false
        });
        $("form").submit(function (event) {
            let categories = table.column(0).data().toArray();
            $(this).append("<input name='cats' id='cats' type='hidden'>")
            $("#cats").val(categories.join(" "))
        })

        $("#add_category").on('click', function (event) {
            event.preventDefault()
            $("#modal").modal("show")
            $(".add_category").each(function () {
                $(this).on("click", function (event) {
                    event.preventDefault();
                    $.modal.close()
                    let idArr = table.column(0).data().toArray()
                    idArr.forEach(function (value, index, array) {
                        array[index] = Number(value)
                    })
                    let id = $(this).data("categoryId")
                    if (jQuery.inArray(id, idArr) !== -1) {
                        alert("Эта категория уже выбрана")
                    } else {
                        table.row.add([$(this).data("categoryId"), $(this).html()]).draw(false);
                    }
                })
            })
        })
    </script>

@endsection
