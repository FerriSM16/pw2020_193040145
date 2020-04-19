<?php 
    // Melakukan koneksi ke fbsql_database
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    //Memilih database
    mysqli_select_db($conn, "pw_193040145") or die ("Database salah!");
    //query mengambil objek dari table didalam database
    $result = mysqli_query($conn, "SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        
            body {
                text-align: center;
                width: 1000px;
            }
            img {
                width: 200px;
            }

        </style>
</head>
<body>
    <div class="container">
        <table cellspadding="10" cellspacing="0" border="1">
            <tr>
                <th>NO</th>
                <th>Foto</th>
                <th>Merek Pakaian</th>
                <th>Model Pakaian</th>
                <th>Warna Pakaian</th>
                <th>Harga</th>
            </tr>
           <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src = "assets/img/<?= $row['Foto'] ?>"></td>
                <td><?= $row["Merek Pakaian"] ?></td>
                <td><?= $row["Model Pakaian"] ?></td>
                <td><?= $row["Warna Pakaian"] ?></td>
                <td><?= $row["Harga"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>