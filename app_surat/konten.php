<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>
<?php include "boot.php"; ?>
<img src="upi.jpg" class="rounded mx-auto d-block" alt="..." width="1350" height="800">


