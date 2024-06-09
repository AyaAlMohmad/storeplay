@extends('dashboard.layout.dashboard')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
                    <table id="simple-table" class="table table-striped table-bordered
                        table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>

                                <th>
                                    Short_Description
                                </th>
                                <th class="hidden-480">Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($items as $item)
                                <tr>





                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td><img style="width: 90px; height: 90px;"
                                            src="{{ asset('images/about/' . $item->image) }}"></td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td style="word-break: break-all;">{{ $item->description }}</td>
                                    <td style="word-break: break-all;">{{ $item->short_description }}</td>


                                    <td>

                                        @include('dashboard.components.actionDelete')

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.span -->
            </div>
        </div>
    </div>
@endsection
