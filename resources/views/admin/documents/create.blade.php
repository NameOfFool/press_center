@extends("layouts.app")
@section("content")
    <div class="container">
        <form action="{{route("document.create.post")}}" method="post" class="mt-6 space-y-6" id="document" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <x-input-label for="name" class="form-label" :value="__('Name')"/>
                <x-text-input class="form-control" name="name"/>
            </div>
            <div class="mb-3">
                <x-input-label for="file_name" class="form-label" :value="__('Название файла')"/>
                <x-text-input class="form-control" name="file_name"/>
            </div>
            <div class="mb-3">
                <x-input-label for="file" class="form-label select-label" :value="__('PDF Файл')"/>
                <input type="file" class="form-control" name="file" id="file">
            </div>
        </form>
        <form class="modal" action="{{route("document.field")}}" method="post" id="addField">
            @csrf
            <div class="mb-3">
                <x-input-label for="name" class="form-label" :value="__('Название поля')"/>
                <x-text-input class="form-control" name="name"/>
            </div>
            <div class="mb-3">
                <x-input-label for="name" class="form-label" :value="__('Инфромация для автозаполнения')"/>
                <select name="table_field" class="form-select" id="table_field">
                    <option disabled>Инфромация о пользователе</option>
                    @foreach($user_columns as $column)
                        <option value="{!! $column." users" !!}">{!! $column !!}</option>
                    @endforeach
                    <option value="INN i_n_n_s">inn</option>
                    <option disabled>Инфромация об орагнизации</option>
                    @foreach($organisation_columns as $column)
                        <option value="{!! $column." organisations" !!}">{!! $column !!}</option>
                    @endforeach
                    <option value="KPP k_p_p_s">kpp</option>
                </select>
            </div>
            <button type="submit" class="btn btn btn-primary">Сохранить</button>
        </form>
    </div>
    <script type="module">
        $("#file").on("change",function(event){
            let file = event.target.files[0];
            let data = new FormData();
            let fields = {{Js::from($fields)}};
            data.append("file",file);
            data.append("_token",$("input[name='_token']").val())
            $.ajax({
                type:"POST",
                data:data,
                contentType:false,
                processData:false,
                url:"{{route("document.create.load_fields")}}",
                success:function (data){
                    for(let i in data){
                        let input = $(`<div class="mb-3"><label for="root" class="form-label select-label" >`
                            +data[i]["FieldName"]+
                            `</label><select type="text" class="form-select open" name="`
                            +data[i]["FieldName"]+
                            `" id="`+data[i]["FieldName"]
                            +`"><option value="none">Не заполнять</option>
<option value="other" class="option_other">Другое...</option></select></div>`);
                        $("#document").append(input);

                    }
                    for(let field of fields){
                    $("#document select .option_other").before(`<option value="`+field.id+`">`+field.field_name+`</option>`);
                    }
                    $("#document").append('<button id="sub" class="btn btn-primary">Создать</button>');
                    $(".open").on("change",(event)=>{
                        if(event.target.value==="other"){
                            let $modal = $("#addField")
                            $modal.modal("show")
                        }
                    })
                }
            })
        })
    </script>
@endsection
