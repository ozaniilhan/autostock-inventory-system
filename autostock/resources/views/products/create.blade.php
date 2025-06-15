@extends('adminlte::page')

@section('title', 'Yeni Ürün')

@section('content_header')
    <h1>Yeni Ürün</h1>
@endsection

@section('content')
    @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Depo Görevlisi'))
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Ürün Adı</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stok Miktarı</label>
                <input type="number" name="stock_quantity" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Fiyat</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control">
                    <option value="">Seçiniz</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Kaydet</button>
        </form>
    @else
        <div class="alert alert-danger">Bu sayfayı görüntüleme yetkiniz yok.</div>
    @endif
@endsection