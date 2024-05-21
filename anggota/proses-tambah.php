<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jk = $_POST['jk'];
    $id_level = 2;

    $sql = "INSERT INTO anggota (nama, nisn, jk, id_level)
            VALUES ('$nama', '$nisn', '$jk', $id_level)";
    
$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: index.php");
}
else 
{
   header("Location: tambah.php");
}

     

}
else 
{
    header("Location: tambah.php");    
}

?>
