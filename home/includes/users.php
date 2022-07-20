

  <!-- =======Registered Users ======= -->
  <section id="registered-users" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Registered Users</h2>

      </div>
      
    
      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

        <?php

          $query = "SELECT * FROM users ";
          $select_users = mysqli_query($connection,  $query);


          while ($row = mysqli_fetch_assoc($select_users)) {
              $user_id  = $row['user_id'];
              $user_image  = $row['user_image'];
              $username  = $row['username'];
              $user_password = $row['user_password'];
              $user_fullname = $row['user_fullname'];
              $user_role = $row['user_role'];
              $user_description = $row['user_description'];

          ?>

          <div class="swiper-slide">
            <div class="testimonial-item">

                <div class="profile mt-auto">
                    <img src="assets/img/users/<?php  echo $user_image  ?>" class="testimonial-img" alt="">
                    <h3><?php echo  $username ?></h3>
                    <h4><?php echo  $user_role ?></h4>
                </div>             
              <p>
                <?php echo $user_description ?>
              </p>
              <div class="d-flex justify-content-center btn btn-primary text-light" data-aos="fade-up" data-aos-delay="200">
                    <a href="index.php?page=user_details&user_id=<?php echo$user_id?>" class="center">View Details <i class="bi bi-chevron-double-right"></i></a>
                </div>
             
            </div>
          </div><!-- End testimonial item -->

          <?php   } ?>  


         

     
         

        </div>


        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Testimonials Section -->
