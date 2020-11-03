<?php
$ambil = $koneksi->query("SELECT * FROM transportasi WHERE id_transportasi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fototransportasi = $pecah['foto_transportasi'];
if (file_exists("../foto_transportasi/$fototransportasi")) {
	unlink("../foto_transportasi/$fototransportasi");
}

$koneksi->query("DELETE FROM transportasi WHERE id_transportasi='$_GET[id]'");

echo "<script>alert('Transportasi terhapus');</script>";
echo "<script>location='index.php?halaman=transportasi';</script>"
?>