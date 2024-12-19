@extends('layouts.app')

@section('title', 'Edit Pesanan')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Pesanan</h1>
    <form action="{{ route('order.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $order->name }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat:</label>
            <textarea id="address" name="address" class="form-control" rows="3" required>{{ $order->address }}</textarea>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Galon:</label>
            <input type="number" id="quantity" name="quantity" class="form-control" value="{{ $order->quantity }}" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
