<?php

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];

       
    }

    if (isset($_POST['send_message'])) {

        $sender_id = $_SESSION['id'];
        $reciever_id = $_GET['user_id'];
      echo  $message_body = $_POST['message_body'];
       


       $query ="INSERT INTO `message` (`sender_id`, `reciever_id`, `message_body`)
        VALUES ( '$sender_id', '$reciever_id', '$message_body')";

        $send_message = mysqli_query($connection, $query);

    }
?>





<main id="main" class="main">

<?php


$query = "SELECT * FROM users WHERE `users`.`user_id` = $user_id ";

$user_details = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($user_details)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_fullname = $row['user_fullname'];
            $user_email = $row['user_email'];
            $user_description = $row['user_description'];
            $user_role = $row['user_role'];
            $user_image = $row['user_image'];
?>

    <div class="pagetitle">
    <h1>Profile</h1>
    
    </div><!-- End Page Title -->

    <section class="section profile">
    <div class="row">
        <div class="col-xl-4">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/img/users/<?php echo $user_image?>" alt="Profile" class="rounded-circle">
            <h2><?php echo $username ?></h2>
            <h3><?php echo $user_role ?></h3>
            <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>

        </div>

        <div class="col-xl-12">

        <div class="card">
            <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic"><?php echo $user_description ?></p>

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8" style="text-transform:capitalize;"><?php echo $user_fullname ?></div>
                </div>

                <?php if ( $user_role == "Supplier" ) {
                    if (isset($row['user_product_details'])  ) {
                   
                ?>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Product details</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
            </div><?php }  } ?>

           

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Role</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user_role ?></div>
                </div>

                <?php if (isset($row['user_address'])  ) {
                   
                   ?>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                </div><?php } ?>

                <?php if (isset($row['user_phone'])  ) {
                   
                   ?>


                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                </div><?php } ?>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo   $user_email     ?></div>
                </div>

                </div>
                <?php

                    if (isset($_SESSION['id'])) {
                        
                  

                ?>
                <form action="" method="post">
                    <div class="form-group col-7">
                        <textarea name="message_body" class="form-control" cols="30" rows="3" required></textarea>
                    </div>
                    <div class="form-group col-7 d-flex justify-content-end">
                       <a href="index.php?sender_id=<?php   echo$_SESSION['id']?>&reciever=<?php echo $user_id?>&send_message">
                            <button class="btn btn-primary" name="send_message" type="submit">
                                Send
                                <i class="bi bi-caret-right-fill"></i>
                            </button>
                        </a>
                    </div>
                </form>
                <?php } else {
                    
                ?><div class="row d-flesx justify-content-center">
                       <div class="col-lg-9 col-md-8">Log in to send message </div>
            </div><?php } ?>
            
            </div><!-- End Bordered Tabs -->

            </div>
        </div>

        </div>
    </div>
    </section>
<?php   }   ?>
</main><!-- End #main -->