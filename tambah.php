<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $nama  = $_POST['nama'];
  $harga = $_POST['harga'];
  $stok  = $_POST['stok'];

  // Ganti nama tabel ke 'aset'
  mysqli_query($conn, "INSERT INTO aset (Nama_barang, harga, stok) VALUES ('$nama', '$harga', '$stok')") or die(mysqli_error($conn));
  header("Location: return.php");
}
?>


<h2>Tambah Barang</h2>
<form method="POST">
  Nama user: <input type="text" name="nama"><br><br>
  Alamat: <input type="text" name="harga"><br><br>
  Rating: <input type="number" name="stok"><br><br>
  <input type="submit" name="submit" value="Simpan">
</form>