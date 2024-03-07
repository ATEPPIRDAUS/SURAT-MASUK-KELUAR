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
$no = $_GET['id'];
$query = mysqli_query($konek, "SELECT * FROM data_surat WHERE no='$no'");
while ($a = mysqli_fetch_array($query)){

  ?>
  <h3 class="text-center"><B>EDIT SURAT </B></h3>
 
 <div class="container" style="width: 500px;">
 <form action="edit_proses.php" target="konten" method="post"> 
 
 
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">tanggal masuk surat</label>
     <input type="date" name="tglsuratmsk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $a['tgl_masuk_surat'] ?>">
     <input type="hidden" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $a['no'] ?>">
   
   </div>
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">asal surat</label>
     <input type="text" name="asalsurat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $a ['asal_surat'] ?>">
     
 
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">nomor surat</label>
     <input type="text" name="nomorsurat" class="form-control" id="exampleInputPassword1" value="<?php echo $a ['nomor_surat'] ?>">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">tanggal surat</label>
     <input type="date" name="tglsurat" class="form-control" id="exampleInputPassword1" value="<?php echo $a ['tanggal_surat'] ?>">
   </div>
 
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">perihal</label>
    <textarea name="perihal" class="form-control" name="" id="" cols="30" rows="10">
        <?php echo $a['perihal'] ?>
    </textarea >
   </div>
 
   
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">diteruskan kepada</label>
     <input type="text" name="diteruskankpd" class="form-control" id="exampleInputPassword1" value="<?php echo $a ['diteruskan_kepada'] ?>">
   </div>
 
   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <button class="btn btn-primary me-md-2" type="submit">Perbarui</button>
   
 </div>
 
 
   
  
 </form>
 
 </div>

<?php

}
?>