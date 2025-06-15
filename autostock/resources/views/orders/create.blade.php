@extends('adminlte::page')

@section('title', 'Yeni Sipariş')

@section('content_header')
    <h1>Yeni Sipariş</h1>
@endsection

@section('content')
    @if(Auth::user()->hasRole('Satış Personeli'))
        <form method="POST" action="{{ route('orders.store') }}">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Stok</th>
                        <th>Fiyat</th>
                        <th>Miktar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{ $product->name }}
                                <input type="hidden" name="products[{{ $loop->index }}][id]" value="{{ $product->id }}">
                            </td>
                            <td>{{ $product->stock_quantity }}</td>
                            <td>{{ $product->price }} ₺</td>
                            <td><input type="number" name="products[{{ $loop->index }}][quantity]" class="form-control" min="0"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Siparişi Oluştur</button>
        </form>
    @else
        <div class="alert alert-danger">Bu işlemi yapma yetkiniz yok.</div>
    @endif
@endsection
