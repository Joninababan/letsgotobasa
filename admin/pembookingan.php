

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


<h2 style="color: grey">Data Booking Transportasi</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Nama Transportasi</th>
			
			<th>Lokasi</th>
			<th>Tanggal Berangkat</th>
			<th>Tanggal kembali</th>
			<th>Status</th>
			<th></th>		
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM booking JOIN pelanggan ON booking.nama_pelanggan=pelanggan.nama_pelanggan JOIN transportasi ON booking.id_transportasi=transportasi.id_transportasi");?>
		
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['nama_transportasi']; ?></td>
			<td><?php echo $pecah['lokasi']; ?></td>
			
			<td><?php echo $pecah['daritanggal']; ?></td>
			<td><?php echo $pecah['sampaitanggal']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
		
			<td>
				<a href="index.php?halaman=konfirmasi&id=<?php echo $pecah['id'];?>"><button type="button" class="btn btn-success" name="konfirmasi">Konfirmasi</button>
				</a>
			</td>
			<td>
				<a href="index.php?halaman=detailpembayaran&id=<?php echo $pecah['id'];?>"><button type="button" class="btn btn-info" name="konfirmasi">Detail Pembayaran</button>
				</a>
			</td>
		
		</tr>
		<?php $nomor++; ?>
		<?php }?>
	</tbody>

</table>	


 