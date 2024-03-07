<body background="putih.jpg" style="background-size:cover;"></body>
<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>
<?php include "boot.php"; ?>
<h3 class="text-center"><B>REKAP SURAT</B></h3>
<div class="col">
  <form class="d-flek" role="search" method="post" action="">
    Dari tgl <input name="awal" class="form-control me-2" type="date" placeholder="search" aria-label="search" style="width:300px;">
    Sampai tgl <input name="akhir" class="form-control mb-3" type="date" placeholder="search" aria-label="search" style="width:300px;">
    <button class="btn btn-dark shadow border-warning" type="submit">Search</button>
    <div class="text-end">

      <button name="" onclick="printDIV('print')"value="print"><i class="bi bi-printer-fill"></i></button>
    </div>
    <form>
    <div class="container" style="width: 400px;">
        <div class="mb-3">
           
            
            </form>

          </div>
        </div>
        <fieldset id="print">
     
   
    <table class="table ">
      <thead class=" table-success">
        <tr >
          <th scope="col">no</th>
          <th scope="col">no surat</th>
          <th scope="col">tanggal masuk surat</th>
          <th scope="col">asal surat</th>
          <th scope="col">tanggal surat</th>
          <th scope="col">perihal</th>
          <th scope="col">diteruskan kepada</th>
        </tr>
      </thead>
      <?php include "koneksi.php";
      @$search=$_POST['awal'];
      if ($search==""){
        $tampil=$konek->query("select * from data_surat ");
        while($data=$tampil->fetch_array()){
          @$no++
          ?>

      
      <tbody class="table">
      <tr>   
        <td><?php echo $no;?></td>
        <td><?php echo $data['nomor_surat'] ?></td>
        <td><?php echo $data['tgl_masuk_surat'] ?></td>
        <td><?php echo $data['asal_surat'] ?></td>
        <td><?php echo $data['tanggal_surat'] ?></td>
        <td><?php echo $data['perihal'] ?></td>
        <td><?php echo $data['diteruskan_kepada'] ?></td>
      <?php
        }
      }else{
        $tampil=$konek->query("select * FROM data_surat where tgl_masuk_surat between '$_POST[awal]' and '$_POST[akhir]'");
        while ($data=$tampil ->fetch_array()){
          @$no++
          ?>
           <tbody class="table">
      <tr> 
      <td><?php echo $no?></td>  
        <td><?php echo $data['nomor_surat'] ?></td>
        <td><?php echo $data['tgl_masuk_surat'] ?></td>
        <td><?php echo $data['asal_surat'] ?></td>
        <td><?php echo $data['tanggal_surat'] ?></td>
        <td><?php echo $data['perihal'] ?></td>
        <td><?php echo $data['diteruskan_kepada'] ?></td>
          <?php
        }
      }
      ?>
      </tr>
  </tbody>
  </tbody>
</table>
</fieldset>
<script type="text/javascript">
function printDIV (el){
	var a = document.body.innerHTML;
	var b = document.getElementById(el).innerHTML;
	document.body.innerHTML=b;
	window.print();
	document.body.innerHTML=a;
}
</script>