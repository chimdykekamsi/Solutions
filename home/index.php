<?php include"includes/header.php" ?>

 

<?php 

  if (isset($_GET['page'])) {
    $view_page = $_GET['page'];
    switch ($view_page) {
      case 'services':
        include"includes/services.php" ;
        break;
      case 'users':
        include"includes/users.php" ;
        break;
      case 'register_supply':
        include"includes/register_supply.php" ;
        break;
      case 'register_demand':
        include"includes/register_demand.php" ;
        break;
      case 'login':
        include"includes/login.php" ;
        break;
      case 'user_details':
        include"includes/user_details.php" ;
        break;
      
      default:
      include"includes/home.php";
        break;
    }
  }else {
    include"includes/home.php";
  }

?>



    
  


<?php include"includes/footer.php" ?>
