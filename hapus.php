<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM aset WHERE id=$id");
header("Location: return.php");
