<?php
    unset($_COOKIE['cart']);
    $_COOKIE['cart'] = [];
session_unset();
session_destroy();
echo '<div class="alert alert-info" role="alert">
    U bent succesvol uitgelogd.</div>';
header("Refresh: 2; url=./index.php");
?>