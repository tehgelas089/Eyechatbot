<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM aset WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
  $nama  = $_POST['nama'];
  $harga = $_POST['harga'];
  $stok  = $_POST['stok'];

  mysqli_query($conn, "UPDATE aset SET nama_barang='$nama', harga='$harga', stok='$stok' WHERE id=$id");
  header("Location: return.php");
}
?>
<h2>Edit Barang</h2>
<form method="POST">
  Nama user: <input type="text" name="nama" value="<?= $row['Nama_barang']; ?>"><br><br>
  Alamat: <input type="text" name="harga" value="<?= $row['harga']; ?>"><br><br>
  Rating 1-10: <input type="number" name="stok" value="<?= $row['stok']; ?>"><br><br>
  <input type="submit" name="submit" value="Update">
</form>