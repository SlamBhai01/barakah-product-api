@csrf

<div class="form-group">
    <label for="name" class="form-label">
        Product Name
    </label>

    <input
        type="text"
        id="name"
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $product->name ?? '') }}"
        placeholder="Enter product name"
        required
    >

    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="sku" class="form-label">
        SKU
    </label>

    <input
        type="text"
        id="sku"
        name="sku"
        class="form-control @error('sku') is-invalid @enderror"
        value="{{ old('sku', $product->sku ?? '') }}"
        placeholder="Example: LAPTOP-001"
        maxlength="50"
        required
    >

    @error('sku')
        <div class="error">{{ $message }}</div>
    @enderror

    <small>
        Use uppercase letters, numbers, and hyphens only.
    </small>
</div>


<div class="form-group">
    <label for="category" class="form-label">
        Category
    </label>

    <input
        type="text"
        id="category"
        name="category"
        class="form-control @error('category') is-invalid @enderror"
        value="{{ old('category', $product->category ?? '') }}"
        placeholder="Example: Electronics"
        required
    >

    @error('category')
        <div class="error">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="price" class="form-label">
        Price
    </label>

    <input
        type="number"
        id="price"
        name="price"
        class="form-control @error('price') is-invalid @enderror"
        value="{{ old('price', $product->price ?? '') }}"
        placeholder="0.00"
        min="0"
        step="0.01"
        required
    >

    @error('price')
        <div class="error">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="stock" class="form-label">
        Stock Quantity
    </label>

    <input
        type="number"
        id="stock"
        name="stock"
        class="form-control @error('stock') is-invalid @enderror"
        value="{{ old('stock', $product->stock ?? 0) }}"
        placeholder="0"
        min="0"
        required
    >

    @error('stock')
        <div class="error">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="description" class="form-label">
        Description
    </label>

    <textarea
        id="description"
        name="description"
        class="form-control @error('description') is-invalid @enderror"
        placeholder="Enter product description"
        maxlength="1000"
    >{{ old('description', $product->description ?? '') }}</textarea>

    @error('description')
        <div class="error">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="status" class="form-label">
        Status
    </label>

    <select
        id="status"
        name="status"
        class="form-control @error('status') is-invalid @enderror"
        required
    >
        <option value="">Select Status</option>

        <option
            value="active"
            {{ old('status', $product->status ?? '') === 'active' ? 'selected' : '' }}
        >
            Active
        </option>

        <option
            value="inactive"
            {{ old('status', $product->status ?? '') === 'inactive' ? 'selected' : '' }}
        >
            Inactive
        </option>
    </select>

    @error('status')
        <div class="error">{{ $message }}</div>
    @enderror
</div>


<div class="actions">
    <button type="submit" class="btn btn-primary">
        {{ $submitButtonText ?? 'Save Product' }}
    </button>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Cancel
    </a>
</div>
