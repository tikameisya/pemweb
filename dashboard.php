<?php
// Menyisipkan sebuah file yang berisi kumpulan array
include ('ok.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha84-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="db.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-light" href="">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="transaksi.php">Transaksi</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
      <a class="nav-link text-light" href="index.php">Logout</a>
    </ul>
  </nav>

  <!-- IMAGE BANNER -->
  <img src="banner.jpg" style="display: block; margin: auto" height="400" width="1000"><br>

  <!-- JUDUL -->
  <nav>
    <ul>
      <center>
        <h5><b>Daftar Paket Laundry</b></h5>
      </center>
    </ul>
  </nav>
  <!-- CARD PAKET MENGGUNAKAN PERULANGAN FOR -->
  <div class="container">
    <div class="row">
      <?php
        $id = 0;
            for($i = 0; $i < count($datapaket); $i++) {
            ?>
      <div class="col-3">
        <div class="card" style="width: 14rem;">
          <div class="card-body">
            <!-- Untuk menampilkan teks ke layar -->
            <h5 class="card-title"><?php echo $datapaket[$i][0]; ?> </h5><br>
            <p class="card-text"><?php echo $datapaket[$i][1]; ?></p><br>
            <p class="card-text"><?php echo "Rp".$datapaket[$i][2]; ?></p>
          </div>
          <a href="<?php echo 'transaksi.php?id='. $id++ ?>" class="btn btn-secondary">Pilih Paket</a>
        </div>
      </div>
      <?php
        }
        ?>
    </div>
        <footer>
          <a class="text-light">@copyright tikameisya</a>
        </footer>
</body>

</html>