@extends('layouts.app')

@section('title', 'Form Pemesanan')

@section('content')
<div class="container">
    <h1 class="mb-4">Form Pemesanan Baru</h1>
    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat:</label>
            <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Galon:</label>
            <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
    </form>
</div>
@endsection
