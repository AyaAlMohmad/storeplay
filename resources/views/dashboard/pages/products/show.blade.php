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
                                <th>Description</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Sub category</th>
                             <th>Resolve</th>
    
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
                                    src="{{ asset('images/product/' . $item->image) }}"></td>
                             <td>
                                   {{$item->name}}
                                </td>
                                <td>
                                    {{$item->description}}
                                 </td>
                                 <td>
                                    {{$item->type}}
                                 </td>
                                 <td>
                                    {{$item->price}}
                                 </td>
                                 <td>
                                    {{$item->subCategory->name}}
                                 </td>
                                 <td>{{ $item->resolve }}%</td>
                              
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.span -->
            </div>
        </div>
    </div>
@endsection
