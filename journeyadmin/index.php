<?php
require "session.php";
require "../koneksi.php";

$queryKategori = mysqli_query($mysqli, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);


$queryProduk = mysqli_query($mysqli, "SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);

$queryPromosi = mysqli_query($mysqli, "SELECT * FROM slides");
$jumlahPromosi = mysqli_num_rows($queryPromosi);

$queryMember = mysqli_query($mysqli, "SELECT * FROM user_info");
$jumlahMember = mysqli_num_rows($queryMember);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategory {
        background-color: #0a6b4a;
        border-radius: 15px;
    }

    .summary-produk {
        background-color: #0a516b;
        border-radius: 15px;
    }


    .no-decoration {
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-house"></i> Home </li>
            </ol>
        </nav>
        <h1>halo <?php echo $_SESSION['username'] ?></h1>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-kategory p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-align-justify fa-7x text-black-50"></i>
                            </div>
                            <div class="col-6 text-hite">
                                <h3 class="fs-2">Kategori</h3>
                                <p class="fs-4"><?php echo $jumlahKategori ?> Kategori</p>
                                <p><a href="kategori.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-box fa-7x text-black-50"></i>
                            </div>
                            <div class="col-6 text-hite">
                                <h3 class="fs-2">Produk</h3>
                                <p class="fs-4"><?php echo $jumlahProduk ?> Produk</p>
                                <p><a href="produk.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-square-rss fa-7x text-black-50"></i>
                            </div>
                            <div class="col-6 text-hite">
                                <h3 class="fs-2">Promosi</h3>
                                <p class="fs-4"><?php echo $jumlahPromosi ?> Promosi</p>
                                <p><a href="promosi.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-users-line fa-7x text-black-50"></i>
                            </div>
                            <div class="col-6 text-hite">
                                <h3 class="fs-2">DataMember</h3>
                                <p class="fs-4"><?php echo $jumlahMember ?> Member</p>
                                <p><a href="datamember.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa fa-shopping-cart fa-7x text-black-50"></i>
                            </div>
                            <div class="col-6 text-hite">
                                <h3 class="fs-2">Pesanan</h3>
                                <p class="fs-4">Order</p>
                                <p><a href="order-detail.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>