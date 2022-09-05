<?php
include '../koneksi.php';

if(isset($_POST['simpanbarang'])) {
    $id_b = $_POST['id_barang'];
    $nama_b = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    
    $sql    = "UPDATE barang SET nama_barang='$nama_b',stok='$stok' 
                Where id_barang='$id_b'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: barang.php');
    }else{
        header('Location: editbarang.php?status=gagal');
    }
    mysqli_close($conn);
}
