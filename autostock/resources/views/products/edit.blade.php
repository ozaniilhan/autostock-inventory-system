@extends('adminlte::page')

@section('title', 'Ürün Düzenle')

@section('content_header')
    <h1>Ürünü Düzenle</h1>
@endsection

@section('content')
    @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Depo Görevlisi'))
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Ürün Adı</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label>Stok Miktarı</label>
                <input type="number" name="stock_quantity" class="form-control" value="{{ $product->stock_quantity }}" required>
            </div>
            <div class="form-group">
                <label>Fiyat</label>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control">
                    <option value="">Seçiniz</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    @else
        <div class="alert alert-danger">Bu sayfayı görüntüleme yetkiniz yok.</div>
    @endif
@endsection