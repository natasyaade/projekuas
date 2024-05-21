<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
    $title = $_POST['title'];
    $creator = $_POST['creator'];
    $constributor = $_POST['constributor'];
    $publisher = $_POST['publisher'];
    $date = $_POST['date'];
    $format = $_POST['format'];
    $identifier = $_POST['identifier'];
    $type = $_POST['type'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $relation = $_POST['relation'];
    $language = $_POST['language'];
    $coverage = $_POST['coverage'];
    $rights = $_POST['rights'];
    $source = $_POST['source'];


    $sql = "INSERT INTO buku (title, creator, constributor, publisher, date, format, identifier, type, subject, description, relation, language, coverage, rights, source)
            VALUES ('$title', '$creator', '$constributor', '$publisher', '$date', '$format', '$identifier', '$type', '$subject', '$description', '$relation', '$language', '$coverage', '$rights', '$source')";
    
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
