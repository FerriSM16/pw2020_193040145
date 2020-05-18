<?php
require 'tubes/php/functions.php';


if(isset($_GET['cari'])) {
  $keyword =$_GET['keyword'];
  $apparel = query ("SELECT * FROM apparel WHERE 
    no LIKE '%$keyword%' OR 
    nama_Pakaian LIKE '%$keyword%' OR 
    Bahan_Pakaian LIKE '%$keyword%' OR 
    merk LIKE '%$keyword%' OR 
    harga LIKE '%$keyword%' ");
}else {

//melakukan query
$apparel = query("SELECT * FROM apparel");
}

?>


<!--  <!DOCTYPE html>
  <html>
    <head>
      Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- My CSS -->
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Tubes</title>
    </head>
    <body id="home" class="scrollspy">

<!-- navbar -->

  <div class="navbar-fixed">
    <nav class="grey">
      <div class="container">
      <div class="nav-wrapper">
        <a a href="tubes/php/login.php" class="brand-logo"><i class="material-icons medium">add_box</i></a></a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#menu">Menu</a></li>
          <li><a href="#Product">Product</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="../index.php" class="btn btn-primary tombol">Kembali ke index</a></li>
        </ul>
      </div>
    </div>
    </nav>
  </div>

<!-- sidenav -->
 <ul class="sidenav" id="mobile-nav">
      <li><a a href="tubes/php/login.php" class="brand-logo"><i class="material-icons medium">add_box</i></a></a></li><br>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#Product">Product</a></li>
      <li><a href="../index.php">Kembali ke index</a></li>
 </ul>


<!-- slider -->
 <menu id="menu" class="menu  scrollspy">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/cardinal.jpg"> 
        <div class="caption right-align">
          <h3 class="black-text">This is clot model cardinal!</h3>
          <h5 class="light black-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
       <li>
        <img src="img/slider/zara.jpg"> 
        <div class="caption left-align">
          <h3>This is clot model Zara!</h3>
          <h5 class="light black-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
       <li>
        <img src="img/slider/armani.png"> 
        <div class="caption right-align">
          <h3>This is clot model Armani!</h3>
          <h5 class="light grey-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
       <li>
        <img src="img/slider/gucci.jpg"> 
        <div class="caption left-align">
          <h3>This is clot model Gucci!</h3>
          <h5 class="light grey-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/louis.jpg"> 
        <div class="caption center-align">
          <h3>This is clot model Louis!</h3>
          <h5 class="light grey-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/Levis.png"> 
        <div class="caption right-align">
          <h3 class="black-text">This is clot model Levis!</h3>
          <h5 class="light grey-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
       <li>
        <img src="img/slider/uniqlo.jpg"> 
        <div class="caption center-align">
          <h3 class="black-text">This is clot model UniqLo!</h3>
          <h5 class="light black-text text-lighten-3">Le see guys.</h5>
        </div>
      </li>
    </ul>
</div>
</menu>


  <Prodyct id="Product" class="Product scrollspy">            
 <section id="Product" class="Product scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-3">Product</h3>
        </div>

      
<?php foreach ($apparel as $appl) : ?>
<div class="row">
   <div class="col m3 s12" >
    <div class="item">
      <div class="card" style="height: 500px">
        <div class="card-image">
          <img src="tubes/asset/img/<?= $appl['Foto']; ?>" class="Foto" style="height: 250px">
        </div>
        <div class="card-content">
          <span class="center card-title black-text text-darken-3"><?= $appl['Merek'] ?></span> <br><br><br>
        </div>
        <div class="card-action center" style="height: 10px">
          <a href="tubes/php/detail.php?id=<?= $appl['id']; ?>" >Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</section>
</Prodyct>


<!-- contact us -->
    <section id="contact" class="contact lighten-3 scrollspy">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">Contact Us</h3><br>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel blue darken-2 center white-text">
              <i class="material-icons">email</i>
              <h5>Contact</h5>
              <p>Silahkan masukan pesan untuk memberi saran atau bantuan.</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h4>Our Office</h4></li>
              <li class="collection-item">Web Programing UNPAS</li>
              <li class="collection-item">Jl. Setiabudhi No. 193, Bandung</li>
              <li class="collection-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input type="text" name="name" id="name" required class="validate">
                  <label for="name">Name</label>
                </div>
                  <div class="input-field">
                  <input type="email" name="email" id="email" class="validate">
                  <label for="email">Email</label>
                </div>
                  <div class="input-field">
                  <input type="text" name="phone" id="phone">
                  <label for="phone">Phone Number</label>
                </div>
                  <div class="input-field">
                  <textarea name="message" id="message" class="materialize-textarea"></textarea>
                  <label for="message">Message</label>
                </div>
                <button type="submit" class="btn blue darken-2">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><br><br>



<footer class="footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="Black-text"><b><u>Ferri Syamsul Ma'arif</u></b></h5><br>
                <p class="grey-text text-lighten-4">Universitas Pasundan</p>
                <p class="grey-text text-lighten-4">Fakultas Teknik Informatika</p><br>
                <p class="grey-text text-lighten-4"><b><u>Location</u></b></p>
                <p class="grey-text text-lighten-4">Dsn banana garden, Kec Ciasem, Kab Subang, Prov Jawa Barat, Indonesia</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text"><b><u>Sosmed</u></b></h5>
                 <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">youtube</a></li>
                </ul>
                <h5 class="white-text"><b><u>Contact Me</u></b></h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">No Hp   : 0123456878</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Email 1 : ferrisyamsuimaarif@gmail.com</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Email 1 : 193040145.ferry@mail.unpas.ac.id</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <p class="center"><u>© 2020 Copyright Ferri SM</u></p>            
            </div>
          </div>
        </footer>


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    
 
  const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
  const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,
          {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
          });
        const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrollspy,
          {
            scrollOffset: 50
          });
      </script>
    </body>
  </html> 