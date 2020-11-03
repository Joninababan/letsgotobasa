<?php
session_start();

$koneksi = new mysqli("localhost","root","","letsgotobasa");

if (!isset($_SESSION['admin'])) 
{
	echo "<script>alert('Anda harus login');</script>";
	echo "<script>location='login.php'</script>";
	header('location:login.php');
	exit();
}


?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Let'sGoToba</title>
	




  

     <link rel="stylesheet" type="text/css" href="adm/plugin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="adm/css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/admin.css">






<style type="text/css">
  #sideLeft{
    background-color: ;
  }
  .navbar-dark{
    background-color: #0B6B8A;
    height : 80px;
  }
  #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0B6B8A;
  color: white;
}
</style>

</head>



<header class="py-9 navbar-dark">
      <div class="container">
       
        <p class="m-0 text-center text-white"></p>
      </div>
       <a class="navbar-brand" href="index.php"><img src="../anj.jpg" height="55" ></a>
      <!-- /.container -->
    </header>

<body>

    <div class="container-fluid">
      
      <div class="row">

        <div class="col-xs-2" id="sideLeft" >

                
              <ul class="nav" id="main-menu">
				<li class="text-center">
          <Br>
					
                    <li><a   href="index.php?halaman=home"></i>Home</a></li> 
                    <li><a   href="index.php?halaman=destinasi">Destinasi</a></li>
                    
                    <li><a   href="index.php?halaman=transportasi">Transportasi</a></li>
                    <li><a   href="index.php?halaman=produk"></i> Souvenir</a></li>
                    <li><a   href="index.php?halaman=kuliner"></i> Kuliner</a></li>
                    <li><a   href="index.php?halaman=pembookingan"></i>Booking</a></li>
                    <li><a   href="index.php?halaman=pembelian"></i>Pembelian</a></li>
                    <li><a   href="index.php?halaman=pelanggan"></i>User</a></li>
                    <li><a   href="index.php?halaman=logout"></i> Logout</a></li>

                  

                      
               	
                </ul>
               
            </div>
            
        <div class="col-xs-10" " >
<?php
if (isset($_GET['halaman']))
{
	if ($_GET['halaman'] == "produk")
	{
		include 'produk.php';
	}
	else if($_GET['halaman'] == "pembelian")
	{
		include 'pembelian.php';
	}
  else if($_GET['halaman'] == "destinasi")
  {
    include 'destinasi.php';
  }
  else if($_GET['halaman'] == "transportasi")
  {
    include 'transportasi.php';
  }
	else if($_GET['halaman'] == "pelanggan")
	{
		include 'pelanggan.php';
	}
	else if($_GET['halaman'] == "detail")
	{
		include 'detail.php';
	}
	else if($_GET['halaman'] == "tambahproduk")
	{
		include 'tambahproduk.php';
	}
	else if($_GET['halaman'] == "hapusproduk")
	{
		include 'hapusproduk.php';
	}
	else if($_GET['halaman'] == "logout")
	{
		include 'logout.php';
	}
  else if($_GET['halaman'] == "kuliner")
  {
    include 'kuliner.php';
  }
  else if($_GET['halaman'] == "tambahkuliner")
  {
    include 'tambahkuliner.php';
  }
	 else if($_GET['halaman'] == "hapuskuliner")
  {
    include 'hapuskuliner.php';
  }
  else if($_GET['halaman'] == "souvenir")
  {
    include 'souvenir.php';
  }
  else if($_GET['halaman'] == "tambahdestinasi")
  {
    include 'tambahdestinasi.php';
  }
  else if($_GET['halaman'] == "tambahsouvenir")
  {
    include 'tambahsouvenir.php';
  }
   else if($_GET['halaman'] == "hapussouvenir")
  {
    include 'hapussouvenir.php';
  }
  
   else if($_GET['halaman'] == "tambahtransportasi")
  {
    include 'tambahtransportasi.php';
  }
  else if($_GET['halaman'] == "hapustransportasi")
  {
    include 'hapustransportasi.php';
  }
   else if($_GET['halaman'] == "pembookingan")
  {
    include 'pembookingan.php';
  }
   else if($_GET['halaman'] == "konfirmasi")
  {
    include 'konfirmasi.php';
  }
   else if($_GET['halaman'] == "hapusdestinasi")
  {
    include 'hapusdestinasi.php';
  }
   else if($_GET['halaman'] == "ubahkuliner")
  {
    include 'ubahkuliner.php';
  }
  else if($_GET['halaman'] == "ubahdestinasi")
  {
    include 'ubahdestinasi.php';
  } 
  else if($_GET['halaman'] == "ubahtransportasi")
  {
    include 'ubahtransportasi.php';
  }
  else if($_GET['halaman'] == "ubahproduk")
  {
    include 'ubahproduk.php';
  }
   else if($_GET['halaman'] == "pembayaran")
  {
    include 'pembayaran.php';
  }
   else if($_GET['halaman'] == "detailpembayaran")
  {
    include 'detailpembayaran.php';
  }
   
   


	}

	


else{
	include 'home.php';
}
?>

<br>
<br>
<br>

              
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


    <script type="text/javascript" src="adm/plugin/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="adm/plugin/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    
   
</body>
</html>





