<main class="container m-4">
    <h4>Tambahkan Data Barang</h4>
    <form action="input.php" method="post">
        <div class="mb-3">
            <label class="form-label">No</label>
            <input class="form-control" name="no" placeholder="Masukkan nomor..." required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Merk</label>
            <input class="form-control" name="nama_merk" placeholder="Masukkan merk printer..." required>
        </div>
        <div class="mb-3">
            <label class="form-label">Warna</label>
            <input class="form-control" name="warna" placeholder="Masukkan warna printer..." requiredor>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input class="form-control" name="jumlah" placeholder="Masukkan jumlah printer..." required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <input type="reset" name="Reset" value="Ulangi" tabindex="50" class="btn btn-outline-light text-black-50"></input>
        <input type="submit" value="Kembali" class="btn btn-outline-light text-black-50" <a href="#" onclick="history.back();"></a>
    </form>
</main>