@extends('layouts.frontend.app')

@section('content')
<div class="component">
    <div class="container">
        <div class="header-component">
            <div class="head-border">
                <i class="fa-solid fa-wrench"></i>
            </div>
            <h2>Service</h2>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="box-wrapper">
            @php
                $servicesArray = $services->toArray();
                $servicesArray = array_values($servicesArray);
                foreach ($servicesArray as $key => $service) {
                    $service['id'] = $key;
                    $servicesArray[$key] = $service;
                }
            @endphp
            <div class="row">
            @foreach ($services->chunk(2) as $group)
                
                    <!-- Display each pair of services in one row -->
                    @foreach ($group as $index => $service)
                        <div class="col">
                            <div class="box box1">
                                <h3 class="section-header">
                                    <a href="{{ route('service.show', $service->id) }}" style="color: white">{{ $service->title }}</a>
                                </h3>
                                <div class="section-img">
                                    <a href="{{ route('service.show', $service->id) }}">
                                        <img src="{{ asset('images/service/'. $service->image) }}" alt="img">
                                    </a>
                                </div>
                                <div class="section-footer">
                                    <a href="{{ route('service.show', $service->id) }}">for more click here</a>
                                </div>
                            </div>
                        </div>
                        @if ($index < count($group) - 1) <!-- Check if this is not the last item in the group -->
                            <!-- Add a divider between items if they are not the last pair -->
                            <div class="col-divider"></div>
                        @endif
                    @endforeach
               
            @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
