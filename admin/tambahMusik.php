<?php
    require '../koneksi.php';
    $koneksi;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - MuZeek</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../aset/resource/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-success">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3 fs-3 text-light" href="index.php">Mu<span class="text-info">Z</span>eek</a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
      <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading"><h6>Table's</h6></div>
              <a class="nav-link" href="musik.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Musik
              </a>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Musik</h1>
            <div class="card mb-4 mt-5">
              <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="proses.php" method="post"  enctype="multipart/form-data">
                                <label for="formGroupExampleInput" class="form-label">kategori</label>
                                <select class="form-select" aria-label="Default select example" required name='kategori'>
                                    <option selected>- pilih -</option>
                                    <?php
                                        $koneksi;
                                        $sql = "SELECT * FROM musikkategori ORDER BY idKategori ASC";
                                        $hasil = mysqli_query($koneksi, $sql);
                                        while($data = mysqli_fetch_assoc($hasil)){
                                            echo "<option value='$data[idKategori]'>$data[kategori]</option>";
                                        }
                                    ?>
                                </select>
                                <div class="mt-4">
                                    <label for="formGroupExampleInput" class="form-label">Masukan file musik</label>
                                    <input type="file" name="musik" class="form-control" id="formGroupExampleInput" required >
                                </div>
                                <div class="mt-4">
                                    <label for="formGroupExampleInput" class="form-label">judul musik</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" required name="judul">
                                </div>
                                <div class="mt-4 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">keterangan</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" required name="keterangan">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-info text-light"/>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Mu<span class="text-info">Z</span>eek <?php echo date('Y');?></div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../aset/resource/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../aset/resource/assets/demo/chart-area-demo.js"></script>
    <script src="../aset/resource/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../aset/resource/js/datatables-simple-demo.js"></script>
  </body>
</html>
