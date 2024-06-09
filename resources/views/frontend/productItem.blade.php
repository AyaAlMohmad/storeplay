@extends('layouts.frontend.app')
@section('content')
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('images/product/'.$product->image) }}" width="85%">
        </div>
        <div class="col-2">
            <p>{{ $product->subCategory->category->name }}/ {{ $product->subCategory->name }}</p>
            <h1>{{ $product->name }} </h1>
            <h4>${{ $product->price }}</h4>
            <h3>Type:{{ $product->type }}</h3>
            <form action="{{ route('user.favoritstore') }}" method="post">
            @csrf
            <input type="number" value="1" name="amount">
            <input type="hidden" value="{{ $product->id }}" name="product_id">
            <button type="submit" class="btn">Add To Cart</button>
        </form>
            <h3>Product Details</h3>
            <p>{{$product->description}}</p>
        </div>
    </div>
</div>





<div class="small-container">
    <div class="row">
        @foreach ($categoryProduct as $item)
        <div class="col-4">
         <a href="{{ route('product.show',$item->id) }}"> <img src="{{ asset('images/product/'.$item->image) }}">
            <h4>{{ $item->name }}</h4>
         
            <p>${{ $item->price }}</p></a>  
        </div>    
        @endforeach
       
       
    </div>
</div>
@endsection
