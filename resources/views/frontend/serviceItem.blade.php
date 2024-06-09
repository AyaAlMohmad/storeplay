@extends('layouts.frontend.app')
@section('content')
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('images/service/'.$service->image) }}" width="85%">
        </div>
        <div class="col-2">
       
            <h1>{{ $service->title }} </h1>
       
       
            <h4>Service Details</h4>
            <p>{{$service->description}}</p>
        </div>
    </div>
</div>


@endsection