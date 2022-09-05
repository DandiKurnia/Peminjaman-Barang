<?php
include '../koneksi.php';
if (isset($_POST['simpanpegawai'])) {
    $id_p = $_POST['id_pegawai'];
    $nama_pe = $_POST['nama_pegawai'];
    $email = $_POST['email'];
    $telepon = $_POST['no_telepon'];

    $sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, email, no_telepon)
            VALUES ('$id_p','$nama_pe','$email','$telepon')";

    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: pegawai.php');
    } else {
        header('Location: simpanpegawai.php?status=gagal');
    }
    mysqli_close($conn);
}
?>


