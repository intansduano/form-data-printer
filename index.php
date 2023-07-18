<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.min.js"
        integrity="sha512-mp3VeMpuFKbgxm/XMUU4QQUcJX4AZfV5esgX72JQr7H7zWusV6lLP1S78wZnX2z9dwvywil1VHkHZAqfGOW7Nw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css"
        integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Data Printer</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Printer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?data=infobarang">Tambah Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?data=listbarang">List Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    if ($_GET['data'] == 'infobarang') {
        include('infodatabarang.php');
    } elseif ($_GET['data'] == 'tambah') {
        include('form_inputbarang.php');
    } elseif ($_GET['data'] == 'listbarang') {
        include('listdatabarang.php');
    } else { ?>
    <div class="container col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Dashboard</h1>
        <h5 class="page-header">Pilih Menu <a href="?data=infobarang"><b>Tambah Data Barang</b></a> Untuk Menambahkan
            Data Baru</h5>
    </div>
    <?php }
    ?>

</body>


</html>