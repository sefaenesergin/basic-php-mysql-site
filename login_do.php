<?php

include "config.php";


if(isset($_POST["login-btn"])){






$uname = $_POST["uname"];
$upass = $_POST["upass"];



$result = $mysqli -> query("SELECT * FROM users WHERE username='$uname' AND password='$upass' LIMIT 1");

// $result = mysqli_query("...");
// mysqli_num_rows($result);

$satir_sayisi = $result->num_rows;

if($satir_sayisi == 0)
{
    die("olmadı bir şeyleri hatalı yaptın,logine gitmiyor");
    header('location login.php');
    exit();
}



// mysqli_fetch_assoc($result);

$satir = $result->fetch_assoc();





$_SESSION["id"] = $satir["id"];
$_SESSION["username"] = $satir["username"];

// setcookie("id", $satir["id"], time() + 10);
// setcookie("username", $satir["username"], time() + 10);

echo $satir["id"] . " numaralı kullanıcı için giriş yapıldı.";
echo "<br> <a href='index.php'>Anasayfa</a>";


// while($satir = $mysqli->fetch_assoc($result))
// {

// }
}


    header('location: login.php');
    exit();
  


?>
