<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

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
    <h2 class="card-title"><i class="fa-solid fa-book"></i> Data Buku</h2>
    
    <form class="d-flex" role="search" method="get" action="">
        <input class="form-control me-2" type="search" aria-label="Search" name="cari"
        value="<?php if(isset($_GET['cari'])){echo $_GET['cari']; } ?>">
        <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>

  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
   <tr>
   <th scope="col">No</th>
   <th scope="col" width="200">Title</th>
   <th scope="col">Creator</th>
   <th scope="col">Publisher</th>
   <th scope="col">Date</th>
   <th scope="col">Format</th>
   <th scope="col">Identifier</th>
   <th scope="col">Aksi</th>
   </tr>
</thead>
</div>

<?php
        include '../koneksi.php';
            if(!empty($_GET['cari'])){
                $cari =$_GET['cari'];
                $sql = "SELECT * from buku WHERE title like '%$cari%' or creator like '%$cari%' or publisher like '%$cari%' or format like '%$cari%'";
            } else {
                $sql = "SELECT * from buku";
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
        <td><?= $p['title']?></th>
        <td><?= $p['creator'] ?></td>
        <td><?= $p['publisher'] ?></td>
        <td><?= $p['date'] ?></td>
        <td><?= $p['format'] ?></td>
        <td><?= $p['identifier'] ?></td>
        <td>
            <a class="btn btn-success" href="update.php?id_buku=<?= $p['id_buku']; ?>" role="button"><i class='bi bi-pencil-square'></i></a>
            <!-- <a class="btn btn-danger" href="hapus.php?id_buku=<?php //echo $p['id_buku']?>"><i class='bi bi-trash3-fill'></i></a> -->
            <a class="btn btn-danger" href="#" onclick="tampilAlert(<?php echo $p['id_buku']?>);"><i class='bi bi-trash3-fill'></i></a>
        </td>
    </tr>

<?php
    $no++;
}
?>

</table>

<a class="btn btn-primary" href="tambah.php" role="button">Tambah</a>

<script>
    function tampilAlert(id) {
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
            window.location = "hapus.php?+id_buku=" + id;  
          }
        });
    }
</script>

<?php
include '../aset/footer.php';
?>