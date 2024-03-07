<body background="putih.jpg" style="background-size:cover;"></body>
<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>
<?php include "boot.php"; ?>
<body style="background-size: cover; background-image:url('.jpg');">
  
</body>

<h3 class="text-center"><B>𝙄𝙉𝙋𝙐𝙏 𝙎𝙐𝙍𝘼𝙏 </B></h3>
 
<div class="container" style="width: 500px;">
<form action="input_surat.php" target="konten" method="post"> 


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">𝗧𝗮𝗻𝗴𝗴𝗮𝗹 𝗠𝗮𝘀𝘂𝗸 𝗦𝘂𝗿𝗮𝘁</label>
    <input type="date" name="tglsuratmsk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">𝐀𝐬𝐚𝐥 𝐒𝐮𝐫𝐚𝐭</label>
    <input type="text" name="asalsurat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">𝐍𝐨𝐦𝐨𝐫 𝐒𝐮𝐫𝐚𝐭</label>
    <input type="text" name="nomorsurat" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">𝐓𝐚𝐧𝐠𝐠𝐚𝐥 𝐒𝐮𝐫𝐚𝐭</label>
    <input type="date" name="tglsurat" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">𝐏𝐞𝐫𝐢𝐡𝐚𝐥</label>
   <textarea name="perihal" class="form-control" name="" id="" cols="30" rows="10"></textarea required>
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">𝐃𝐢𝐭𝐞𝐫𝐮𝐬𝐤𝐚𝐧 𝐊𝐞𝐩𝐚𝐝𝐚</label>
    <input type="text" name="diteruskankpd" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
  
</div>


  
 
</form>

</div>
<br>
<br>