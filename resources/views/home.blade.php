@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="p-5 rounded" style="background: linear-gradient(135deg, #1a1a2e, #16213e); color: white;">
            <h1 class="display-5 fw-bold">Welcome to ShopZone 🛒</h1>
            <p class="lead">Find the best products at the best prices</p>
        </div>
    </div>
</div>

<!-- Categories -->
<div class="row mb-4">
    <h4 class="mb-3">📦 Categories</h4>
    @foreach($categories as $category)
        <div class="col-md-3 mb-3">
            <div class="card text-center p-3">
                <h6>{{ $category->name }}</h6>
            </div>
        </div>
    @endforeach
</div>

<!-- Products -->
<div class="row">
    <h4 class="mb-3">🔥 Latest Products</h4>
    @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}"
                        class="card-img-top" style="height: 200px; object-fit: cover;">
                @else
                    <div class="bg-secondary text-white text-center p-5">No Image</div>
                @endif
                <div class="card-body">
                    <h6 class="card-title">{{ $product->name }}</h6>
                    <p class="text-danger fw-bold">${{ $product->price }}</p>
                    <span class="badge bg-secondary">{{ $product->category->name }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection