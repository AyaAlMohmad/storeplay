@extends('layouts.frontend.app')
@section('content')

<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
      
          
        <select onchange="window.location.href = this.value;">
            <option value="{{route('product.index',$categories->first()->category->id)  }}">ALL</option>
            @foreach ($categories as $category)
                <option value="{{ route('category.product', $category->id) }}">{{ $category->name }}</option>
            @endforeach
        </select>
        

    </div>

    <div class="row">
        @foreach ($allProducts as $product)
        <div class="col-4">
          <a href="{{ route('product.show',$product->id) }}"> <img src="{{ asset('images/product/'.$product->image) }}" onclick="detail()">
            <h4>{{ $product->name }}</h4>
           
            <p>${{ $product->price }}</p></a> 
        </div> 
        @endforeach
     
    </div>
    
</div>
@endsection