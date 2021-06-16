<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
include  'config.php';
if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit();
}

//degiskenleri formdan aliyoruz
extract($_POST);

//sorguyu hazirliyoruz
$sql ="UPDATE memurlar ".
      "SET ad='$ad',soyad='$soyad',birim='$birim',maas='$maas' ".
      "WHERE memur_id=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "Kayıt Güncellendi.";
    echo " <br><a href='listele.php'> Listele</a>\n";
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
