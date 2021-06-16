<?php 

include  'config.php';

if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit();
}
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
    <h1>Hangi futbolcu bilgilerini güncellemek istersiniz?</h1>

   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");




//sorguyu hazirliyoruz
$sql = "SELECT * FROM memurlar";

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}

//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<table border=1>";
echo "<tr>";
echo "<th>Futbolcu ID</th>";
echo "<th>Adı</th>";
echo "<th>Soyadı</th>";
echo "<th>Pozisyon</th>";
echo "<th>Maaşı</th>";
echo "</tr>";

//veritabanından gelen cevabı satır satır alıyoruz.
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelenlerle tablo satırları oluşturalım
  echo "<tr><td>".$gelen['memur_id']."</td>";
  echo "<td>".$gelen['ad']."</td>";
  echo "<td>".$gelen['soyad']."</td>";
  echo "<td>".$gelen['birim']."</td>";
  echo "<td>".$gelen['maas']."</td>";
  echo "<td><a href=guncelle.php?id=";
  echo $gelen['memur_id'];
  echo ">Güncelle</a></td></tr>";    
}
// tablo kodunu bitirelim.
echo "</table>";



echo "<br/> <a href='index.php'> Geri Dön</a>";






//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
