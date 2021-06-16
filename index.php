<?php


include "config.php";

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TFB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item dropdown">
        <a class="btn btn-primary">Merhaba  (@<?php echo $theuser["username"]; ?>)</a> 
        <a href="logout.php" class="btn btn-danger">Çıkış Yap </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
  
         
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Ara">
        <button class="btn btn-outline-success" type="submit">Ara</button>
      </form>
    </div>
  </div>
</nav>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>
<body>


</body>

</html>




<?php

//giriş yapılmışsa
// if (isset($_COOKIE["id"]) && $_COOKIE["id"] > 0)
if ($theuser)
{
?>
   



<?php
}
else
{
?>
    <a href="signup.php">Kayıt Ol</a>
    |
    <a href="login.php">Giriş Yap</a>
<?php
}
?>


<hr>

<script src="kod.js"></script>




<html>
<body>

<head>
<style type="text/css">
                    
            </style>
</head>
<h1 align="center"> Kulüp Yönetim Sistemi  </h1><br/> <br/> 
<h2 align="center"> Hoşgeldin Sn. Teknik Direktör   (@<?php echo $theuser["username"]; ?>) </h2>  <br/> <br/> 

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://cdn.ntvspor.net/8a86861047aa41de9fab976415ddd2db.JPG?&w=1000" alt="Card image cap">
    <div class="card-body">
      
      <div align="right" class="col-6 col-sm-4"><a class="btn btn-secondary" href="kayitformu.php"> Futbolcu Gir </a> <br/><br/>  </div>
    
    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="https://i.eurosport.com/2017/01/23/2009642-42188327-2560-1440.jpg" alt="Card image cap">
    <div class="card-body">
      
      <div align="right" class="col-6 col-sm-4"><a class="btn btn-secondary" href="listele.php"> Futbolcu Listele </a><br/><br/>  </div>
  
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://img.gazetevatan.com/vatanmediafile/Sampiyon620x350/2020/06/01/merih-demiral-mucizesi-4558723.Jpeg" alt="Card image cap">
    <div class="card-body">
      
      <div align="right" class="col-6 col-sm-4"><a class="btn btn-secondary" href="silmelistesi.php"> Futbolcu Sil </a><br/><br/>  </div>
      
    </div>
  </div>
</div>




<div class="card-group">
  <div class="card">
    <img class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="https://foto.haberler.com/haber/2014/05/15/puyol-15-yil-sonra-barcelona-ya-veda-etti-6034220_6994_o.jpg" alt="Card image cap">
    <div class="card-body">
      
      
      <div align="right" class="col-6 col-sm-4"><a class="btn btn-secondary" href="guncellelistesi.php"> Futbolcu Güncelle </a><br/> <br/> </div>
    </div>
  </div>
  
  <div class="card">
    <img class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>














</body>
</html>
