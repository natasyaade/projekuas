<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>


<?php
include '../koneksi.php';
?>


<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fa-solid fa-user"></i> Data Anggota</h2>
            <form class="d-flex" role="search" method="get" action="">
                <input class="form-control me-2" type="search" aria-label="Search" name="cari" value="<?php if (isset($_GET['cari'])) {
                                                                                                            echo $_GET['cari'];
                                                                                                        } ?>">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
        </div>
        <?php
        include '../koneksi.php';
        if (!empty($_GET['cari'])) {
            $cari = $_GET['cari'];
            $sql = "SELECT * from anggota WHERE nama like '%$cari%' or nisn like '%$cari%'";
        } else {
            $sql = "SELECT * from anggota";
        }

        $res = mysqli_query($koneksi, $sql);

        while ($data = mysqli_fetch_assoc($res)) {
            $pinjam[] = $data;
        }
        ?>

        <?php
        $no = 1;
        foreach ($pinjam as $p) { ?>
            <tr>
                <td scope="row"><?= $no ?></td>
                <td><?= $p['nama'] ?></th>
                <td><?= $p['nisn'] ?></td>
                <td><?= $p['jk'] ?></td>
                <td>
                    <a class="btn btn-success" href="update.php?id_anggota=<?= $p['id_anggota']; ?>" role="button"><i class='bi bi-pencil-square'></i></a>
                    <a class="btn btn-danger" href="#" onclick="showAlert(<?php echo $p['id_anggota']?>);"><i class='bi bi-trash3-fill'></i></a>
                </td>
            </tr>

        <?php
            $no++;
        }
        ?>

        </table>
        <a class="btn btn-primary" href="tambah.php" role="button">Tambah</a>
    </div>
</div>

<?php
include '../aset/footer.php';
?>


<script>
    function showAlert(id) {
        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Kamu akan menghapus data ini dan tidak dapat dlihat kembali!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          cancelButtonText: "Tidak",
          confirmButtonText: "Ya"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "hapus.php?+id_anggota=" + id;  
          }
        });
    }
</script>

</body>
</html>