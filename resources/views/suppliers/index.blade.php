<!-- resources/views/suppliers/index.blade.php -->


    <div class="container">
        <h2>Daftar Suppliers</h2>
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-2">Tambah Supplier</a>
        <a href="{{ route('kantins.index') }}">Tambah Kantin</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Barang</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->nama }}</td>
                    <td>{{ $supplier->barang }}</td>
                    <td>{{ $supplier->no_telp }}</td>
                    <td>
                        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('suppliers.show', $supplier->id) }}">Tampil</a>
                            <a class="btn btn-primary" href="{{ route('suppliers.edit', $supplier->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

