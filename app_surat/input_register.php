<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:register.php");
  }
?>
<?php
    include "boot.php";
    include "koneksi.php";
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $level       = $_POST['level'];
    $tampung= $konek -> query("insert user  values ('','$username','$password', '$level',')");
?>

<script>
    document.location.href='register.php';
</script>