<?php
require_once 'koneksi.php';

$koneksi;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            overflow-x:hidden;
        }
    </style>
  </head>
  <body>
    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <h1 class="mb-4 text-center">LOGIN</h1>
                        <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "belum_login"){
                                    echo "<p style='color: #f00'>Anda harus login untuk mengakses halaman admin</p>";
                                }
                                if($_GET['pesan'] == "gagal"){
                                    echo "<p style='color: #f00'>Login gagal! username dan password salah!</p>";
                                }
                            }
                        ?>
                        <form action="proses/prosesLogin.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <button type="submit" name="Register" class="btn btn-primary mb-5">Register</button> <br>
                            <a href="registrasi.php">Belum punya akun?, silahkan register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>