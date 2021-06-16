<?php

include "config.php";

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
    
<head>
	<title>Kaydol Sayfası</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" ">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" ">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				
                <!-- BURASI -->
				<!-- <?php if(count($errors)>0): ?>
						<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach; ?> 
						</div>
				<?php endif; ?>-->
				<div class="d-flex justify-content-center mt-4">
						
					<form action="signup_do.php" method="POST">

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input  type="text" name="uname" class="form-control input_user"  value="" placeholder="Kullanıcı Adı">
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input  type="password" name="upass" class="form-control input_pass" value="" placeholder="Şifre">
						</div>


            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input  type="text" name="utel" class="form-control input_user" value="" placeholder="0 5XX XXX XX">
						</div>



						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input  type="date" name="ubdate" class="form-control input_user"  value="" placeholder="Doğum Tarihiniz">
						</div>

						
						


					
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="register-btn" class="btn btn-danger" style='width:100%'>Kaydol</button>
				   </div>
					</form>
				</div>
		
			
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>



