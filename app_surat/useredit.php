<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }

include "koneksi.php";
$no = $_GET['id'];
$query = mysqli_query($konek, "SELECT * FROM user WHERE id='$no'");
while ($a = mysqli_fetch_array($query)){

  ?>
  <h3 class="text-center"><B>EDIT PASSWORD</B></h3>
 
 <div class="container" style="width: 500px;">
 <form action="" method="GET"> 
 
 
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">username</label>
     <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $a['username'] ?>">
     <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $a['id'] ?>">
   
   </div>
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">password</label>
     <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $a ['password'] ?>">
     

   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <button class="btn btn-primary me-md-2" type="submit"name="useredit">Perbarui</button>
   
 </div> 
 </form>
 </div>
<?php
}
?>


<?php
if (isset($_GET['useredit'])){
    $id              = $_GET['id'];
    $username        = $_GET['username'];
    $password        = $_GET['password'];
    $tampung= $konek -> query("UPDATE user SET  username='$username', password='$password' WHERE id ='$id' ");
    var_dump($tampung);

?>
<script>
    document.location.href='register.php';
</script>

<?php
}
?>
