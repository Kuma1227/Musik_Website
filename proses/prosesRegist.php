<?php
    require_once '../koneksi.php';

    $koneksi;

    $userName = mysqli_real_escape_string($koneksi, $_POST['user']);
    $password = mysqli_real_escape_string($koneksi, $_POST['pass']);
    $confirmPass = mysqli_real_escape_string($koneksi, $_POST['Konpass']);

    $script = "INSERT INTO pengguna (id, userName, pasword) VALUES ('','$userName','$password')";
    $hasil = mysqli_query($koneksi, $script);
    header("Location: ../registrasi.php?sukses=Halo pengguna baru!");
?>