<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_pe = $_POST['id_barang'];
    $nama_p = $_POST['nema_barang'];
    $status = $_POST['status'];
    $stok = $_POST['stok'];

    $sql    = "UPDATE inventory SET nama_barang='$nama_ba',status='$status',stok='$stok' 
                Where id_barang='$id_b'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        header('Location: edit.php?status=gagal');
    }
    mysqli_close($conn);
}
