@extends('layouts.frontend.app')
@section('content')
    <div class="home-page">
        <div class="containerr">
            <div class="left-section">
                <h1>Give Your Workout <br>A New Style!</h1>

                <p class="description">Success isn't always about greatness.
                    It's about consistency. Consistent <br>hard work gains success. Greatness will come.</p>
                <a href="{{ route('about') }}"><button>About Us</button></a>
            </div>
        </div>

    </div>
    <!------ lastes  categories ------->
    <div class="cards-container containerr">
        @if (isset($lastesProduct))
            @foreach ($lastesProduct as $product)
                <div class="card">
                    <a href="{{ route('product.show', $product->id) }}" class="card-link">
                        <img src="{{ asset('images/product/' . $product->image) }}" alt="Image" class="card-image">
                        <div class="card-content">
                            <h3 class="company-name">
                                {{ $product->subCategory->category->name }} ->{{ $product->subCategory->name }}   -><span>{{ $product->name }}</span>
                            </h3>
                            <p class="price">${{ $product->price }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif

    </div>
    {{-- category product --}}
    <div class="border-h1">
        <h1 class="title">Category Products</h1>
    </div>
    <div class="carousel-inner">
    <div class="slider">
     
        @if (isset($categories))
            @foreach ($categories as $category)
                <div class="slide ">
                   
                        <div class="card">
                            <a href="{{ route('category.product', $category->id) }}" class="card-link">
                                <img src="{{ asset('images/sub_category/' . $category->image) }}" alt="Image"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $category->category->name }}</h6>
                                    <p>
                                     {{ $category->name }}
                                    </p>
                                </div>
                            </a>
                        </div>
                   
                </div>
            @endforeach
        @endif
    </div>
    </div>
    <!------ resolve products ------->
    <div class="company">
        <div class=" containerr">

            <div class="border-h1">
                <h1 class="title">Discounts on products</h1>
            </div>
            <div id="productCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $currentCompanyProductsCount = 0;
                        $slideCount = 0;
                    @endphp
                    @foreach ($resolveProducts as $key => $resolve)
                        @if ($currentCompanyProductsCount === 0)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="card-deck">
                        @endif

                        <div class="card">
                            <a href="{{ route('product.show', $resolve->id) }}">
                                <img class="card-img-top" src="{{ asset('images/product/' . $resolve->image) }}"
                                    alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resolve->name }}</h5>
                                    <p>{{ $resolve->resolve }}% <span>from {{ $resolve->price }}$</span></p>
                                </div>
                            </a>
                        </div>

                        @php
                            $currentCompanyProductsCount++;
                            if ($currentCompanyProductsCount === 3 || $key === count($resolveProducts) - 1) {
                                // Close the card-deck and start a new slide
                                $currentCompanyProductsCount = 0;
                                echo '</div></div>';
                                $slideCount++;
                            }
                        @endphp
                    @endforeach
                </div>

                <!-- Indicators/dots -->
                <ol class="carousel-indicators">
                    @for ($i = 0; $i < $slideCount; $i++)
                        <li data-target="#productCarousel" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </ol>
            </div>



        </div>
    </div>

    <!-- ---------offer---------- -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                @if (isset($orderlastes))
                    <div class="col-2">
                        <img src="{{ asset('images/product/' . $orderlastes->product->image) }}" class="offer-img">
                    </div>
                    <div class="col-2">
                        <h2>{{ $orderlastes->product->name }}</h2>
                        <p>{{ $orderlastes->product->description }}</p>


                        <div class="containerr offer-button">
                            <br><a href="{{ route('product.show', $orderlastes->product->id) }}"><button>Buy
                                    Now</button></a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- ------------order products----------------- -->
    <div class="small-container">
        <h2 class="title">Latest requested products</h2>
        <div class="row">
            @if (isset($orders))
                @foreach ($orders as $order)
                    <div class="col-4">
                        <a href="{{ route('product.show', $order->product->id) }}"> <img
                                src="{{ asset('images/product/' . $order->product->image) }}" onclick="detail()">
                            <h4>{{ $order->product->name }}</h4>

                            <p>${{ $order->product->price }}</p>
                        </a>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
