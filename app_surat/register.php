<?php
include "boot.php";


?>

<div class="row">
  <div class="col">

  



        </form>
        </div>
  </div>
  <div class="col col-6">
  <div class="container ms-7 mt-4">
 

  <?php
include "koneksi.php";
if (isset($_POST['daftar'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $input=$konek ->query ("insert into user (username,password,level) values ('$username','$password','admin')");


}
?>     


<?php
  include "boot.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>

<table class="table ">
  <thead class=" table-success">
    <tr >
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">level</th>
      <th scope="col">edit</th>
      <th scope="col">hapus</th>
    </tr>
    <?php 
    include "boot.php";
    include "koneksi.php";
    $reg=$konek->query("select * from user");
    while ($data=$reg->fetch_array()){
?>
      <tr>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['level'] ?></td>
            <td><a href="useredit.php?id=<?php echo $data['id']?>"><button type="submit" class="btn btn-warning"><i class="bi bi-pencil"></i></button></td>
            <td><a href="userhapus.php?id=<?php echo $data['id']?>"><button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
          </tr>
      <?php
    }
      
      ?>

  </div>
</div>