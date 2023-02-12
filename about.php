<?php
    require_once 'koneksi.php';
    session_start();
    if(!isset( $_SESSION['masuk'])){
        header("Location: login.php");
        exit;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MuZeek</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-image: url(aset/aset1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            overflow-x:hidden;
        }

        /* @media screen and (max-width: 576px){
             .kaki{
                margin-top: 0px;
            }
        } */

        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap');
    </style>
  </head>
  <body>
    <!-- awal navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container" style="font-family: 'Roboto Condensed', sans-serif;">
                <a class="navbar-brand ms-4 fs-3" href="index.php">Mu<span class="text-info">Z</span>eek</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end fs-5" id="navbarNav" >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"> <span class="material-symbols-outlined">home</span>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php"> <span class="material-symbols-outlined">description</span>About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="musik.php"> <span class="material-symbols-outlined">music_note</span>Musik </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">account_circle</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="upload.php">Upload lagu</a></li>
                                <li><a class="dropdown-item" href="proses/prosesLogout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- akhir navbar -->
    <!-- awal konten-->
        <section style="margin:183px auto; color:white; margin-right:50px; margin-left:50px;" >
            <div class="row">
                <div class="col-md-6">
                        <h4>Website ini dikembangkan dari tanggal 8 Februari 2023 oleh <span class="text-info"> M.Syaifullah </span></h4> 
                </div>
                <div class="col-md-6">
                        <h4>Tempat dimana semua orang bisa berbagi dan mendengarkan <span class="text-info"> lagu </span></h4>
                </div>
            </div>
        </section>
    <!-- akhir konten -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
        <!-- footer -->
        <div class="kaki text-center fs-3" style="background-color:white; margin-top:266px;">
           <div>Mu<span class="text-info ">Z</span>eek <span class="fs-5">copyright &#169; <?php echo date('Y')?></span></div>
        </div>
        <!-- akhir footer -->
    </body>
</html>