@extends('layouts.app')

@section('title', 'Daftar Pesanan')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Pesanan</h1>
    <a href="{{ route('order.create') }}" class="btn btn-success mb-3">Tambah Pesanan Baru</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jumlah Galon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->status ? 'Selesai' : 'Proses' }}</td>
                <td>
                    <a href="{{ route('order.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
