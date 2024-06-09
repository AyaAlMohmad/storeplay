@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('socials.update', $item->id) }}">
        @csrf
        @method('put')
        <div class="widget-main">
            {{-- <ul class="nav nav-tabs" id="myTab2">
                @foreach (config('app.languages') as $locale => $lang)
                    <li class="{{ $lang == 'German' ? 'active' : '' }}">
                        <a data-toggle="tab" href="#{{ $locale }}">{{ $lang}}</a>
                    </li>
                @endforeach
            </ul> --}}
            <div class="tab-content padding-4">


                @include('dashboard.components.title')
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
                    <label class="col-sm-2 control-label no-padding-right" for="link">
                        link
                    </label>
                    <div class="col-sm-4">
                        <input class="col-xs-10 col-sm-5" type="text" placeholder="" name="link"
                            value="{{ isset($item) != null ? $item->link : old('link') }}">
                        @error('link')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div><br><br>
            </div>
            {{-- @endforeach --}}
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
