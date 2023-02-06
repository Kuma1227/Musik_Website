<?php
    require_once '../koneksi.php';
    session_start();
    $koneksi;

    $username = mysqli_real_escape_string($koneksi, $_POST['user']);
    $password = md5(mysqli_real_escape_string($koneksi, $_POST['pass']));

    $sql = "SELECT * FROM pengguna WHERE userName = '$username' AND pasword = '$password'";
    $hasil = mysqli_query($koneksi, $sql);
   $cek = mysqli_num_rows ($hasil);

    if($cek == true){
        $_SESSION['users'] = $username;

        // cek sesi
        $_SESSION['masuk'] = true;
        header("Location: ../index.php");
    }else{
        header("Location: ../login.php?pesan=gagal");
    }
?>