<!-- resources/views/kantins/create.blade.php -->

    <div class="container">
        <h2>Tambah Kantin</h2>
        <form action="{{ route('kantins.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id_pemasok">ID Pemasok:</label>
                <input type="text" class="form-control" id="id_pemasok" name="id_pemasok">
            </div>
            <div class="form-group">
                <label for="jenis_barang">Jenis Barang:</label>
                <select class="form-control" id="jenis_barang" name="jenis_barang">
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

