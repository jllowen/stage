<?php

if ( !isset($_SESSION["iduser"])){

    echo '<div class="alert alert-danger" role="alert">
   U heeft geen rechten voor deze pagina, u moet eerst ingelogd zijn.</div>';
    header("Refresh: 3; url=./index.php?pageid=index3");
    exit();
} elseif ( !in_array($_SESSION["userrol"], $userrol )){
    echo '<div class="alert alert-danger" role="alert">
   U heeft niet de juiste gebruikersrol voor deze pagina.</div>';
    header("Refresh: 3; url=./index.php?content=logoutform");
    exit();
}
?>