@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Edit Product</h1>
        <p>Update the selected product information.</p>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Back to Products
    </a>
</div>

<div class="card">

    <form
        action="{{ route('products.update', $product) }}"
        method="POST"
    >
        @method('PUT')

        @include('products._form', [
            'product' => $product,
            'submitButtonText' => 'Update Product'
        ])
    </form>

</div>

@endsection
