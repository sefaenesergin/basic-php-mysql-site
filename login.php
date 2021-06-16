<?php
include "config.php";

if (isset($_SESSION['id'])) {
	header('location: index.php');
	exit();
  }

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
    
<head>
	<title>Giriş Sayfası</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<!--<?php if(count($errors)>0): ?>
							<div class="alert alert-danger">
							<?php foreach($errors as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach; ?>

							</div>
					<?php endif; ?>-->
                <!-- BURASI -->
				<div class="d-flex justify-content-center mt-4">
				
					<form action='login_do.php' method='POST'>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" name="uname"  class="form-control input_user" value="" placeholder="Kullanıcı Adı">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input  type="password" name="upass" class="form-control input_pass" value="" placeholder="Şifre">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="login-btn" class="btn btn-danger" style='width:100%'>Giriş Yap</button>
				  	 </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Hesabın yok mu? <a href="signup.php" class="ml-2">Kayıt ol</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<!--
<form action="login_do.php" method="POST">
Kullanıcı Adı: <input type="text" name="uname" required><br>
Şifre: <input type="password" name="upass" required><br>
<input type="submit" class="btn btn-success" value="Giriş Yap!">

</form>

<a href="signup.php">Kayıt Ol </a >
