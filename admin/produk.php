<style type="text/css">
	table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0B6B8A;
  color: white;
}
</style>

<head>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>


<h2 style="color:grey">Souvenir</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Stok</th>
			<th>Foto</th>
			<th></th>
					
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM produk");?>
		<?php while($pecah = $ambil->fetch_assoc())  {  ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['berat_produk']; ?></td>
			<td><?php echo $pecah['stok_produk']; ?></td>
			
			
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
				</a>

				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>"><button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button>
				</a>

				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>
<a  href="index.php?halaman=tambahproduk" class="btn btn-primary" style="float: right">Tambah Data</a>