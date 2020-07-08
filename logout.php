<?php
session_start()	;
error_reporting(1);
$_SESSION['loggedin'] = false;
session_destroy();
header('location:index.php');
?>