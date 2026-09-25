@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page-header">

    <div>
        <h1 class="page-title">
            Product Management System
        </h1>

        <p>
            Laravel-based product inventory management application.
        </p>
    </div>

</div>


<div class="card">

    <h2>
        Welcome to Product Management
    </h2>

    <br>

    <p>
        Manage products, inventory, pricing and product status
        through a simple CRUD interface.
    </p>

    <br>

    <a
        href="{{ route('products.index') }}"
        class="btn btn-primary"
    >
        Manage Products
    </a>

    <a
        href="{{ route('products.create') }}"
        class="btn btn-success"
    >
        Add Product
    </a>

</div>

@endsection
