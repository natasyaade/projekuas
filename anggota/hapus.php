
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_anggota = $_GET['id_anggota'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from anggota WHERE id_anggota='$id_anggota'");
 
// mengalihkan halaman kembali ke index.php
header("Location: index.php");
 
?>

