<?php
$conn= mysqli_connect("localhost","root","","electro");
if(isset($_POST['Sbmt'])){
	$email= $_POST['email'];
	$pass= $_POST['password'];
	$sql= "INSERT INTO `login`(`Email`, `Password`) VALUES ('$email','$pass')";
	mysqli_query($conn,$sql);
	header("Location:login.php");
}
?>

<!doctype html>
<html class="no-js" lang="">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login page</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
	
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
	<section class="fxt-template-animation fxt-template-layout8" data-bg-image="img/figure/goat.jpg">
		<div class="fxt-content">
			<div class="fxt-header">
				<a href="login.php" class="fxt-logo"><img src="img/Barca.png" alt="Logo" style="height:100px; width: 100px; background-attachment:fixed;"></a>
			</div>
			<div class="fxt-form">
				<p>Login into your account</p>
				<form method="post">
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<div class="fxt-checkbox-area">
								<div class="checkbox">
									<input id="checkbox1" type="checkbox">
									<label for="checkbox1">Keep me logged in</label>
								</div>
								<a href="forgot-password-8.html" class="switcher-text">Forgot Password</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<button type="submit" class="fxt-btn-fill" name="Sbmt">Log in</button>
						</div>
					</div>
				</form>
			</div>
			<div class="fxt-style-line">
				<div class="fxt-transformY-50 fxt-transition-delay-5">
					<h3>Or Login With</h3>
				</div>
			</div>
			<ul class="fxt-socials">
				<li class="fxt-google">
					<div class="fxt-transformY-50 fxt-transition-delay-6">
						<a href="#" title="google"><i class="fab fa-google-plus-g"></i><span>Google +</span></a>
					</div>
				</li>
				<li class="fxt-twitter">
					<div class="fxt-transformY-50 fxt-transition-delay-7">
						<a href="#" title="twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
					</div>
				</li>
				<li class="fxt-facebook">
					<div class="fxt-transformY-50 fxt-transition-delay-8">
						<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
					</div>
				</li>
			</ul>
			<div class="fxt-footer">
				<div class="fxt-transformY-50 fxt-transition-delay-9">
					<p>Don't have an account?<a href="register.php" class="switcher-text2 inline-text">Register</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="js/jquery-3.5.0.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="js/main.js"></script>

</body>
</html>
