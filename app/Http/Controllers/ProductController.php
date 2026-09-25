<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index(): View
    {
        try {
            $products = Product::latest()->paginate(10);

            return view('products.index', compact('products'));
        } catch (Throwable $exception) {
            report($exception);

            abort(500, 'Unable to load products.');
        }
    }

    /**
     * Show the form for creating a new product.
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Store a newly created product.
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        try {
            Product::create($request->validated());

            return redirect()
                ->route('products.index')
                ->with('success', 'Product created successfully.');
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->with('error', 'Unable to create product.');
        }
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product.
     */
    public function update(
        ProductRequest $request,
        Product $product
    ): RedirectResponse {
        try {
            $product->update($request->validated());

            return redirect()
                ->route('products.index')
                ->with('success', 'Product updated successfully.');
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->with('error', 'Unable to update product.');
        }
    }

    /**
     * Remove the specified product.
     */
    public function destroy(Product $product): RedirectResponse
    {
        try {
            $product->delete();

            return redirect()
                ->route('products.index')
                ->with('success', 'Product deleted successfully.');
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->with('error', 'Unable to delete product.');
        }
    }
}
