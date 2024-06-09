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
                            <th >Description</th>

                            <th>
                                Short_Description
                            </th>
                           
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
                                src="{{ asset('images/about/' . $item->image) }}"></td>
                            <td>
                               {{$item->title}}
                            </td>
                            <td style="word-break: break-all;">{{ $item->description }}</td>
                            <td style="word-break: break-all;">{{ $item->short_description }}</td>
                          

                           
                          
                        </tr>
                      
                    </tbody>
                </table>
            </div>
            <!-- /.span -->
        </div>
    </div>
</div>

@endsection
