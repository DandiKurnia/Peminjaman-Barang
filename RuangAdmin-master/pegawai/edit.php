<?php
include '../koneksi.php';

if (isset($_POST['simpanpegawai'])) {
    $id_pe = $_POST['id_pegawai'];
    $nama_p = $_POST['nama_pegawai'];
    $email = $_POST['email'];
    $telepon = $_POST['no_telepon'];

    $sql    = "UPDATE pegawai SET nama_pegawai='$nama_p',email='$email',no_telepon='$telepon' 
                Where id_pegawai='$id_pe'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: pegawai.php');
    } else {
        header('Location: edit.php?status=gagal');
    }
    mysqli_close($conn);
}
