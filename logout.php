<?php
session_start();
session_destroy();
setcookie("user_logged","", -1);
header('location: index.php');
 ?>
