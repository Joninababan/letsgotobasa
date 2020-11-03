<?php
session_start();
$koneksi = new mysqli("localhost","root","","letsgotobasa");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Let'sGoToba</title>
  
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    


  
    
    <link rel="stylesheet" href="../login/css/menu.css"/>
    <link rel="stylesheet" href="../login/css/main.css"/>
    <link rel="stylesheet" href="../login/css/bgimg.css"/>
    <link rel="stylesheet" href="../login/css/font.css"/>
    <link rel="stylesheet" href="../login/css/font-awesome.min.css"/>
    <script type="text/javascript" src="../login/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../login/js/main.js"></script>



    <style type="text/css">
      body{
    background-image : url('../danau.jpg');      
  background-repeat: no-repeat;
  background-size: 100%;
  background-color: grey;
}
    table{
      border: 1px;
      background-color: 
    }
    .container {
  width: 100%;
  padding-right: 0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }
      
    </style>

  </head>
<body>
      <div class="login-form-container" id="login-form">
      <br>
    <div class="login-form-content">
      <div class="login-form-header">
      
        <h3>Login</h3>
      </div>
      <form method="post" action="" class="login-form">
        <div class="input-container">
          <i class="fa fa-user"></i>
          <input type="text" class="input" name="user" placeholder="Username"/>
        </div>
        <div class="input-container">
          <i class="fa fa-lock"></i>
          <input type="password"  id="login-password" class="input" name="pass" placeholder="Password"/>
          <i id="show-password" class="fa fa-eye"></i>
        </div>
        <input type="submit" name="login" value="Login" class="button" style="background-color: #006400"" />
      
      </form>
      
    </div>

  </div>
                   </form>

         <?php
         if (isset($_POST['login'])) {
          $ambil = $koneksi->query("SELECT * FROM admin WHERE username = '$_POST[user]' AND password = '$_POST[pass]'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1) 
          {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login Sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";  
          }
          else
          {
           echo "<div class='alert alert-info'>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
          }
         }
         ?>
       </div>

     </div>
   </div>


 </div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>
