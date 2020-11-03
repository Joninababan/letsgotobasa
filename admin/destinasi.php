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

<h2 style="color: grey">Destinasi</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kabupaten</th>
			<th>Foto</th>
			<th>Map</th>
		
					
		</tr>
	</thead>
	<tbody>
	

		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM destinasi");?>
		<?php while($pecah = $ambil->fetch_assoc())  {  ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_destinasi']; ?></td>
			<td><?php echo $pecah['nama_kabupaten']; ?></td>
			
			
			<td>
				<img src="../foto_destinasi/<?php echo $pecah['foto_destinasi']; ?>" width="100">
			</td><td><?php echo $pecah['map']; ?></td>
		
	
			
			
			<td>
				<a href="index.php?halaman=hapusdestinasi&id=<?php echo $pecah['id_destinasi'];?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
				</a>

				<a href="index.php?halaman=ubahdestinasi&id=<?php echo $pecah['id_destinasi'];?>"><button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button>
				</a>
				
				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>
<a href="index.php?halaman=tambahdestinasi" class="btn btn-primary">Tambah Data</a>