<?php 
require 'functions.php';
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
      echo "<script>  
        alert('Registrasi berhasil');
        document.location.href = 'login.php';
      </script>";
    } 
    else 
    {
      echo "<script>  
        alert('Registrasi gagal');
        document.location.href = 'login.php';
        </script>";
    }
     $error = true;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>


      <!-- My CSS -->
      <link rel="stylesheet" href="../../css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">

    <title>Tubes</title>
    <style type="text/css">
    
      body {
        text-align: ;
        font-style: ;
      }
    </style>
</head>
<body class="grey"><br><br><br>
  <div class=" center">
    <div class="col s12 m5">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center">Registrasi disini</span>
          <p><?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Masukan Username dan Password</p>
    <?php endif ?>
          <p><form action="" method="post" > 
       <table>
           <tr>
               <td><label for="username"><b>Username</b></label></td>
               <td>:</td>
               <td><input type="text" name="username"></td>
           </tr>
           <tr>
               <td><label for="password"><b>Password</b></label></td>
               <td>:</td>
               <td><input type="password" name="password"></td>
           </tr>
       </table><br>
       <button type="submit" name="register">REGISTER</button><br><br>
       <button class="tombol-kembali"><a href="login.php">Kembali</a></button>
   </form></p>
        </div>
        
      </div>
    </div>
  </div>
     
</body>
</html>