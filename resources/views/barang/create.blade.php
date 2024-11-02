<!-- resources/views/barang/create.blade.php -->
<h1>Tambah Barang</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div>
        <br>
    <label for="nama_barang">Nama Barang</label>
    <input type="text" id="nama_barang" name="nama_barang" required>
</div>
</br>

<div>
    <br>
    <label for="jenis_barang">Jenis Barang</label>
    <input type="text" id="jenis_barang" name="jenis_barang" required>
</div>
</br>

<div>
    <br>
    <label for="stock">Stock</label>
    <input type="number" id="stock" name="stock">
    
</div>
</br>

<div>
    <br>
    <label for="status">Status</label>
    <select id="status" name="status">
        <option value="">Pilih Status</option>
        <option value="tersedia">tersedia</option>
        <option value="kosong">kosong</option>
    </select>
</div>
</br>

<br>
<div>
    <label for="harga_satuan">Harga Satuan</label>
    <input type="number" step="1000" id="harga_satuan" name="harga_satuan">
</div>
</br>

<div>
    <button type="submit">Save</button>
</div>
</form>
<a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
