@extends('adminlte::page')

@section('title', 'Siparişler')

@section('content_header')
    <h1>Siparişler</h1>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kullanıcı</th>
                <th>Durum</th>
                <th>Oluşturma</th>
                <th>Ürünler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->full_name ?? 'Anonim' }}</td>
                    <td>
                        @if(Auth::user()->hasRole('Admin'))
                            <form method="POST" action="{{ route('orders.updateStatus', $order->id) }}">
                                @csrf
                                @method('PATCH')
                                <select name="status" onchange="this.form.submit()" class="form-control">
                                    @foreach(['Pending', 'Completed', 'Cancelled'] as $status)
                                        <option value="{{ $status }}" {{ $order->status === $status ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        @else
                            {{ $order->status }}
                        @endif
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <ul>
                            @foreach($order->items as $item)
                                <li>{{ $item->product->name }} ({{ $item->quantity }})</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
