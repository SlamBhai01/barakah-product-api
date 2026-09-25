@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="page-header">

    <div>
        <h1 class="page-title">Products</h1>
        <p>Manage your product inventory.</p>
    </div>

    <a href="{{ route('products.create') }}" class="btn btn-primary">
        + Add Product
    </a>

</div>


<div class="card">

    @if($products->count() > 0)

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($products as $product)

                        <tr>

                            <td>
                                {{ $products->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <strong>
                                    {{ $product->name }}
                                </strong>
                            </td>

                            <td>
                                {{ $product->sku }}
                            </td>

                            <td>
                                {{ $product->category }}
                            </td>

                            <td>
                                ${{ number_format($product->price, 2) }}
                            </td>

                            <td>
                                {{ $product->stock }}
                            </td>

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

                            <td>

                                <div class="actions">

                                    <a
                                        href="{{ route('products.show', $product) }}"
                                        class="btn btn-secondary"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ route('products.edit', $product) }}"
                                        class="btn btn-primary"
                                    >
                                        Edit
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
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

        <div class="pagination">
            {{ $products->links() }}
        </div>

    @else

        <p>
            No products found.
        </p>

        <br>

        <a
            href="{{ route('products.create') }}"
            class="btn btn-primary"
        >
            Create First Product
        </a>

    @endif

</div>

@endsection
