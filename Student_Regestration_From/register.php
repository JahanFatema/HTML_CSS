<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname = urlencode($_POST['fullname']);
    $email    = urlencode($_POST['email']);
    $phone    = urlencode($_POST['phone']);

    header("Location: success.php?fullname=$fullname&email=$email&phone=$phone");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>