@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="200" alt="{{ $product->name }}">
    @endif
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
