<?php

if (isset($_POST['login']) ) {

  $username =  $_POST['username'];
  $password =   $_POST['password'];


 $username = mysqli_real_escape_string($connection, $username);
 $password = mysqli_real_escape_string($connection, $password);

 $query = "SELECT * FROM users WHERE username = '$username' ";

 $select_user_query = mysqli_query($connection, $query);

 while ($row = mysqli_fetch_assoc($select_user_query)){

  $db_user_id = $row['user_id'];
  $db_user_fullname = $row['user_fullname'];
  $db_username = $row['username'];
  $db_user_role = $row['user_role'];
  $db_user_password = $row['user_password'];
  $db_user_image = $row['user_image'];


 }
echo  $db_user_id;
 if ($username === $db_username &&  $password === $db_user_password) {
  $_SESSION['id'] = $db_user_id;
  $_SESSION['username'] = $db_username;
  $_SESSION['firstname'] = $db_db_user_firstname;
  $_SESSION['lastname'] = $db_db_user_lastname;
  $_SESSION['user_role'] = $db_user_role;
  $_SESSION['user_image'] = $db_user_image;



  header("Location: ../admin");
  
 }else {
  header("Location: ./index.php");
 }

}

?>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" action="" method="post" validate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="index.php?page=services">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

           
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>