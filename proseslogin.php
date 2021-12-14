<?php

include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$cek      = mysqli_query($koneksi, "SELECT * FROM db_ta WHERE username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);

 
if($result>0){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
    
        echo "<script> alert('Welcome to my Project.');document.location.href='index.php'</script>";      

    }
     

   else {
        echo  "<script> alert('password atau username salah, Ulangi Login ');document.location.href='loginku.php'</script>";
    }
     

?>


