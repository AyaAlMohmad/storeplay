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
                            <th >type</th>

                            <th>
                                link
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
                                src="{{ asset('images/social/' . $item->image) }}"></td>
                            <td>
                               {{$item->title}}
                            </td>
                            <td  >{{ $item->type }}</td>
                            <td  style="word-break: break-all;">{{ $item->link }}</td>
                          

                           
                          
                        </tr>
                      
                    </tbody>
                </table>
            </div>
            <!-- /.span -->
        </div>
    </div>
</div>

@endsection
