<?php


session_start();

$mysqli = new mysqli("localhost","284569","qwe123","284569");



if ($mysqli -> connect_errno)
{
    echo("Bir hata meydana geldi!");
    exit;
}


//echo ("Bağlantı sağlandı!");


$theuser = false;

if (isset($_SESSION["id"]) && $_SESSION["id"] > 0)
{
    $getuserquery = $mysqli -> query("SELECT * FROM users WHERE id=".$_SESSION["id"]);
    $theuser = $getuserquery -> fetch_assoc();
}

?>