<?php
$ambil = $koneksi->query("SELECT * FROM souvenir WHERE id_souvenir='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotosouvenir = $pecah['fotosouvenir'];
if (file_exists("../fotosouvenir/$fotosouvenir")) {
	unlink("../fotosouvenir/$fotosouvenir");
}

$koneksi->query("DELETE FROM souvenir WHERE id_souvenir='$_GET[id]'");

echo "<script>alert('souvenir terhapus');</script>";
echo "<script>location='index.php?halaman=souvenir';</script>"
?>