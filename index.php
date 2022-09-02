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
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/logo-sgs.png" type="image/x-icon">
    <title>PT. SinarIndo Global Sarana</title>
    <style>
      .banner-image {
        background-image: url('assets/img/gambar.png');
        background-size: cover;
      }
    </style>
  </head>
  <body>

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-light" style="background-color:	rgb(135, 206, 250);">
      <div class="container">
      <a class="navbar-brand" href="#">
      <img src="assets/img/logo-sgs.png" alt="" width="100">
      </a>
      <button class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarNavDropdown" 
      aria-controls="navbarNavDropdown" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
        
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link active" href="galeri.php">Galeri</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link active" href="berita.php">Berita</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link active" href="tentang.php">Tentang Kami</a>
          </li>
          <li class="nav-item mx-2 dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelatihan dan Sertifikasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Sertifikat SGS</a></li>
              <li><a class="dropdown-item" href="#">Kemnaker RI</a></li>
            </ul>
          </li>
        </ul>
        <div class="navbar-button">
        <a class="btn btn-primary tombol" href="daftar.php">Daftar</a>
        <a href="login/sessionLogout.php" type="button" class="btn btn-primary tombol">Logout</a>
      </div>
      </div>
      </div>
    </nav>


    <!--banner-->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <!-- <h1 >PT. Sinarindo Global Sarana Hadir Untuk Kita Semua</h1> -->
      </div>
    </div>
<!-- akhir-->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-6 text-center">
                <div class="col-mb-3">
                  <div class="card-about"></div>
                    <p> PT. Sinarindo Global Sarana adalah Perusahaan Jasa K3(PJK3) bidang Pelatihan dan Konsultasi terhadap Sistem Manajemen, terutama Sistem Manajemen Keselamatan dan Kesehatan Kerja(SMK3). Berdasarkan PP no.50 th.2012 dan OHSAS 180001, Sistem Manajemen Lingkungan ISO 140001, Sistem Manajemen Mutu ISO 90001 dan ISRS.</p>
                      <p> PT. Sinarindo Global Sarana juga menyediakan tim Konsultan dan Instruktur  yang berpengalaman dibidangnya dalam hal Setting Up perusahaan sampai perusahaan dinyatakan lulus dan mendapatkan sertifikat
                        Sebagai perusahaan jasa KNK yang merintis pelatihan kader norma ketenagakerjaan, PT. Sinarindo Global Sarana berharap dapat membantu setiap perusahaan untuk meminimalisir risiko ketenagakerjaan. PT. Sinarindo Global Sarana juga turut serta membantu untuk memperpanjang SKP yang telah habis waktunya. </p>
                </div>
            </div>

        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#545454" fill-opacity="1" d="M0,32L1440,192L1440,320L0,320Z"></path>
</svg> -->
    </section>
    <!-- Akhir -->

    <!-- Projects-->
    <section id="keterangan">
        <div class="container">
          <div class="p-5 mb-2 bg-light rounded-3 text-center">
            <div class="container-fluid py-5">
              <h1>PT. Sinarindo Global Sarana Hadir Untuk Kita Semua</h1>
              <p>
                PT. Sinarindo Global Sarana adalah Perusahaan Jasa K3(PJK3) bidang Pelatihan dan Konsultasi terhadap Sistem Manajemen, terutama Sistem Manajemen Keselamatan dan Kesehatan Kerja(SMK3).
              </p>
            </div>
          </div>
        </div>
    </section>
    <!-- Akhir -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h4>Contact</h4>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-sm-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir -->

    <!-- Footer -->
    <section id="footer">
    <footer class="text-white text-center pb-5" style="background-color:	rgb(135, 206, 250);">
        <p> Created by <a href="https://www.instagram.com/fathinaufall/" class="text-white fw-bold"> Fathin
            Naufaliya & Muhammad Dhiyaul A.</a></p>
    </footer>
    </section>
    <!-- Akhir -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>