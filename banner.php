 
<?php
//var_dump($_COOKIE['cart']);
$cart = json_decode($_COOKIE['cart'], 1);
$ammounts = array_sum($cart);

if ( isset($_SESSION["userid"])) {
          switch($_SESSION["userrole"]) {
            case 'admin':
              echo '
                      <a href="./index.php?content=administrator_home">AdminHome<span class="sr-only"></span></a>
                    ';
              echo '
                      <a href="./index.php?content=gebruikersrollen">gebruikersrollen<span class="sr-only"></span></a>
                    ';
            break;
            case 'root': 
              echo '
                      <a href="./index.php?content=root_home">RootHome<span class="sr-only"></span></a>
                    ';
            break;
            case 'djalla':
              echo '
                      <a href="?pageid=index1">home<span class="sr-only"></span></a>
                    ';
                    echo '
                    <a href="?pageid=index2"> shop <span class="sr-only"></span></a>
                  ';
                  echo '
                  <a href="?pageid=index13">forum</a>
                ';
                
            break;
            default:
              // header("Location: url=./logout.php");
              break;
              }
            
          echo '
                  <a href="?pageid=index12"">Uitloggen</a>
                ';
                echo '</div>
                <div class="cart">
                <a href="?pageid=index17" ><img src="/img/shopingcart.png" alt="Cinque Terre" width:"75px" height="50px"></a>
                <div class="counter">'.$ammounts.'</div>
              </div>
              <div class="group">
                ';
        } else {
          echo ' 
          <a href="?pageid=index1.php">home</a>
                ';
         
          echo '
                  <a href="?pageid=index2">shop</a>
                ';
                echo '
                  <a href="?pageid=index3">login</a>
                ';
        }
       
      ?>


