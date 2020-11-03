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

<h2 style="color: grey">User</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th></th>		
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM pelanggan");?>
		
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td><?php echo $pecah['telepon_pelanggan']; ?></td>
			<td><?php echo $pecah['alamat_pelanggan']; ?></td>
			<td>
				<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>	