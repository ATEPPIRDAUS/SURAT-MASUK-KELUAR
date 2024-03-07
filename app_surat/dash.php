
<?php
  include "boot.php";
  session_start();

  if($_SESSION['status']!="login"){
   
    header("location:index.php");
  }else{
    $username=$_SESSION['username'];
    
  }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
<div class="row">
  <div class="col col-2">
    <a class="navbar-brand ms-5" href="#"><img src="logoo.png" width="100" height="100" alt=""></a>
    
    </div>

    <div class="col col-9">
    <h1 class="text-start  text-light" >ADMINISTRASI SURAT MASUK UNIVERSITAS PENDIDIKAN INDONESIA</h1>
    </div>
  
  </div>
   
</nav>
<!-- tutup header -->
<div class="row">
<!-- side -->
<!-- Example single danger button -->
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="" target="index1.php">HOME</a>
        </li>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="input.php" target="konten">ISI DATA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil.php" target="konten">TAMPIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekap.php" target="konten">REKAP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="#" data-bs-target="#">𝐚𝐧𝐝𝐚 𝐋𝐨𝐠𝐢𝐧 𝐬𝐞𝐛𝐚𝐠𝐚𝐢 <?=$username?></a>
        </li>
     <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Yakin Ingin Keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <a href="logout.php" type="button" class="btn btn-primary">Ya</a>
      </div>
    </div>
  </div>
</div>
      </ul>
      
    </div>
  </div>
</nav>



<!-- <button type="button" class="btn btn-dark">Isi Data</button>
<button type="button" class="btn btn-dark">Tampil</button>
<button type="button" class="btn btn-dark">Rekap</button>
<button type="button" class="btn btn-dark">Logout</button> --> 


</div>
<!-- tutup side -->
<!-- content -->
<div class="container">

<div class="col bg-warning mt-2">
<!-- <img src="icon.jpg" alt="" width="100%"> -->
  <iframe src="konten.php" name="konten" frameborder="0" width="100%" height="800"></iframe>
</div>
<!-- tutup content -->
</div>
</div>
</div>


