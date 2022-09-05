<?php
include '../koneksi.php';
if (isset($_POST['simpanbarang'])) {
    $id_ba = $_POST['id_barang'];
    $nama_b = $_POST['nama_barang'];

    $sql = "INSERT INTO barang (id_barang, nama_barang)
            VALUES ('$id_ba','$nama_b')";

    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: barang.php');
    } else {
        header('Location: 404.html?status=gagal');
    }
    mysqli_close($conn);
}
