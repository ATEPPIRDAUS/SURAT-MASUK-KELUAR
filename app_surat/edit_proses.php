<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>
<?php 
    include "boot.php"; 
    include "koneksi.php";
    $no = $_GET["id"];
    $delete =mysqli_query($konek,"DELETE FROM data_surat WHERE no='$no'");
?>
<script>
    document.location.href='tampil.php';
</script>
