<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");


include  'config.php';
if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit();
}


//sorguyu hazirliyoruz
$sql = "SELECT * FROM memurlar WHERE memur_id=".$_GET['id'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}


//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
?>
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


   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
<html>
<body>
<form action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" 
method="POST">
Adı:
<input type="text" name="ad" value="<?php echo $gelen['ad']?>" />    <br /> <br />
Soyadı:
<input type="text" name="soyad" value="<?php echo $gelen['soyad'] ?>" /> <br /> <br />
Pozisyonu :<input type="text" name="birim" 
value="<?php echo $gelen['birim'] ?>" /> <br /> <br />
Maaş  : <input type="text" name="maas" 
value="<?php echo $gelen['maas'] ?>" />  <br /> <br />
<input type="submit" value="KAYDET"/>
</form>
</body>
</html>
