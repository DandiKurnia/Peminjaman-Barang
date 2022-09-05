<?php
include '../koneksi.php';
$id_b = $_GET['id_barang'];
$sql = "SELECT * FROM barang WHERE id_barang='$id_b'";
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
    <form action="editbarang.php" method="POST">
      <input type="hidden" name="id_b" value="<?php echo $no['id_barang'] ?>">
      <h3 class="border-bottom mt-3 mb-3">Form Edit Customer</h3>
      <div class="form-group">
        <label>Id barang</label>
        <input type="text" class="form-control" name="id_barang" value="<?php echo $no['id_barang'] ?>">
      </div>
      <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" value="<?php echo $no['nama_barang'] ?>">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="text" class="form-control" name="stok" value="<?php echo $no['stok'] ?>">
      </div>
      <input type="submit" name="simpanbarang" value="simpan" class="btn btn-primary" />
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