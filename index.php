<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php 
    include("conect_db.php");
   include("links.phtml");
   //include("security.php"); <- kijk hier effe na alex
   session_start();
   //var_dump($_SESSION);
   ?>
</head>
<?php
?>
<body>
    <nav>
        <div class="group">
    <?php
    include("banner.php");

    ?>
        </div>
    </nav>
    <div class="container">
    <?Php
   switch($_GET['pageid']) {

    default :
       include('home.php');
    break;
  
    case 'index1':
        include('home.php');
  break;

    case 'index2':
          include('producten.php');
    break;
  
    case 'index3':
          include('loginform.php');
    break;
  
    case 'index4':
          include('logout.php');
    break;

    case 'index5':
        include('registerform.php');
  break;

  case 'index6':
    include('cart.php');
break;

case 'index7':
    include('forum.php');
break;
  
case 'index8':
    include('register.php');
break;
  
case 'index9':
    include('login-script.php');
break;

case 'index10':
    include('createpassword.php');
break;

case 'index11':
    include('createpassword-script.php');
break;

case 'index12':
    include('logoutform.php');
break;

case 'index13':
    include('forumform.php');
break;

case 'index14':
    include('createpassword-script.php');
break;

case 'index15':
    include('forumfuc.php');
break;
  
case 'index16':
    include('cart.php');
break;

case 'index17':
    include('winkelwagen.php');
break;
  }
    ?>
    </div>
    
    <?php
    include("footer.php");
    ?>
</body>
</html>