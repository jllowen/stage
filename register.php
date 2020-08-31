<?php
require_once("./functions.php");

$naam = sanitize($_POST["naam"]);
$achternaam = sanitize($_POST["achternaam"]);
$plaats = sanitize($_POST["plaats"]);
$email = sanitize($_POST["email"]);


$sql = "SELECT * FROM `users` WHERE `email` = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo '<div class="alert alert-danger" role="alert">
    Er is iets fout gegaan. Probeer het nog eens.</div>';
    header("Refresh: 4; url=./index.php?content=registerform");
} else {

      // Ik ga een ingewikkeld tijdelijk password verzinnen
  date_default_timezone_set("Europe/Amsterdam");
  $date = date('d-m-Y H:i:s'); 
  $part_of_email = substr($email,0,4);

  $password = password_hash($date.$part_of_email, PASSWORD_BCRYPT);

  // De hash van dit tijdelijke password gaat mee met de activatielink
  $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $naam = sanitize($_POST["naam"]);
    $achternaam = sanitize($_POST["achternaam"]);
    $plaats = sanitize($_POST["plaats"]);
    $email = sanitize($_POST["email"]);
    
    $sql = "INSERT INTO `users`(`userid`,
                             `password`,
                             `naam`,
                             `achternaam`, 
                             `email`,
                             `rank`,
                             `plaats`) 
                VALUES      (NULL,
                            '$password',
                            '$naam',
                            '$achternaam',
                            '$email',
                            'djalla',
                            '$plaats')";
   // echo $sql;
    $result = mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    //var_dump($result);

    if ($result) {
        $to = $email;
        $subject = "Activatielink voor djallashop";
        $message = '<!DOCTYPE html>
    <html>
    <body>
    <h1>Beste klant,<h1>
    <p>Bedankt voor het registreren, door op onderstaande link te klikken wordt het registratieproces voltooid.</p> <a href="www.djalla2gshop.org/index.php?pageid=index10&id=' . $id . '&pw=' . $password_hash . '"> Activeer uw account.</a>


    </body>
    </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <admin@loginsysteem.nl>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";
        $headers .= 'Bcc: myboss@example.com' . "\r\n";
        mail($to,$subject,$message, $headers);

        echo '<div class="alert alert-info" role="alert">
    U heeft een email gekregen met een activatielink. Klik hierop om het registreren te voltooien.</div>';
        header("Refresh: 4; url=./index.php?content=registerform");
    } else {
        echo '<div class="alert alert-danger" role="alert">
    Er is iets fout gegaan met de registratie. Probeer het nog maals.</div>';
        header("Refresh: 4; url=./index.php?pageid=index5");
    }
}
