<?php 
    // menghubungkan dengan file php lainnya
    require  'php/functions.php';

    // melakukan query
    $apparel = query("SELECT * FROM apparel")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        
            body {
                text-align: center;
            }
            img {
                width: 100px;
                height: 100px;
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
        <?php foreach ($apparel as $appl ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src = "asset/img/<?= $appl['Foto'] ?>"></td>
                <td><?= $appl["Merek"] ?></td>
                <td><?= $appl["Model"] ?></td>
                <td><?= $appl["Warna"] ?></td>
                <td><?= $appl["Harga"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>