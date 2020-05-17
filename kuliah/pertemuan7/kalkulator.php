<html>
<head>
<title>Penjumlahan Otomatis</title>
</head>
<body>
<form action="" method="post">
<table border="1">
    <tr>
        <td>Input Nilai A </td><td>:</td>
        <td><input type="text" name="txNilaiA"></td>
    </tr>
    <tr>
        <td>Input Nilai B </td><td>:</td>
        <td><input type="text" name="txNilaiB"></td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="submit" value="Simpan" name="tbSimpan">
        </td>
    </tr>
</table>
</form>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("db_webku") or die(mysql_error());
if($_POST['tbSimpan']){
    $nilaiA=$_POST['txNilaiA'];
    $nilaiB=$_POST['txNilaiB'];
    $hasil=$nilaiA+$nilaiB;
    $sql="INSERT INTO tb_nilai SET nilai_a='$nilaiA', nilai_b='$nilaiB', jumlah_nilai='$hasil'";
    $query=mysql_query($sql) or die(mysql_error());
    }
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nilai A</th>
        <th>Nilai B</th>
        <th>Nilai A + B</th>
    </tr>
    <?php
    $sql2="SELECT * FROM tb_nilai";
    $query2=mysql_query($sql2);
    while($data=mysql_fetch_array($query2)){
        $no++;
        $out_nilai_a=$data['nilai_a'];
        $out_nilai_b=$data['nilai_b'];
        $out_jumlah=$data['jumlah_nilai'];
        ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $out_nilai_a; ?></td>
        <td><?php echo $out_nilai_b; ?></td>
        <td><?php echo $out_jumlah; ?></td>
    </tr>
        <?php
        }
    ?>
    <tr>
        <td>Jumlah</td>
        <td>
        <?php
        $qry_jumlah_a=mysql_query("SELECT SUM(nilai_a) FROM tb_nilai");
        $data_a=mysql_fetch_array($qry_jumlah_a);
        $jumlah_nilai_a=$data_a[0];
        echo $jumlah_nilai_a;
        ?>
        </td>
        <td>
        <?php
        $qry_jumlah_b=mysql_query("SELECT SUM(nilai_b) FROM tb_nilai");
        $data_b=mysql_fetch_array($qry_jumlah_b);
        $jumlah_nilai_b=$data_b[0];
        echo $jumlah_nilai_b;
        ?>
        </td>
        <td>
        <?php
        $qry_jumlah_nilai=mysql_query("SELECT SUM(jumlah_nilai) FROM tb_nilai");
        $data_nilai=mysql_fetch_array($qry_jumlah_nilai);
        $jumlah_nilai_total=$data_nilai[0];
        echo $jumlah_nilai_total;
        ?>
        </td>
    </tr>
</table>
</body>
</html>