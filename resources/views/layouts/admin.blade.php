<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 20px 0;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: 0.3s;
        }
        .sidebar a:hover { background-color: #e94560; }
        .sidebar .brand {
            color: #e94560;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            border-bottom: 1px solid #ffffff20;
            margin-bottom: 10px;
        }
        .main-content { padding: 30px; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-0">
            <div class="brand">⚙️ Admin</div>
            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home me-2"></i> Dashboard</a>
            <a href="{{ route('admin.categories.index') }}"><i class="fas fa-list me-2"></i> Categories</a>
            <a href="{{ route('admin.products.index') }}"><i class="fas fa-box me-2"></i> Products</a>
            <a href="{{ route('home') }}"><i class="fas fa-store me-2"></i> View Store</a>
            <form action="{{ route('logout') }}" method="POST" class="p-3">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 main-content">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>