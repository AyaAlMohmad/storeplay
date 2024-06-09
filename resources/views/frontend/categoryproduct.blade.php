@extends('layouts.frontend.app')
@section('content')

<div class="small-container">
    <div class="row row-2">
        <h2> {{ $category->name }}</h2>
      
          
        <select onchange="window.location.href = this.value;">
            <option value="{{ route('category.product', $category->id) }}"
                >
            {{ $category->name }}
        </option>
            @foreach ($categories as $item)
          @if ($item->name===$category->name)
              @continue
          @endif
                <option value="{{ route('category.product', $item->id) }}"
                        >
                    {{ $item->name }}
                </option>
            @endforeach
            <option value="{{ route('product.index', $categories->first()->category->id) }}">ALL</option>

        </select>
        
        

    </div>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-4">
          <a href="{{ route('product.show',$product->id) }}"> <img src="{{ asset('images/product/'.$product->image) }}" onclick="detail()">
            <h4>{{ $product->name }}</h4>
           
            <p>${{ $product->price }}</p></a> 
        </div> 
        @endforeach
     
    </div>
    
</div>
@endsection