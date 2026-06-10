@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>➕ Add Category</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Back
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"
                    rows="3">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Save Category
            </button>
        </form>
    </div>
</div>
@endsection@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>➕ Add Category</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Back
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"
                    rows="3">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Save Category
            </button>
        </form>
    </div>
</div>
@endsection