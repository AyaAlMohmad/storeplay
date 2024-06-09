@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('services.update', $item->id) }}">
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
                @include('dashboard.components.description')
                @include('dashboard.components.short_description')
            </div>
            {{-- @endforeach --}}
        </div><br><br>


        @include('dashboard.components.image')


        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-app btn-grey btn-xs radius-4"><i class="ace-icon fa fa-floppy-o bigger-160"></i>save</button>
            </div>
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
