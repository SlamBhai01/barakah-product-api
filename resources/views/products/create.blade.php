@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Create Product</h1>
        <p>Add a new product to the inventory.</p>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Back to Products
    </a>
</div>

<div class="card">

    <form
        action="{{ route('products.store') }}"
        method="POST"
    >
        @include('products._form', [
            'submitButtonText' => 'Create Product'
        ])
    </form>

</div>

@endsection
