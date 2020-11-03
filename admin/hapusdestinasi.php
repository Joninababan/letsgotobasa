<?php
$ambil = $koneksi->query("SELECT * FROM destinasi WHERE id_destinasi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotodestinasi = $pecah['foto_destinasi'];
if (file_exists("../foto_destinasi/$fotodestinasi")) {
	unlink("../foto_destinasi/$fotodestinasi");
}

$koneksi->query("DELETE FROM destinasi WHERE id_destinasi ='$_GET[id]'");

echo "<script>alert('destinasi terhapus');</script>";
echo "<script>location='index.php?halaman=destinasi';</script>"


?>