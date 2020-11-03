<head>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>

<h2>Data Souvenir</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Deskripsi</th>
			<th>Foto</th>
			<th>Buka</th>
			<th>Map</th>
			<th>Edit</th>		
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM souvenir");?>
		<?php while($pecah = $ambil->fetch_assoc())  {  ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['namaTempat']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td><?php echo $pecah['deskripsi']; ?></td>
			<td>
				<img src="../fotosouvenir/<?php echo $pecah['fotosouvenir']; ?>" width="100">
			</td>
			<td><?php echo $pecah['buka']; ?></td>
			<td><?php echo $pecah['map']; ?></td>
			<td>
				<a href="index.php?halaman=hapussouvenir&id=<?php echo $pecah['idsouvenir'];?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
				</a>

				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>
<a href="index.php?halaman=tambahsouvenir" class="btn btn-primary">Tambah Data</a>