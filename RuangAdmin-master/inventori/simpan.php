<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $id_b = $_POST['id_barang'];
    $nama_ba = $_POST['nama_barang'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO inventory (id_barang, nama_barang, stok)
            VALUES ('$id_b','$nama_ba','$stok')";

    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: inventori.php');
    } else {
        header('Location: simpan.php?status=gagal');
    }
    mysqli_close($conn);
}
