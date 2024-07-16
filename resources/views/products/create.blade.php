@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Tambah Produk Baru</h2>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Produk</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Harga Produk</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Produk</button>
            </form>
        </div>
    </div>
</div>
@endsection
