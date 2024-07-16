@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Selamat Datang di Toko Bunga</h1>
    <p class="lead">Menjual berbagai macam bunga dengan harga terjangkau.</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Lihat Produk</a>
</div>
@endsection
