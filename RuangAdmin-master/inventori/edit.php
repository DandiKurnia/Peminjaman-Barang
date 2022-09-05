<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_b = $_POST['id_barang'];
    $nama_ba = $_POST['nama_barang'];
    $stok = $_POST['stok'];

    $sql    =  "UPDATE inventory SET nama_barang='$nama_ba',stok='$stok' 
                Where id_barang='$id_b'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: inventori.php');
    } else {
        header('Location: edit.php?status=gagal');
    }
    mysqli_close($conn);
}
