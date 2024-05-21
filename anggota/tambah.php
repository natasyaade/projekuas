<?php
include '../aset/header.php';
?>

<html>

<div class="container" style="min-height: 100vh;">
    <div class="row mt-4">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Tambah Data Anggota</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="anggota">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="anggota" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Masukkan NISN">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" id="jk" placeholder="Masukkan Jenis Kelamin">
                            <small class="form-text text-muted">Contoh: Laki-Laki, Perempuan</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>

<?php
include '../aset/footer.php';
?>