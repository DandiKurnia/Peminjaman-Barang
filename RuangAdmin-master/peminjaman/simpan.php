<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $id_p = $_POST['id_peminjaman'];
    $id_pe = $_POST['id_pengguna'];
    $nama_ba = $_POST['nama_barang'];
    $tgl = $_POST['tanggal_peminjaman'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO peminjaman (id_peminjaman, id_pengguna, nama_barang, tanggal_peminjaman, jumlah)
            VALUES ('$id_p','$id_pe','$nama_ba','$tgl','$jumlah')";

    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: peminjaman.php');
    } else {
        header('Location: simpan.php?status=gagal');
    }
    mysqli_close($conn);
}
