@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <h1 class="display-4">Trending Products</h1>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12 text-right">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card product-card">
                @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-image" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/150" class="card-img-top product-image" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Price: </strong>{{ $product->price }}</p>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
