<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<?php
    include 'aset/header.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body
    style="background-color: rgba(255,255,255,0.6); 
        background-blend-mode: lighten; 
        background-image: url('tata.png'); 
        background-size: 500px; 
        background-repeat: no-repeat; 
        background-attachment: fixed;
        background-position: center;">
    
    <div class="container">
        <div class="row mt-4">
            <div class="col-md">
                <h3>Dashboard</h3>
                <hr>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body text-white">
                        <h2><i class="fa-solid fa-book"></i> Buku</h2>
                        <a href="http://localhost/coba2/buku/index.php" class="text-white">Lebih detail <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-success" style="width: 18rem;">
                    <div class="card-body text-white">
                        <h2><i class="fa-solid fa-user"></i> Anggota</h2>
                        <a href="http://localhost/coba2/anggota/index.php" class="text-white">Lebih detail <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <?php
include 'aset/footer.php';
?>
</body>

</html>