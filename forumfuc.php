<?php



    $title = $_POST["title"];
    $text  = $_POST["text"];
    $userid = $_SESSION["userid"];

    
    $sql = "INSERT INTO `forum` (`msgid`,
                             `title`,
                             `text`,
                             `userid` 
) 
                VALUES      (NULL,
                            '$title',
                            '$text',
                            '$userid')";

    $id = mysqli_insert_id($conn);
    $result = mysqli_query($conn, $sql);
    header("Refresh: 0; url=./index.php?pageid=index13");
?>