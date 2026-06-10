@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<h2 class="mb-4">📊 Dashboard</h2>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card text-white" style="background: linear-gradient(135deg, #e94560, #c23152);">
            <div class="card-body text-center p-4">
                <i class="fas fa-box fa-3x mb-3"></i>
                <h2>{{ $totalProducts }}</h2>
                <h5>Total Products</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white" style="background: linear-gradient(135deg, #1a1a2e, #16213e);">
            <div class="card-body text-center p-4">
                <i class="fas fa-list fa-3x mb-3"></i>
                <h2>{{ $totalCategories }}</h2>
                <h5>Total Categories</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white" style="background: linear-gradient(135deg, #0f3460, #533483);">
            <div class="card-body text-center p-4">
                <i class="fas fa-users fa-3x mb-3"></i>
                <h2>{{ $totalUsers }}</h2>
                <h5>Total Users</h5>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5>Quick Actions</h5>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary me-2">
                    <i class="fas fa-plus me-1"></i> Add Category
                </a>
                <a href="{{ route('admin.products.create') }}" class="btn btn-success">
                    <i class="fas fa-plus me-1"></i> Add Product
                </a>
            </div>
        </div>
    </div>
</div>
@endsection