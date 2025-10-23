@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="product-card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h5>{{ $product->name }}</h5>
                <p>{{ Str::limit($product->description, 50) }}</p>
                <p><strong>${{ $product->price }}</strong></p>
                <a href="#" class="btn btn-primary btn-sm">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
