<?php 
session_start();
include('../model/config.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KhaiTriEdu | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../view/images/logo-icon.ico" type="image/icon type">
    <!-- Custom styles for this template -->
    <link href="./view/css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/add.css">
  </head>

  <body>

    <!-- Navigation -->
   <?php 
      include('../view/header.php');
      include('menu.php');
        if (isset($_GET['quanly'])){
          switch ($_GET['quanly']) {
            case 'danhmuctintuc':
              include('category.php');
              break;
            case 'dangky':
              include('dang_ky.php');
              break;
            default:
              include('home.php');
              break;
          }
        } else {
          include("home.php");

        }
     include('../view/footer.php');
?>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
  </body>

</html>


