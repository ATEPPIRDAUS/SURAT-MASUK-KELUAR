<body background="hijau.jpg" style="background-size:cover;"></body>
<?php
include "boot.php";


?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="ikon_surat.jpg"
          class="img-fluid" alt="Sample image">
        

      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="proses_login.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3 text-light">Silahkan Login Terlebih Dahulu</p>
            
          </div>
        

          <div class="divider d-flex align-items-center my-4">
            
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid Username" name="username" required/>
            <label class="form-label text-light" for="form3Example3">username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password" required/>
            <label class="form-label text-light" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
             
              <label class="form-check-label" for="form2Example3">
            
              </label>
           
       
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-success btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              </form>
          <br><br>
              <form action="index.php">
              <button type="submit" class="btn btn-success btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">back</button>
              </form>

        </li>
             
           
          </div>

       
      </div>
  </div>
  
</section>