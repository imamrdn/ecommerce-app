@extends('dashboard.layouts.main')

@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4">{{ $desc }}</p>

    <!-- Edit Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="/dashboard/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="font-weight-bold">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" value="{{ old('name', $product->name) }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price" class="font-weight-bold">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                                id="price" value="{{ old('price', $product->price) }}" required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            rows="3">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="quantity" class="font-weight-bold">Stock Quantity</label>
                        <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                            id="quantity" value="{{ old('quantity', $product->quantity ?? 0) }}" required>
                        @error('quantity')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image" class="font-weight-bold">Product Image</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                            id="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/dashboard/products" class="text-decoration-none text-secondary ml-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
