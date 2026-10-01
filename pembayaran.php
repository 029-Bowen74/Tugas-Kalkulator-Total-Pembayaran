<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Barang</title>
</head>
<body>

<h2>Data Pembelian Barang</h2>

<form method="POST">
    Nama Barang :
    <input type="text" name="nama_barang"><br><br>

    Harga Satuan :
    <input type="number" name="harga"><br><br>

    Jumlah Pembelian :
    <input type="number" name="jumlah"><br><br>

    <input type="submit" value="Hitung">
</form>

<?php

if (isset($_POST['harga'])) {

    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    if ($harga < 0 || $jumlah < 1) {
        echo "<h3>Input tidak valid!</h3>";
        echo "Harga tidak boleh negatif dan jumlah pembelian minimal 1.";
    } else {

        $total = $harga * $jumlah;

        if ($total >= 500000) {
            $diskon = 20;
        } elseif ($total >= 250000) {
            $diskon = 10;
        } else {
            $diskon = 0;
        }

        $potongan = $total * $diskon / 100;
        $bayar = $total - $potongan;

        echo "<h3>Hasil Perhitungan</h3>";
        echo "Nama Barang : " . $nama . "<br>";
        echo "Harga Satuan : Rp " . $harga . "<br>";
        echo "Jumlah Pembelian : " . $jumlah . "<br>";
        echo "Total Harga : Rp " . $total . "<br>";
        echo "Diskon : " . $diskon . "%<br>";
        echo "Total Pembayaran : Rp " . $bayar . "<br>";
    }
}

?>

</body>
</html> 