<head>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>


<h2>Detail Pembelian</h2>

<?php

$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");

$detail = $ambil->fetch_assoc();
?>


<p>
	tanggal :<?php echo $detail['tanggal_pembelian'];?> <br>
	total :<?php echo $detail['total_pembelian'];?> <br>
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'");?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_produk'];?></td>
			<td><?php echo $pecah['harga_produk'];?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td>
				<?php echo $pecah['harga_produk']*$pecah['jumlah'];?>
			</td>
			
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>