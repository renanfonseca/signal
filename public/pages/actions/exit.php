<?php
session_start();
$_SESSION['login'] = 'false';
header("location: http://localhost/signal/public/pages/home.php");
?>