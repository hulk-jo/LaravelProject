@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>✏️ Edit Product</h2>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Back
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Price ($)</label>
                    <input type="number" name="price" class="form-control"
                        value="{{ old('price', $product->price) }}" step="0.01" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control"
                        value="{{ old('stock', $product->stock) }}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control"
                        rows="3">{{ old('description', $product->description) }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Product Image</label>
                    @if($product->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $product->image) }}"
                                width="100" height="100" style="object-fit: cover; border-radius: 5px;">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Update Product
            </button>
        </form>
    </div>
</div>
@endsection