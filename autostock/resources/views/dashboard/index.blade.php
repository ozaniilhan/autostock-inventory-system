@extends('adminlte::page')

@section('title', 'Yönetim Paneli')

@section('content_header')
    <h1>Yönetim Paneli</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalProducts }}</h3>
                <p>Toplam Ürün</p>
            </div>
            <div class="icon"><i class="fas fa-box"></i></div>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalOrders }}</h3>
                <p>Toplam Sipariş</p>
            </div>
            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $completedOrders }}</h3>
                <p>Tamamlanan Sipariş</p>
            </div>
            <div class="icon"><i class="fas fa-check-circle"></i></div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $outOfStock }}</h3>
                <p>Stokta Kalmayan Ürün</p>
            </div>
            <div class="icon"><i class="fas fa-times-circle"></i></div>
        </div>
    </div>
</div>
@endsection
