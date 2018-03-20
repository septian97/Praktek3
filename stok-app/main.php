<h2>Aplikasi Stok Barang</h2>
<hr>
<table border="1">
    <tr>
        <th>KODE</th>
        <th>NAMA BARANG</th>
        <th>STOK<th>
    
    <tr>

</table>
<?php
    include "koneksi.php";

    $konkesiObj = new Koneksi();
    $koneksi = $konkesiObj->getKoneksi();
        
        
    if($koneksi->connect_error) {
       echo "<tr><td>";
       echo "Gagal Koneksi : " . $koneksi->connect_error;
       echo "</td></tr>";
    } //else {
//        echo "<tr><td>";
//        echo "Sambungan basis data Berhasil";
//        echo "</td></tr>";
//    }
$query = "select * from stok_barang";
?>