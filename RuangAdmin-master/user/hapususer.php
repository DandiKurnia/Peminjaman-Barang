<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: user.php');
}

    $id_p = $_GET['id_pengguna']; 

    $sql    = "DELETE FROM pengguna WHERE id_pengguna='$id_p'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: user.php');
    }else{
        header('Location: hapususer.php?status=gagal');
}
?>