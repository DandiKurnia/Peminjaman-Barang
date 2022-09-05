<?php
include '../koneksi.php';
if(isset($_POST['simpanuser'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    
    $sql = "INSERT INTO pengguna (id_pengguna, nama_pengguna, email, no_telepon)
            VALUES ('$id_pengguna','$nama_pengguna','$email','$no_telepon')";

    $query  = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: user.php');
        }else{
            header('Location: simpanuser.php?status=gagal');
        }
        mysqli_close($conn);
}
?>