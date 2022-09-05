<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: barang.php');
}

$id_b = $_GET['id_barang'];

$sql    = "DELETE FROM barang WHERE id_barang='$id_b'";
$query  = mysqli_query($connect, $sql);
if ($query) {
    header('Location: barang.php');
} else {
    header('Location: hapus.php?status=gagal');
}
