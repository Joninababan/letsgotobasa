<head>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
	<style>table {
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
<h2 style="color: grey">Data Kuliner</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kontak</th>
			
			<th>Foto</th>
			
			<th>Map</th>
			<th></th>		
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM kulinerr");?>
		<?php while($pecah = $ambil->fetch_assoc())  {  ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['namatTempat']; ?></td>
			<td width="20px"><?php echo $pecah['Alamat']; ?></td>
			<td><?php echo $pecah['kontak']; ?></td>
			
			<td>
				<img src="../foto_kuliner/<?php echo $pecah['foto_kuliner']; ?>" width="100">
			</td>
		
			<td><?php echo $pecah['map']; ?></td>
			<td>
				<a href="index.php?halaman=hapuskuliner&id=<?php echo $pecah['idKuliner'];?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
				</a>

				<a href="index.php?halaman=ubahkuliner&id=<?php echo $pecah['idKuliner'];?>"><button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button>
				</a>

				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>
<a href="index.php?halaman=tambahkuliner" class="btn btn-primary" style="float: right">Tambah Data</a>
<br>
<br>
<br>
<br>

