<?php
include "../koneksi.php";
$id = $_GET['id'];
$koneksi = mysqli_connect("localhost", "root", "", "zpengaduan_masyarakat");
$koneksi->query("delete from pengaduan where id_pengaduan='$id");

header("location:laporan.php");

?>