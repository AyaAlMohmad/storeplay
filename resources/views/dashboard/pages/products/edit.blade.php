@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('products.update', $item->id) }}">
        @csrf
        @method('put')
        <div class="widget-main">
       
            <div class="tab-content padding-4">


                @include('dashboard.components.name')
                @include('dashboard.components.description')
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="price">
                        price
                    </label>
                    <div class="col-sm-4">
                        <input class="col-xs-10 col-sm-5" type="text" placeholder="" name="price"
                            value="{{ isset($item) != null ? $item->price : old('price') }}">
                        @error('price')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="resolve">
                        Resolve
                    </label>
                    <div class="col-sm-4">
                        <input class="col-xs-10 col-sm-5" type="text" placeholder="" name="resolve"
                            value="{{ isset($item) != null ? $item->resolve : old('resolve') }}">
                        @error('resolve')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="type">
                        type
                    </label>
                    <div class="col-sm-4">
                        <input class="col-xs-10 col-sm-5" type="text" placeholder="" name="type"
                            value="{{ isset($item) != null ? $item->type : old('type') }}">
                        @error('type')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div><br><br>
                <div class="form-group">
                    
                
                    <label class="col-xs-10 col-sm-3 control-label no-padding-right"  for="sub_category_id">
                        Sub Category
                    </label>
                    <select  name="sub_category_id" id="sub_category_id">
                        <option value="{{ $item->sub_category_id }}">{{ $item->subcategory->category->name }}
                            => {{ $item->subcategory->name }} ..
                        </option>
                        @foreach ($items as $data)
                            <option value="{{ $data->id }}">{{ $data->category->name }} => {{ $data->name }}
                            </option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>
        </div><br><br>

@include('dashboard.components.image')


        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-app btn-grey btn-xs radius-4"><i
                    class="ace-icon fa fa-floppy-o bigger-160"></i>save</button>

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
