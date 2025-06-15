@extends('adminlte::page')

@section('title', 'Ürünler')

@section('content_header')
    <h1>Ürünler</h1>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Depo Görevlisi'))
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Yeni Ürün</a>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Ad</th>
                <th>Stok</th>
                <th>Fiyat</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock_quantity }}</td>
                <td>{{ $product->price }} ₺</td>
                <td>
                    @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Depo Görevlisi'))
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                    @endif

                    @if(Auth::user()->hasRole('Admin'))
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-sm btn-danger">Sil</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection