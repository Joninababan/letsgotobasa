<head>
	<style type="text/css">
		
	</style>
</head>

<h2>Data Pembayaran</h2>

<?php 

//mendapatkan id_pembelian dari url
$id_pembayaran = $_GET["id"];


//mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembayaranbooking WHERE id_pembayaran ='$id_pembayaran' ");
$detail = $ambil->fetch_assoc();

?>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td><?php echo $detail['nama'] ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?php echo $detail['bank'] ?></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>Rp. <?php echo number_format($detail['jumlah']) ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td><?php echo $detail['tanggal'] ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../bukti_pembayaran/<?php echo $detail['bukti']; ?>" alt="" class="img-responsive">
	</div>
</div>

<form method="post">

	<a href="index.php?halaman=pembookingan"  name="proses">Kembali
</form>

