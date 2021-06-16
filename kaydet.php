
<?php 

include  'config.php';

if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit();
}
?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php
//mysql baglanti kodunu ekliyoruz 
include("mysqlbaglan.php");

//degiskenleri formdan aliyoruz
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$birim=$_POST['birim'];
$maas=$_POST['maas'];

echo "Girdiginiz bilgiler:</br>";
echo "Adi   :$ad </br>";
echo "Soyadi:$soyad</br>";
echo "Birim :$birim</br>";
echo "Maas  :$maas</br>";

//sorguyu hazirliyoruz
$sql = "INSERT INTO memurlar ".
       "(ad,soyad,birim,maas) ".
       "VALUES ( '$ad','$soyad', '$birim', '$maas')";
	   

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Veritabanina eklendi, Kayıtları görmek için";
    echo " <a href='listele.php'> Tiklayiniz</a>\n";
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
</body>
</html>
