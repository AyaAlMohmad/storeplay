@extends('dashboard.layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <div class="tab-content padding-4">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user</th>
                                    <th>mobile</th>
                                    <th>email</th>
                                    <th>product</th>
                                    <th>image</th>
                                    <th> price</th>
                                    <th>amount</th>
                                    <th>total price</th>
                                    <th>actions</th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($items as $data)
                                    <tr>
                                        <td>

                                            {{ $data->user->name }}



                                        </td>

                                        <td><a href="tel:{{ $data->user->phone }}">{{ $data->user->phone }}</a> </td>
                                        <td>
                                            <a href='mailto: {{ $data->user->email }}'>{{ $data->user->email }}</a>
                                        </td>
                                        <td>


                                            {{ $data->product->name }}
                                        </td>
                                       
                                        <td><img style="width: 90px; height: 90px;"
                                                src="{{ asset('images/product/' . $data->product->image) }}">
                                        </td>
                                        <td>{{ $data->product->price }}</td>
                                        <td>


                                            {{ $data->amount }}


                                        </td>
                                        <td>{{ $data->price_total }}</td>
                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group" style="display:flex;">
                                                <button class="btn btn-xs btn-info " title="sent email">
                                                    <a href="{{ route('orders.sent', $data->id) }}"
                                                        style="color: inherit!important;">
                                                        <i class="ace-icon   fa fa-envelope bigger-120"></i></a>
                                                </button>
                                                <form method="POST"
                                                    action="{{ route($module_name . '.destroy', $data->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-xs btn-danger" title="Delete">

                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div> <!-- end col -->
        </div>
    </div>
    </div>

    <!-- end row -->
@endsection
