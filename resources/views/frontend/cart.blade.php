@extends('layouts.frontend.app')
@section('content')
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <!-- التحقق من وجود طلبات -->
            @if (count($favorites))
                @foreach ($favorites as $index => $item)
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="{{ asset('images/product/' . $item->product->image) }}">
                            <div>
                                <p>{{ $item->product->name }}</p>
                                <small>Price: ${{ $item->product->price }}</small>
                                <br>
                                <form method="POST" action="{{ route('product.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button  >Remove</button>
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>{{ $item->amount }}</td>
                    <td>${{ $item->product->price * $item->amount }}</td>
                    @php
                        $subtotals[$index] = $item->product->price * $item->amount;
                    @endphp
                    </tr>
                @endforeach
            @else
                <!-- عرض رسالة عند عدم وجود طلبات -->
                <tr>
                    <td colspan="3">No items in cart.</td>
                </tr>
            @endif
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>@php
                        // جمع subtotals
                        if (!empty($subtotals)) {
                            $total = array_sum($subtotals);
                            echo $total;
                        } else {
                            echo '0';
                        }
                    @endphp</td>
                </tr>
            </table>
        </div>
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            @foreach ($favorites as $item)
                <input type="hidden" name="product_id[]" value="{{ $item->product_id }}">
                <input type="hidden" name="amount" value="{{ $item->amount }}">

                <input type="hidden" name="price_total" value="{{ $item->product->price * $item->amount }}">
            @endforeach
            <button type="submit" class="btn-buy">buy</button>
        </form>
    </div>
    
@endsection
