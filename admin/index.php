<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>

<?php 

  if (isset($_GET['page'])) {
      $page = $_GET['page'];

      switch ($page) {
        
        case 'dashboard':
          include "includes/dashboard.php";
          break;

        case 'profile':
          include "includes/profile.php";
          break;

        case 'messages':
          include "includes/messages.php";
          break;

        case 'logout':
          $_SESSION['id'] =null;
          $_SESSION['username'] = null;
          $_SESSION['firstname'] = null;
          $_SESSION['lastname'] = null;
          $_SESSION['user_role'] =null;
          $_SESSION['user_image'] =null;
          header("location: ../home/");
        
          break;
        
        default:
        include "includes/dashboard.php";
          break;
      }
  }else {
    include "includes/dashboard.php";
  }

?>






<?php include "includes/footer.php" ?>




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