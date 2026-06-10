@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>✏️ Edit Category</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Back
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ old('name', $category->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"
                    rows="3">{{ old('description', $category->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Update Category
            </button>
        </form>
    </div>
</div>
@endsection