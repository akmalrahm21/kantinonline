<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Kantin</title>
</head>
<body>
    <h1>List Kantin</h1>
    <a href="{{ route('kantins.create') }}">Tambah Kantin</a>
    <a href="{{ route('suppliers.index') }}" class="btn btn-primary mb-2">Tambah Supplier</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
        @foreach($kantins as $kantin)
        <tr>
            <td>{{ $kantin->id }}</td>
            <td>{{ $kantin->nama_barang }}</td>
            <td>{{ $kantin->harga }}</td>
            <td>{{ $kantin->jumlah }}</td>
            <td><img src="{{ asset('images/'.$kantin->gambar) }}" alt="{{ $kantin->nama_barang }}" style="width: 100px;"></td>
            <td>
                <a href="{{ route('kantins.show', $kantin->id) }}">Show</a>
                <a href="{{ route('kantins.edit', $kantin->id) }}">Edit</a>
                <form action="{{ route('kantins.destroy', $kantin->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
