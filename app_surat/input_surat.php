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
    $tgls               = $_POST['tglsuratmsk'];
    $asal_surat         = $_POST['asalsurat'];
    $nomor_surat        = $_POST['nomorsurat'];
    $tanggal_surat      = $_POST['tglsurat'];
    $perihal            = $_POST['perihal'];
    $diteruskan_kepada  = $_POST['diteruskankpd'];
    $tampung= $konek -> query("insert into data_surat  values ('','$tgls','$asal_surat', '$nomor_surat', '$tanggal_surat','$perihal','$diteruskan_kepada')");
?>

<script>
    document.location.href='tampil.php';
</script>