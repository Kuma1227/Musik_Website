<?php
    require_once '../koneksi.php';
    $koneksi;

    $kategori = mysqli_real_escape_string ($koneksi, $_POST['kategori']);
    $file = mysqli_real_escape_string ($koneksi, $_FILES['musik']['name']);
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);

    // if(empty($nama)){
    //     header("Location: index.php?error=nama ga boleh kosong");
    //     die();
    // }

    $sql = "INSERT INTO musik (idKategori, nama_file, judul_musik, keterangan) VALUES ($kategori, '$file', '$judul', '$keterangan')";
    mysqli_query($koneksi, $sql);
    $path = "file/".basename($file);
    if(move_uploaded_file($_FILES['musik']['tmp_name'],$path)){
        echo " Successfully uploaded <br>" ;
    }else{
        echo "<script> alert(ada sesuatu masalah dalam upload file, coba lagi nanti) </script> <br>";
    }
    header("Location: musik.php");
?>