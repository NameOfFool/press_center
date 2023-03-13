@extends('layouts.app')
<meta name="_token" content="{{csrf_token()}}">
<style>
    img {
        display: block;
        max-width: 100%;
    }
    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

    .modal-lg {
        max-width: 1000px !important;
    }
    .modal{
        max-width:100% !important;
    }
</style>
@section('content')
    <div class="container mt-5">
        <div class="card">
            <h2 class="card-header">Выберите изображение</h2>
            <div class="card-body">
                <h5 class="card-title">{{__("Please Selete Image For Cropping")}}</h5>
                <input type="file" name="image" class="image">
            </div>
        </div>
    </div>
    <div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Выделите фрагмент</h5>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img  id="image">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" rel="modal:close" class="btn" data-dismiss="modal">Отмена</a>
                    <button type="button" class="btn btn-primary" id="crop">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        let $modal = $('#modal');
        let image = document.getElementById('image');
        let cropper;
        $("body").on("change", ".image", function (e) {
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview: '.preview'
                });
            };
            let reader;
            let file;
            let url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                viewMode: 0,
                preview: '.preview',
                modal:true
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });
        $("#crop").click(function () {
            let canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });
            canvas.toBlob(function (blob) {
                var url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "upload",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                        success: function (data) {
                            console.log(data);
                            $modal.modal('hide');
                            alert("Crop image successfully uploaded");
                            document.location="/"
                        },
                        error: function (jqxhr, status, errorMessage) {
                            console.log(errorMessage)
                        }
                    });
                }
            });
        })
    </script>
@endsection
