<?php
// Dit zijn constante waarden nodig voor het inloggen in de database
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "jallabase");

  // var_dump($_POST);
  // Hier maken we een verbinding met de mysql-server en database
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  ?>