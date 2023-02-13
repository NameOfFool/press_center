@push('')

@endpush
@extends('layouts.app')
@section('content')
    <x-rich-text-laravel::core-styles/>
    <div class="card">
        <div class="card-header">Новость</div>
        <form action="" class="card-body">
            <div class="form-outline">
                <input type="text" class="form-control">
                <label for="" class="form-label">Название</label>
            </div>
            <div class="form-outline mt-4 mb-4">
                <x-rich-text-laravel::trix-field name="content" class="form-textarea" id="content"/>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" value="{{now()}}" class="form-control datepicker"
                               name="date_of_publication"/>
                        <label class="form-label">Дата публикации</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" value="01.01.5000 00:00" id="date" class="form-control datepicker"
                               name="date_of_publication"/>
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
                    <td>{{$current->id}}</td>
                    <td>{{$current->name}}</td>
                </tr>
                </tbody>
            </table>
            <button class="btn btn-primary" id="add_category">Добавить привязку</button>
            <div id="modal" class="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-content">
                    <div class="modal-header">Выберите категорию</div>
                    <div class="modal-body">
                        @include("admin.categories.tree",["use_id"=>true])
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="module" src="{{asset('tree.js')}}"></script>
    <script type="module">
        let table = $("#table");
        table.dataTable({
            paging:false,
            searching:false,
            info:false,
            ordering:false
        });
        $(".datepicker").datepicker({
            format: "dd.mm.yyyy "
        });
        $(function () {
            $(".datepicker").on("keyup", function (event) {
                var value = $(this).val();
            })
        })
        $("#add_category").on('click',function(event){
            event.preventDefault()
            $("#modal").modal('show')
        })
        $(".add_category").each(function(){
            $(this).on("click",function(event){
                event.preventDefault();
                table.row.add($(this).dataset.category_id);
            })
        })
    </script>

@endsection
