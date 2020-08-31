<?php
//var_dump($_POST);

require_once("functions.php");
$password = sanitize($_POST["password"]);
$verify_password = sanitize($_POST["verify_password"]);
$id = sanitize($_POST["id"]);
$pw = sanitize($_POST["pw"]);

if(!strcmp( $password, $verify_password )) {

    $sql = "SELECT * FROM `users` WHERE `userid` = $id";
    
    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) == 1 ) {

        $record = mysqli_fetch_assoc($result);

        if ( password_verify($record["password"], $pw) ){

            $blowfish_password = password_hash($password, PASSWORD_BCRYPT);
    
            if ( !empty($password)&& !empty($verify_password)){
                $sql = "UPDATE `users`
                        SET    `password` = '$blowfish_password'
                        WHERE  `userid`        = $id";
                
                $result = mysqli_query($conn, $sql);
                
                if($result){
                    $sql = "SELECT * FROM `users` WHERE `userid` = $id";
        
                    $result = mysqli_query($conn, $sql);
        
                    $record = mysqli_fetch_assoc($result);
        
                    $email = $record["email"];
        
                    echo '<div class="alert alert-info" role="alert">
                    U wordt doorgestuurd naar de inlogpagina waar  kunt inloggen.</div>';
                    header("Refresh: 2; url=./index.php?pageid=index1&email=$email");
                    } else{
                        echo '<div class="alert alert-danger" role="alert">
                        U heeft een verkeerd wachtwoord gegeven.</div>';
                        header("Refresh: 2; url=./index.php?content=home");
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    U heeft een van beide wachtwoordvelden niet goed ingevuld. Probeer het nogmaals.</div>';
                    header("Refresh: 2; url=./index.php?pageid=index10&id=$id");
                }
        } else {
        }    
} else {
echo '<div class="alert alert-danger" role="alert">
Het id in de activatie link is niet bij ons bekent.</div>';
header("Refresh: 2; url=./index.php?content=home");
}
                
} else {
            echo '<div class="alert alert-danger" role="alert">
            U heeft een van beide wachtwoordvelden niet ingevuld. Probeer het nogmaals.</div>';
            header("Refresh: 2; url=./index.php?content=createpassword&id=$id&pw=$pw");

}
