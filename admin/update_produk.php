<?php 
  $koneksi = mysqli_connect('localhost', 'root', '', 'letsgotobasa');

  $nama = $_POST['nama_produk'];
  $harga = $_POST['harga_produk'];
  $stok = $_POST['stok_produkad_produk'];

  if($nama == 0 && $harga > 0){
    $query = mysqli_query($koneksi, "UPDATE produk SET harga_produk='$harga' WHERE id_produk='$id' ");
      if($query){
        echo'
        <script>
        alert("harga telah diupdate");
        window.location = "produk.php";
        </script>
        ';
      }
  }else if($nama > 0 && $harga > 0){
    $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', harga_produk='$harga' WHERE id_produk='$id' ");
    if($query){
      echo'
      <script>
      alert("Data telah diupdate");
      window.location = "produk.php";
      </script>
      ';
    }
  }else if($nama > 0 && $harga == 0){
    $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama' WHERE id_produk='$id' ");
    if($query){
      echo'
      <script>
      alert("Nama telah diupdate");
      window.location = "admin/produk.php";
      </script>
      ';
    }
  }  else{
      echo'
      <script>
      alert("Form Tidak boleh kosong !");
      window.location = "produk.php";
      </script>
      ';
    }

 ?>