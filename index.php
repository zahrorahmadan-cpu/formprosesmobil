<?php
if(isset($_GET["pesan"])){
  $pesan = "<p> {$_GET["pesan"]} <p>";
}
else{
  $pesan = "";
}
if(isset($_GET["nama"])){
  $nilai_nama = $_GET["nama"];
}
else{
  $nilai_nama="";
}
if(isset($_GET["email"])){
  $nilai_email = $_GET["email"];
}
else{
  $nilai_email="";
}
if(isset($_GET["hargamobil"])){
  $nilai_hargamobil = $_GET["hargamobil"];
}
else{
  $nilai_hargamobil="";
}
if(isset($_GET["tenor"])){
  $nilai_tenor = $_GET["tenor"];
}
else{
  $nilai_tenor="";
}
if(isset($_GET["dp"])){
  $nilai_dp = $_GET["dp"];
}
else{
  $nilai_dp="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  >
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar fixed top">
  <div class="container-fluid text-start d-block ">
    <div class=" container brand mx-auto d-flex align-items-center">
      <img src="asset/logo.png" alt="Logo" class="logo align-items-center text-center">
      <span >Carismatic</span>
    </div>
    <div class="menu container text-start">
      <a href="#beranda">Beranda</a>
      <a href="#tentang">Tentang</a>
      <a href="#Kalkulator">Kalkulator</a>
      <a href="#kontak">Kontak</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="hero">
  <div class="hero-slide">
    <div class="hero-bg"></div>
    <div class="overlay"></div>
    <div class="container">
      <div class="hero-content d-flex flex-column justify-content-center mt-0">
        <p class="hero-small ">credit mobil</p>
        <h1 class="">WUJUDKAN
          <span class="text-primary">MOBIL IMPIANMU</span>
        </h1>
        <p class="deskripsi">
          Temukan mobil impianmu dengan kredit yang murah serta proses yang mudah.</p>
        <div class="d-flex gap-2">
          <a href="#kalkulator" class="btn btn-primary px-4 py-2">Ajukan kredit</a>
          <a href="#kalkulator" class="btn btn-outline-primary px-4 py-2">Tentang</a>
        </div>
      </div>

    </div>
  </div>
  </div>
    </div>
    <div class="carousel-item">
    <div class="hero">
  <div class="hero-slide">
    <div class="hero-bg1"></div>
    <div class="overlay"></div>
    <div class="container">
      <div class="hero-content d-flex flex-column justify-content-center mt-0">
        <p class="hero-small ">credit mobil</p>
        <h1 class="">TEMUKAN
          <span class="text-primary">PENGALAMAN MENARIK</span>
        </h1>
        <p class="deskripsi">
          Hidupkan semangat hidupmu dengan mobil pilihanmu.</p>
        <div class="d-flex gap-2">
          <a href="#kalkulator" class="btn btn-primary px-4 py-2">Ajukan kredit</a>
          <a href="#kalkulator" class="btn btn-outline-primary px-4 py-2">Tentang</a>
        </div>
      </div>

    </div>
  </div>
  </div>
    </div>
    <div class="carousel-item">
    <div class="hero">
  <div class="hero-slide">
    <div class="hero-bg2"></div>
    <div class="overlay"></div>
    <div class="container">
      <div class="hero-content d-flex flex-column justify-content-center mt-0">
        <p class="hero-small ">credit mobil</p>
        <h1 class="">CARI
          <span class="text-primary">JATI DIRIMU</span>
        </h1>
        <p class="deskripsi">
          Ikuti kata hatimu, berikan yang terbaik untuk dirimu.</p>
        <div class="d-flex gap-2">
          <a href="#kalkulator" class="btn btn-primary px-4 py-2">Ajukan kredit</a>
          <a href="#kalkulator" class="btn btn-outline-primary px-4 py-2">Tentang</a>
        </div>
      </div>

    </div>
  </div>
  </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container text-center mt-4 ">
  <div class="row row-cols-2">
    <div class="col mt-4">
      <div class="card shadow-sm" style="width: 30rem;">
       <img src="asset/lambo biru.jpg" alt="" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Dapatkan kesan menarik saat memilih kendaraan anda</p>
        </div>
      </div>
    </div>
    <div class="col mt-4">
      <h5 class="about text-sm fw-bold d-block  mb-3 text-start ">Tentang Perusahaan</h5>
      <h2 class="text-start fw-bold text-primary">Kelola kredit anda dengan kami</h2>
      <p class=" text-start mb-4">Kami adalah perusahaan yang mengelola kredit mobil yang terpercaya, transparan, dan mudah. Kami hadir untuk membantu anda dalam menghitung angsuran mobil impian anda.</p>
      <div class="container text-center mt-4">
        <div class="row row-cols-4">
          <div class="col">
            <i class="bi bi-calculator text-primary p-5 fs-1"></i>
            <p class="text-sm"></p>
          </div>
          <div class="col">
            <i class="bi bi-hourglass-split text-primary p-5 fs-1"></i>
          </div>
          <div class="col">
            <i class="bi bi-car-front text-primary fs-1"></i>
          </div>
          <div class="col">
            <i class="bi bi-card-checklist text-primary fs-1"></i>
          </div>
        </div>
      </div>
    </div>
    
    
  </div>
</div>
<div>
<h2 class="about2 text-center mt-4 fw-bold ">Simulasi Kalkulator</h2>
<p class="text-center"> Gunakan simulasi unruk menghirung angsuran anda</p>

<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
    <?php echo $pesan ?>
      <form action="proses.php" method="post">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" value="<?php echo $nilai_nama?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="<?php echo $nilai_email?>">
        </div>
        <div clsass="mb-3">
          <label class="form-label">Harga Mobil</label>
          <input type="number" name="hargamobil" class="form-control" value="<?php echo $nilai_hargamobil?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Tenor</label>
          <div>
            <input type="radio" name="tenor" value="1" <?php if($nilai_tenor == 1){ echo "checked"; } ?>>
            <label>1 Tahun</label>
            <input type="radio" name="tenor" value="2" class="ms-3" <?php if($nilai_tenor == 2){ echo "checked"; } ?>>
            <label>2 Tahun</label>
            <input type="radio" name="tenor" value="3" class="ms-3" <?php if($nilai_tenor == 3){ echo "checked"; } ?>>
            <label>3 Tahun</label>
            <input type="radio" name="tenor" value="4" class="ms-3" <?php if($nilai_tenor == 4){ echo "checked"; } ?>>
            <label>4 Tahun</label>
            <input type="radio" name="tenor" value="5" class="ms-3" <?php if($nilai_tenor == 5){ echo "checked"; } ?>>
            <label>5 Tahun</label>
          </div>
    </div>
        <div class="mb-3">
          <label class="form-label">DP</label>
          <select name="dp" class="form-select" value="<?php echo $nilai_dp?>">
            <option value="10" <?php if($nilai_dp == 10){ echo "selected"; } ?>>10%</option>
            <option value="20" <?php if($nilai_dp == 20){ echo "selected"; } ?>>20%</option>
            <option value="30" <?php if($nilai_dp == 30){ echo "selected"; } ?>>30%</option>
            <option value="40" <?php if($nilai_dp == 40){ echo "selected"; } ?>>40%</option>
            <option value="50"<?php if($nilai_dp == 50){ echo "selected"; } ?>>50%</option>
            <option value="50"<?php if($nilai_dp == 60){ echo "selected"; } ?>>60%</option>
          </select>
        </div>
        <input type="submit" name="submit" value="Hitung" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<div class="text-center">
<?php
    if(isset($_POST['submit'])){
        $hargamobil = $_POST ['hargamobil']; 
        $nama = $_POST ['nama'];
        $email = $_POST ['email'];
        $tenor = $_POST ['tenor']; 
        $dp = $_POST ['dp']; 
        $hargadpmobil= 0; 

        if ($dp == 10){ 
          $hargadpmobil = ($dp/100)*$hargamobil; 
        }elseif($dp == 20){ 
          $hargadpmobil = ($dp/100)*$hargamobil; 
        }elseif($dp == 30){ 
          $hargadpmobil = ($dp/100)*$hargamobil; 
        }elseif ($dp == 40){ 
          $hargadpmobil = ($dp/100)*$hargamobil; 
        }elseif ($dp == 50){ 
          $hargadpmobil = ($dp/100)*$hargamobil; 
        } 

        $lamaangsuran=0; 
        if ($tenor == 1){ 
          $lamaangsuran= $tenor*12; 
        }elseif($tenor == 2){ 
          $lamaangsuran = $tenor*12; 
        }elseif($tenor == 3){ 
          $lamaangsuran =$tenor*12; 
        }elseif($tenor == 4){ 
          $lamaangsuran = $tenor*12; 
        }elseif ($tenor == 5){ 
          $lamaangsuran = $tenor*12; 
        } 

        $bunga=20/100*$hargamobil; 
        $jumlahangsuran=(($hargamobil + $bunga)-$hargadpmobil)/$lamaangsuran; 
    
          echo "Nama = ". $nama . "<br>";
          echo "Email = ". $email . "<br>";
          echo "Harga mobil = " . $hargamobil ."<br>";
          echo "Tenor = " . $tenor . " Tahun <br>"; 
          echo "Lama angsuran = " . $lamaangsuran . " bulan <br>"; 
          echo "DP = " . $dp . "%<br>"; 
          echo "Harga DP mobil = " . $hargadpmobil . "<br>"; 
          echo "Bunga = Rp" . $bunga ."<br>"; 
          echo "Angsuran = Rp." . $jumlahangsuran . "<br>";
    }else{
        echo "Silahkan Isi datanya";
    } 
    ?>
  </div>
<footer class="bg-primary text-center py-5 text-sm mt-4">
    <p class="text-white mx-auto mb-5" style="max-width: 700px;">
      Solusi terbaik untuk anda yang membutuhkan<br> kendaraan yang berkualitas dengan layanan yang mudah dan cepat. 
    </p>
    <div class="d-flex justify-content-center flex-wrap gap-5 mb-5">
        <a href="#" class="text-decoration-none text-white ">About</a>
        <a href="#" class="text-decoration-none text-white ">Careers</a>
        <a href="#" class="text-decoration-none text-white ">History</a>
        <a href="#" class="text-decoration-none text-white ">Services</a>
        <a href="#" class="text-decoration-none text-white ">Projects</a>
        <a href="#" class="text-decoration-none text-white ">Blog</a>
    </div>
    <div class="d-flex justify-content-center gap-4">
        <a href="#" class="text-white fs-3">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="text-white fs-3">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" class="text-white fs-3">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="#" class="text-white fs-3">
          <i class="bi bi-github"></i>
        </a>
        <a href="#" class="text-white fs-3">
          <i class="bi bi-dribbble"></i>
        </a>
    </div>
    <hr class="text-white">
    <p class="text-center text-white mb-0">Lamborghini.2026 All right reserved</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>