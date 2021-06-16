<?php

include "config.php";

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
  }

$phone = $_POST["phone"];


$result = $mysqli -> query("UPDATE users SET telnumber=".$phone." WHERE id=".$theuser["id"]);

if (!$result)
{
    echo "Hata meydana geldi!";
    echo $mysqli -> error;
}
else
{
    echo "Başarılı!";
}
?>