<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_pe = $_POST['id_peminjaman'];
    $id_p = $_POST['id_pengguna'];
    $barang = $_POST['nama_barang'];
    $tgl = $_POST['tanggal_peminjaman'];
    $jumlah = $_POST['jumlah'];


    $sql    = "UPDATE peminjaman SET id_pengguna='$id_p',nama_barang='$barang',tanggal_peminjaman='$tgl',jumlah='$jumlah'
                    Where id_peminjaman='$id_pe'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: peminjaman.php');
    } else {
        header('Location: edit.php?status=gagal');
    }
    mysqli_close($conn);
}
