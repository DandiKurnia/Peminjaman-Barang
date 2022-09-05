<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: pegawai.php');
}

    $id_pe = $_GET['id_pegawai']; 

    $sql    = "DELETE FROM pegawai WHERE id_pegawai='$id_pe'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: pegawai.php');
    }else{
        header('Location: hapuspegawai.php?status=gagal');
}
?>