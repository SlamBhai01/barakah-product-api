@extends('layouts.app')

@section('title', 'Product Details')

@section('content')

<div class="page-header">

    <div>
        <h1 class="page-title">
            Product Details
        </h1>

        <p>
            View complete information about this product.
        </p>
    </div>

    <a
        href="{{ route('products.index') }}"
        class="btn btn-secondary"
    >
        Back to Products
    </a>

</div>


<div class="card">

    <table>

        <tbody>

            <tr>
                <th>Product Name</th>
                <td>{{ $product->name }}</td>
            </tr>

            <tr>
                <th>SKU</th>
                <td>{{ $product->sku }}</td>
            </tr>

            <tr>
                <th>Category</th>
                <td>{{ $product->category }}</td>
            </tr>

            <tr>
                <th>Price</th>
                <td>
                    ${{ number_format($product->price, 2) }}
                </td>
            </tr>

            <tr>
                <th>Stock</th>
                <td>{{ $product->stock }}</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>
                    {{ $product->description ?: 'No description provided.' }}
                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>

                    @if($product->status === 'active')

                        <span class="badge badge-active">
                            Active
                        </span>

                    @else

                        <span class="badge badge-inactive">
                            Inactive
                        </span>

                    @endif

                </td>
            </tr>

            <tr>
                <th>Created At</th>
                <td>
                    {{ $product->created_at->format('d M Y, h:i A') }}
                </td>
            </tr>

            <tr>
                <th>Last Updated</th>
                <td>
                    {{ $product->updated_at->format('d M Y, h:i A') }}
                </td>
            </tr>

        </tbody>

    </table>

</div>


<div class="actions">

    <a
        href="{{ route('products.edit', $product) }}"
        class="btn btn-primary"
    >
        Edit Product
    </a>


    <form
        action="{{ route('products.destroy', $product) }}"
        method="POST"
        class="inline-form"
        onsubmit="return confirm('Are you sure you want to delete this product?');"
    >

        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="btn btn-danger"
        >
            Delete Product
        </button>

    </form>

</div>

@endsection
