<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: index.php');
}

    $id_p = $_GET['id_barang']; 

    $sql    = "DELETE FROM inventory WHERE id_barang='$id_p'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: index.php');
    }else{
        header('Location: hapuspegawai.php?status=gagal');
}
?>