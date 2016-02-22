<?php $active_page="home"; ?>
<!DOCTYPE html>
<html>
    <head>
      <title>Welcome to NITG Library</title>
      <link rel="shortcut icon" href="img/NIT_Goa_Logo.png" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="bootstrap/css/bootflat.css" rel="stylesheet" media="screen">
      <link href="bootstrap/css/bootflat-square.css" rel="stylesheet" media="screen">
      <link rel="stylesheet" href="css/mystyle.css">

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body class="main_container">
        <?php include_once "page_components/header.php"; ?>
        <div class="container"> 
          <?php include_once "page_components/login_modal.php"; ?>
          <?php include_once "page_components/register_modal.php"; ?>
          <img class="home_logo" src="img/NIT_Goa_Logo.png" alt="NITG Logo">
          <h1 class="home_header">Welcome to NIT Goa Library</h1>
          <h3 class="home_intro">
            This is the National Institute of Technology Goa online library portal. Here you can easily search and issue books. There are many more features available.
          </h3>
          <div id="hidden" class="container hide">
            <p class="text-center">You are being redirected to home page...</p>
          </div>          
        </div>
      <script src="js/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/html5shiv.js"></script>
      <script src="bootstrap/js/jquery-1.10.1.min.js"></script>
      <script src="bootstrap/js/jquery.icheck.js"></script>
      <script src="bootstrap/js/respond.min.js"></script>
      <script>
        $(function(){
          document.getElementById("hidden").className = document.getElementById("hidden").className.replace
      ( /(?:^|\s)hide(?!\S)/g , '' );  
          document.getElementById("hide_nav").className = "hide"; 
          document.getElementById("hide_nav1").className = "hide";       
          setTimeout(function(){            
            window.location.href="pages/lib_catalog.php";
          },5000);
        });
      </script>      
    </body>
</html>