@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('categories.store') }}">
        @csrf
        <div class="widget-main">

            <div class="tab-content padding-4">

                @include('dashboard.components.name')

          



            <div class="form-group">
                <div class="col-sm-4">
                <button type="submit" class="btn btn-app btn-grey btn-xs radius-4"><i
                        class="ace-icon fa fa-floppy-o bigger-160"></i>save</button>
                </div>
            </div>
        </div>
        </div><br><br>

    </form>



    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#previewImage").attr("src", reader.result);
                }
                reader.readAsDataURL(file);


            }
        }
    </script>
@endsection
