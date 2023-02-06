<?php
    require_once '../koneksi.php';

    $koneksi;

    // menangkap data dari form
    $userName = mysqli_real_escape_string($koneksi, $_POST['user']);
    $password = md5(mysqli_real_escape_string($koneksi, $_POST['pass']));
    $confirmPass = md5(mysqli_real_escape_string($koneksi, $_POST['Konpass']));

    if(empty($userName)) {
        header("Location: ../registrasi.php?error=Username ga boleh kosong!");
        die();
    }
    if (empty($password)) {
        header("Location: ../registrasi.php?error=password ga boleh kosong!");
        die();
    }
    if (empty($confirmPass)) {
        header("Location: ../registrasi.php?error= konfirm password ga boleh kosong!");
        die();
    }

    // untuk enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // memasukan data registrasi ke database
    $script = "INSERT INTO pengguna (id, userName, pasword) VALUES ('','$userName','$password')";
    $hasil = mysqli_query($koneksi, $script);

    // jika insert data sukses, arahkan ke halaman registrasi
    header("Location: ../registrasi.php?sukses=Halo pengguna baru!, ingat2 passwordnya");
?>