<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Product Management')
    </title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            color: #1f2937;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar {
            background: #111827;
            padding: 16px 0;
            margin-bottom: 30px;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-link {
            margin-left: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-title {
            font-size: 28px;
            font-weight: bold;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 9px 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        .btn-success {
            background: #16a34a;
            color: white;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            background: #f9fafb;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        .alert-danger {
            background: #fee2e2;
            color: #991b1b;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .inline-form {
            display: inline;
        }

        .badge {
            display: inline-block;
            padding: 4px 9px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-active {
            background: #dcfce7;
            color: #166534;
        }

        .badge-inactive {
            background: #fee2e2;
            color: #991b1b;
        }

        .pagination {
            margin-top: 20px;
        }
         .footer {
        width: 100%;
        margin-top: 60px;
        background: #111827;
        color: #ffffff;
    }

    .footer-content {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;

        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 40px;
    }

    .footer h3,
    .footer h4 {
        margin: 0 0 12px 0;
        color: #ffffff;
    }

    .footer p {
        margin: 0 0 8px 0;
        color: #cbd5e1;
        line-height: 1.6;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
    }

    .footer-links a {
        color: #cbd5e1;
        text-decoration: none;
        margin-bottom: 8px;
        transition: color 0.2s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
    }

    .footer-bottom {
        border-top: 1px solid #374151;
        text-align: center;
        padding: 18px 20px;
    }

    .footer-bottom p {
        margin: 0;
        color: #9ca3af;
        font-size: 14px;
    }

    /* Mobile Responsive */

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 25px;
            padding: 30px 20px;
        }
    }
    </style>

    @stack('styles')
</head>

<body>

    <nav class="navbar">
        <div class="container navbar-content">
            <a href="{{ route('home') }}" class="brand">
                Barakah Product Management
            </a>

            <div>
                <a href="{{ route('products.index') }}" class="nav-link">
                    Products
                </a>

                <a href="{{ route('products.create') }}" class="nav-link">
                    Add Product
                </a>
            </div>
        </div>
    </nav>

    <main class="container">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </main>

    @stack('scripts')

</body>
</html>
<footer class="footer">
    <div class="container footer-content">

        <div class="footer-brand">
            <h3>Barakah Product Management</h3>
            <p>
                A simple and professional Laravel-based product management system.
            </p>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('products.create') }}">Add Product</a>
        </div>

        <div class="footer-tech">
            <h4>Technology</h4>
            <p>PHP • Laravel • MySQL • Blade</p>
            <p>CRUD & Form Request Validation</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>
            © {{ date('Y') }} Barakah Product Management.
            All rights reserved.
        </p>
    </div>
</footer>
