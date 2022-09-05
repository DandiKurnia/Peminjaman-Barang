<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id_p = $_POST['id_pengguna'];
    $nama_pe = $_POST['nama_pengguna'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    
    $sql    = "UPDATE pengguna SET nama_pengguna='$nama_pe', email='$email', no_telepon='$no_telepon'
               Where id_pengguna='$id_p'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: user.php');
    }else{
        header('Location: edituser.php?status=gagal');
    }
    mysqli_close($conn);
}
?>