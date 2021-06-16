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
    <h1>Futbolcu kayıtları listeleniyor.</h1>

   
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
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<table border=1>";
echo "<tr><th>Futbolcu ID</th><th>Adı</th><th>Soyadı</th><th>Futbolcunun Oynadığı Mevki</th><th>Maaşı</th></tr>";

//veritabanından gelen cevabı satır satır alıyoruz.
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelen değerlerle tablo satırları oluşturalım
    echo "<tr><td>".$gelen['memur_id']."</td>";
    echo "<td>".$gelen['ad']."</td>";
    echo "<td>".$gelen['soyad']."</td>";
    echo "<td>".$gelen['birim']."</td>";
    echo "<td>".$gelen['maas']."</td></tr>";    
}
// tablo kodunu bitirelim.
echo "</table>";

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);

echo "Yeni kayıt eklemek için <a href='kaydet.html'> Tiklayiniz</a>\n";
?>
</body>
</html>
<br/><a class="btn btn-secondary"href='index.php'> Geri Dön</a>
