<?php
include '../koneksi.php';
$id_p = $_GET['id_peminjaman'];
$sql = "SELECT * FROM peminjaman WHERE id_peminjaman='$id_p'";
$query = mysqli_query($connect, $sql);
$no = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Edit Pelanggan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form action="edit.php" method="POST">
      <input type="hidden" name="id_pe" value="<?php echo $no['id_peminjaman'] ?>">
      <h3 class="border-bottom mt-3 mb-3">Form Edit Customer</h3>
      <div class="form-group">
        <label>ID Peminjaman</label>
        <input type="text" class="form-control" name="id_peminjaman" value="<?php echo $no['id_peminjaman'] ?>">
      </div>
      <div class="form-group">
        <label>ID Pengguna</label>
        <input type="text" class="form-control" name="id_pengguna" value="<?php echo $no['id_pengguna'] ?>">
      </div>
      <div class="form-group">
        <label>Barang</label>
        <input type="text" class="form-control" name="nama_barang" value="<?php echo $no['nama_barang'] ?>">
      </div>
      <div class="form-group">
        <label>Tanggal Peminjaman</label>
        <input type="date" class="form-control" name="tanggal_peminjaman" value="<?php echo $no['tanggal_peminjaman'] ?>">
      </div>
      <div class="form-group">
        <label>Jumlah</label>
        <input type="text" class="form-control" name="jumlah" value="<?php echo $no['jumlah'] ?>">
      </div>
      <input type="submit" name="simpan" value="simpan" class="btn btn-primary" />
    </form>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>