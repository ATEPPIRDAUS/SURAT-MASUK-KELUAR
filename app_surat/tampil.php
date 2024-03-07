<body background="putih.jpg" style="background-size:cover;"></body>
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
?>
<h3 class="text-center"><B>SURAT KELUAR</B></h3>
<div class="col-5">
<form class="d-flex" role="search" action="" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" name="pilari" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
<table class="table ">
  <thead class=" table-success">
    <tr >
      <th scope="col">no</th>
      <th scope="col">tanggal masuk surat</th>
      <th scope="col">asal surat</th>
      <th scope="col">nomor surat</th>
      <th scope="col">tanggal surat</th>
      <th scope="col">perihal</th>
      <th scope="col">diteruskan kepada</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <tbody>
<?php
@$cari=$_POST['pilari'];

include "koneksi.php";
$tampil=$konek->query("select * from data_surat where asal_surat like '%$cari%' or nomor_surat like '%$cari%' order by no desc");
while ($data=$tampil->fetch_array()){
  @$no++;
  
      ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['tgl_masuk_surat'] ?></td>
            <td><?php echo $data['asal_surat'] ?></td>
            <td><?php echo $data['nomor_surat'] ?></td>
            <td><?php echo $data['tanggal_surat'] ?></td>
            <td><?php echo $data['perihal'] ?></td>
            <td><?php echo $data['diteruskan_kepada'] ?></td>
            <td><a href="edit.php?id=<?php echo $data['no']?>"><button type="submit" class="btn btn-warning"><i class="bi bi-pencil"></i></button></td>
            <td><a href="delete.php?id=<?php echo $data['no']?>"><button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
          </tr>
      <?php
        }
      
      ?>
    
    
  </tbody>
</table>
