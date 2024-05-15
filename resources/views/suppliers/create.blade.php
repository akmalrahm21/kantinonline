<!-- resources/views/suppliers/create.blade.php -->


    <div class="container">
        <h2>Tambah Supplier</h2>
        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="barang">Barang:</label>
                <input type="text" class="form-control" id="barang" name="barang">
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp:</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

