<?php 

include  'config.php';

if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title></title>
  </head>
  <body>
    <h1>Futbolcu Kaydet</h1>

   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
<html>
   <!-- türkçe karakter desteği ayarı --> 
   <meta http-equiv="Content-Type"  
      content="text/html; charset=UTF-8" />
   <body>
      <form action="kaydet.php" method="POST"> 
         Adı      : <input type="text" name="ad" />    <br /> 
         Soyadı   : <input type="text" name="soyad" /> <br /> 
         Pozisyonu: <input type="text" name="birim" /> <br /> 
         Maaş     : <input type="text" name="maas" />  <br /> 
         <input class="btn btn-primary" type="submit" value="KAYDET"/> 
      </form>
   </body>
</html>
<br/><a class="btn btn-secondary"href='index.php'> Geri Dön</a>
