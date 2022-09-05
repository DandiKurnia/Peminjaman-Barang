<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $id_p = $_POST['id_pengembalian'];
    $id_pe = $_POST['id_pengguna'];
    $nama_ba = $_POST['nama_barang'];
    $tgl = $_POST['tanggal_pengembalian'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO pengembalian (id_pengembalian, id_pengguna, nama_barang, tanggal_pengembalian, jumlah)
            VALUES ('$id_p','$id_pe','$nama_ba','$tgl','$jumlah')";

    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: pengembalian.php');
    } else {
        header('Location: simpan.php?status=gagal');
    }
    mysqli_close($conn);
}
