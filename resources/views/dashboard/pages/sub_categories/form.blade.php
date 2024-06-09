@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('sub_categories.store') }}">
        @csrf
        <div class="widget-main">

            <div class="tab-content padding-4">

                @include('dashboard.components.name')
                <div class="form-group">
                    <label class="col-xs-10 col-sm-3 control-label no-padding-right"  for="category_id">
                       Category
                    </label>
               
                    <select name="category_id" id="category_id">
                        <option value=" ">Select ..
                        </option>
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>

        </div><br><br>
@include('dashboard.components.image')
        <div class="form-group">
         
            <button type="submit" class="btn btn-app btn-grey btn-xs radius-4"><i class="ace-icon fa fa-floppy-o bigger-160"></i>save</button>
       
    </div>


        </div>
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
