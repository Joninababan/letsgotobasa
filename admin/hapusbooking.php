<?php
$ambil = $koneksi->query("SELECT * FROM booking WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotokuliner = $pecah['foto_kuliner'];
if (file_exists("../foto_kuliner/$fotokuliner")) {
	unlink("../foto_kuliner/$fotokuliner");
}

$koneksi->query("DELETE FROM kulinerr WHERE idKuliner ='$_GET[id]'");

echo "<script>alert('kuliner terhapus');</script>";
echo "<script>location='index.php?halaman=kuliner';</script>"
?>