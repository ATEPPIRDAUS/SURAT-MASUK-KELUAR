<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>
<?php
    session_start();
    session_destroy();
    header('location:index.php');
?>
