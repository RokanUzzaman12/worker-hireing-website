<?php
session_start();
session_unset();
session_destroy();
$_SESSION['username'] = null;
$_SESSION['useremail'] = null;
$_SESSION['userpass'] = null;
$_SESSION['author'] = null;
header('Location:index.php');

?>