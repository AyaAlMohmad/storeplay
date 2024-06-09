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
                                <th>Name</th>



                            </tr>
                        </thead>

                        <tbody>

                            <tr>





                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><img style="width: 90px; height: 90px;"
                                    src="{{ asset('images/sub_category/' . $item->image) }}"></td>
                                <td>
                                    {{ $item->name }}
                                </td>



                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.span -->
            </div>
        </div>
    </div>
@endsection
