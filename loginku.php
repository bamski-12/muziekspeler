<?php
error_reporting(1);
  ob_start();

session_start ();
include 'connection.php';
  date_default_timezone_set('Asia/Jakarta')

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login skuy</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body> 
  

    <marquee> <font color="white"> <?php echo date('d-M-Y'); ?> "<?php echo date("H:i");?>" &nbsp; Welcome and enjoying to listen my Music</font> </marquee>
     
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <font color="lightblue" size="4">
                 FORM LOGIN </font> 

              <p> <font color="lightblue" size="4"> TESTING MEDIA AUDIO PLAYER
              </font></p>
               
                <h5> <font color="white"> ( Silahkan Login terlebih dahulu ) </font> </h5>
                 <br />
            </div>
        </div>
    <div class="row ">
       <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
        <strong> Masuk Untuk Login </strong>  
          </div>
           <div class="panel-body">
            <form role="form" method="POST" action="proseslogin.php">
           <br />
            <label>Username </label>
            <div class="form-group input-group">
              
          <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <input type="text" class="form-control" name="username" placeholder="username" />
               </div>
               <label>Password</label>
                 <div class="form-group input-group">
                  
               <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
             
                <input type="password" class="form-control" name="password" placeholder="************" />
                  </div>
                  <div class="form-group">
                 <span class="pull-right">
                     
               </span>
                </div>
                 <button class="btn btn-primary" name="login">Login </button> 
                          
            
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
<?php

if (isset($_POST['loginku'])) {

  $username=$_POST['username'];
  $password=$_POST['password'];

  $ambil = $koneksi->query("SELECT * FROM db_ta WHERE username='$username' and password='$password'");
  $data =$ambil->fetch_assoc();
  $ketemu = $ambil->num_rows;

  if($ketemu >=1){
                                    
    session_start();
    
    $_SESSION['username'] = $data ['username'];
    //$_SESSION['password'] = $data['password'];
    
        
    }
            ?>
                <script type="text/javascript">
                    alert("Login Gagal Username dan Password Salah.. Silahkan Ulangi Lagi");
                </script>
            <?php
        }


?>