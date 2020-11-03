
<head>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
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
</head>

<h2 style="color: grey">Transportasi</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama mobil</th>
			<th>Brand</th>
			<th>Tempat duduk</th>
			<th>Plat</th>
		
			<th>Harga</th>
			<th>Foto</th>
			<th>Pilihan</th>
					
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM transportasi");?>
		<?php while($pecah = $ambil->fetch_assoc())  {  ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			
		
			
			<td><?php echo $pecah['nama_transportasi']; ?></td>
			<td><?php echo $pecah['brand']; ?></td>
			
			
			<td><?php echo $pecah['tempat_duduk_transportasi']; ?></td>
			<td><?php echo $pecah['plat_transportasi']; ?></td>
			
			<td><?php echo $pecah['harga_transportasi']; ?></td>
			
			<td>
				<img src="../foto_transportasi/<?php echo $pecah['foto_transportasi']; ?>" width="100" height="70">
			</td>
			<td>
				<a href="index.php?halaman=hapustransportasi&id=<?php echo $pecah['id_transportasi'];?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
				</a>

				<a href="index.php?halaman=ubahtransportasi&id=<?php echo $pecah['id_transportasi'];?>"><button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button>
				</a>

				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>
<a href="index.php?halaman=tambahtransportasi" class="btn btn-primary" style="float: right">Tambah Data</a>