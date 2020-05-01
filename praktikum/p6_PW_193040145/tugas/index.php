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
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
        </form>
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
    </div>

    <a href="php/admin.php">
    <button type="">
        Masuk ke halaman Admin
    </button>
    </a>

</body>
</html>