<!-- resources/views/pembeli/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Barang di Kantin</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Jenis Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kantins as $kantin)
                <tr>
                    <td>{{ $kantin->jenis_barang }}</td>
                    <td>{{ $kantin->nama_barang }}</td>
                    <td>{{ $kantin->harga }}</td>
                    <td>{{ $kantin->jumlah }}</td>
                    <td>
                        @if($kantin->gambar)
                            <img src="{{ asset('images/'.$kantin->gambar) }}" alt="{{ $kantin->nama_barang }}" style="max-width: 100px;">
                        @else
                            Tidak Ada Gambar
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
