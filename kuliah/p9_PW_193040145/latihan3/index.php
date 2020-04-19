<?php 
    // menghubungkan dengan file php lainnya
    require  'php/functions.php';

    // melakukan query
    $apparel = query("SELECT * FROM apparel");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach ($apparel as $appl) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $appl['No'] ; ?>">
                    <?= $appl["Merek Pakaian"] ?> 
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>