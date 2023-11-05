<?php

session_start();

require_once 'function.php';
require_once 'db.php';

if(!isset($_GET["id"])) {
  error_reporting(0);
  ini_set('display_error', 0);
}
 $id =$_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tire-Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
            <div class="logo"><img src="./img/iconshopbg.png" alt="" class="logo-image">Authorized Tire Shop</div>
            <div class="menu">
                <ul>
                    <a href="#home">
                        <li>Home</li>
                    </a>
                    <a href="#katalog">
                        <li>Katalog</li>
                    </a>
                    <a href="#about">
                        <li>About-Us</li>
                    </a>
                    <a href="#contact">
                        <li>Contact</li>
                    </a>
                    <a href="login.php" class="nav-link">
                      <?php
                      if (isset($_SESSION["login"])) {
                        Login();
                      } else {
                        nonLogin();
                      }
                      ?>
                    </a>
                </ul>
            </div>
    </nav>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/toko.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>CV.Laris Ban Jaya</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/listban.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tersedia Berbagai Merk dan Type</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/diskon.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dapatkan Diskon Special</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section id="katalog">
  <div class="container">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card" style="width: 24rem;">
          <!-- Isi dari card 1 -->
          <div class="card-body">
              <h5 class="card-title">BRIDGESTONE-TURANZA T005A</h5>
              <img src="./img/turanza.png" alt="">
              <h6 class="card-subtitle mb-2 text-body-secondary">Touring</h6>
              <p class="card-text">
                      KENYAMANAN DI ATAS SEGALANYA,
                      Lebih Tenang
                      Lebih Aman
                      Lebih Menyenangkan</p>
            <a href="#" class="btn btn-primary">Beli</a>
            <a href="#" class="card-link">Lihat Detail</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card" style="width: 24rem;">
          <!-- Isi dari card 2 -->
          <div class="card-body">
              <h5 class="card-title">BRIDGESTONE-ECOPIA EP150</h5>
              <img src="./img/ecopia.png" alt="">
              <h6 class="card-subtitle mb-2 text-body-secondary">SAVE FUEL GO GREEN</h6>
              <p class="card-text">
                      Hemat bahan bakar
                      Aman dan Handal,
                      Tahan Lama
                    dan ramah lingkungan</p>
            <a href="#" class="btn btn-primary">Beli</a>
            <a href="#" class="card-link">Lihat Detail</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card" style="width: 24rem;">
          <!-- Isi dari card 3 -->
          <div class="card-body">
              <h5 class="card-title">BRIDGESTONE-TECHNO TECHNO NEW</h5>
              <img src="./img/ecopia.png" alt="">
              <h6 class="card-subtitle mb-2 text-body-secondary">Techno</h6>
              <p class="card-text">
                      Aman di jalan basah
                      Berkendaraan lebih aman setiap hari
                     </p>
            <a href="#" class="btn btn-primary">Beli</a>
            <a href="#" class="card-link">Lihat Detail</a>
            </div>
        </div>
      </div>
    </div>
    <!-- Baris baru untuk card selanjutnya -->
    <div class="row">
      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card" style="width: 24rem;">
          <!-- Isi dari card 4 -->
          <div class="card-body">
              <h5 class="card-title">GOOD YEAR-EAGLE F1 SPORT</h5>
              <img src="./img/goodyearf1s.png" alt="">
              <h6 class="card-subtitle mb-2 text-body-secondary">Excellent HandlingOutstanding Braking</h6>
              <p class="card-text">
              Ban high performance dari Goodyear, menjadikan pengelaman fun to drive menjadi lebih fun dengan handling dan braking yang mantap</p>
            <a href="#" class="btn btn-primary">Beli</a>
            <a href="#" class="card-link">Lihat Detail</a>
            </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="card" style="width: 24rem;">
          <!-- Isi dari card 5 -->
          <div class="card-body">
              <h5 class="card-title">GOOD YEAR-ASSURANCE DURAPLUS 2</h5>
              <img src="./img/duraplus.png" alt="">
              <h6 class="card-subtitle mb-2 text-body-secondary">TredLife Technology</h6>
              <p class="card-text">
              Inovasi produk terbaru yang memenuhi kebutuhan pengendara small dan mid size SUV,</p>
            <a href="#" class="btn btn-primary">Beli</a>
            <a href="#" class="card-link">Lihat Detail</a>
            </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="card" style="width: 24rem;">
          <!-- Isi dari card 6 -->
          <div class="card-body">
              <h5 class="card-title">GOOD YEAR-ASSURANCE TRIPLEMAX</h5>
              <img src="./img/ATM.png" alt="">
              <h6 class="card-subtitle mb-2 text-body-secondary">TEKNOLOGI HYDROGRIP</h6>
              <p class="card-text">
              Assurance TripleMax dengan Hydrogrip Technology mengurangi jarak pengereman hingga 2 meter pada jalan basah.</p>
            <a href="#" class="btn btn-primary">Beli</a>
            <a href="#" class="card-link">Lihat Detail</a>
            </div>

        </div>
      </div>
    </div>
    <!-- Dan seterusnya... -->
  </div>
</section>

  <footer>
    <section id="contact">
      <div class="foot">
              <h2>Kontak :</h2>
              <ul>
                <li><a href="#">wfzputra@gmail.com</a></li>
                <li><a href="#">+62 877-730-1852</a></li>
                <li><a href="#">Madiun, Jawa Timur</a></li>
              </ul>
              <h2>Sosial Media :</h2>
              <ul>
                <li>
                  <a href="https://www.instagram.com/whyufreakyzp/">
                    Instagram
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/TBDironman"> 
                    Facebook
                  </a>
                </li>
              </ul>
        </div>
            <br>
            <div class="credit">© 2023 CV.Laris Ban Jaya</div>

  </section>

  </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>