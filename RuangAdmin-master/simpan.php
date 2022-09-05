<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $id_b = $_POST['id_barang'];
    $nama_ba = $_POST['nama_barang'];
    $status = $_POST['status'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO inventory (id_barang, nama_barang, status, stok)
            VALUES ('$id_b','$nama_ba','$status','$stok')";

    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        header('Location: simpan.php?status=gagal');
    }
    mysqli_close($conn);    
}
?>


