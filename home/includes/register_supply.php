

<?php

  if (isset($_POST['create_account'])) {
    $user_fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_description = $_POST['user_description'];
    $user_role = 'Supplier';
    $user_image = $_FILES['image']['name'];
    $user_image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($user_image_temp, "assets/img/users/$user_image");

    $query = "INSERT INTO `users` ( `user_fullname`, `username`, `user_email`, `user_password`, `user_role`, `user_description`,`user_image`) 
    VALUES ('$user_fullname', '$username', '$user_email', '$user_password', '$user_role', '$user_description','$user_image')";

    $add_user = mysqli_query($connection, $query);

    header("location: ./index.php?page=login");


  }

?>



  <main>
    <div class="container " data-aos="fade-up" data-aos-delay="100">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>             
                  </div>

                  <div class="text-center ">
                    <small class="text-center pb-0 fs-6 ">Supplier Account</small>                  
                  </div>

                  <form class="row g-3 needs-validation"validate method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                     <label for="user_image">Profile image</label>
                     <input type="file" name="image" class="form-control" required>
                  </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Full Name</label>
                      <input type="text" name="fullname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    
                    <div class="col-12">
                    
                       <textarea name="user_description" id="" cols="30" rows="10" class="form-control" required></textarea>
                        <label class="form-label" for="user_description">Tell us about yourself <br>  <small class="text-center">(Reason for joining solutions)</small></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit"  name="create_account">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="index.php?page=login">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->