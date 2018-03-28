<h2>Formulir Hapus Data</h2>
<hr>
<?php
include "koneksi.php";

    $konkesiObj = new Koneksi();
    $koneksi = $konkesiObj->getKoneksi();
            
            
    if($koneksi->connect_error) {
        echo "Gagal Koneksi : " . $koneksi->connect_error;
    }
    $query = "delete from stok_barang where kode='" .
            $_GET["kode"] . "'";
    $data = $koneksi->query($query);

    if($koneksi->query($query)===true){
        echo "<br>Data ". $_GET["kode"] . 
            'berhasil dihapus';
    } else{
        echo "<br> Data gagal dihapus";
        
    }
    echo "<br>";
    echo "<a href='main.php'>Kembali ke Halaman Utama</a>";

   
?>