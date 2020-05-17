<?php 
    // menghubungkan dengan file php lainnya
    require  'php/functions.php';

    // melakukan query
   if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $apparel = query("SELECT * FROM apparel WHERE
            foto LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            model LIKE '%$keyword%' OR
            warna LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' ");
    } else {
    $apparel = query("SELECT * FROM apparel");
 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
     
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>


      <!-- My CSS -->
      <link rel="stylesheet" href="../css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
    <title>Document</title>
</head><br><br>
<body class="grey">

  <div class="rowright center">
    <div class="col m6 s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><p><h5 class="center light black-text text-lighten-3"><b>Cari merek sesuai menu atau klik salah satu merek dibawah ini untuk melihat barangnya</b></h5></span>
          
    <div class="center">
        <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
        </form><br>
        <?php if(empty($apparel)) : ?>
                        <h1>Data tidak diemukan</h1>

            <?php else : ?>
        <?php foreach ($apparel as $appl) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $appl['id'] ; ?>">
                    <?= $appl["Merek"] ?> 
                </a>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>
    </div><br><br>

    <center><a href="php/login.php">
    <button type="">
        Masuk ke halaman Admin
    </button>
    </a><br><br>
    <button class="tombol-kembali"><a href="../index1.php">Kembali</a></button>
    </p>
        </div>
      </div>
    </div>
  </div>
    

</body>
</html>