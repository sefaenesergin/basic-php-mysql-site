<?php

include "config.php";

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
  }
// error_reporting(E_ALL);
// echo " ";

session_unset();//
session_destroy();



// $_SESSION["id"] = false;

// setcookie("id",0,time()-10);
// setcookie("username",0,time()-10);

?>

Çıkış yaptınız!
<br>

<a href='login.php'>Anasayfa</a>

