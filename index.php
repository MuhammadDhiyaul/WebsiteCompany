<?php

session_start();
if(!isset($_SESSION["status"])) 
header("Location: login/loginForm.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/logo-sgs.png" type="image/x-icon">
    <title>PT. SinarIndo Global Sarana</title>
  </head>
  <body>

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#">
      <img src="assets/img/logo-sgs.png" alt="" width="100">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="galeri.php">Galeri</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="berita.php">Berita</a>
          </li>
          <li class="nav-item mx-3 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelatihan dan Sertifikasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Sertifikasi SGS</a></li>
              <li><a class="dropdown-item" href="#">Kemnaker RI</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="navbar-button">
        <a class="btn btn-dark" href="daftar.php">Daftar</a>
        <a href="login/sessionLogout.php" type="button" class="btn btn-dark">Logout</a>
      </div>

      </div>
    </nav>

  <!-- Section 1 -->
    <div class="p-5 mb-2 bg-light rounded-3 text-center">
      <div class="container-fluid py-5">
        <h1>PT. Sinarindo Global Sarana Hadir Untuk Kita Semua</h1>
        <p>
          PT. Sinarindo Global Sarana adalah Perusahaan Jasa K3(PJK3) bidang Pelatihan dan Konsultasi terhadap Sistem Manajemen, terutama Sistem Manajemen Keselamatan dan Kesehatan Kerja(SMK3).
        </p>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>