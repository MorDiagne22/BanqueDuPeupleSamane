<?php
/* Smarty version 3.1.30, created on 2020-02-29 03:25:50
  from "C:\xampp\htdocs\mesprojets\BanqueDuPeupleSamane\src\view\welcome\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e59cbaea09b26_24257284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1780685657506cfb99b0f0ff8bfabce6eb4460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\BanqueDuPeupleSamane\\src\\view\\welcome\\index.html',
      1 => 1582943141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e59cbaea09b26_24257284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/mesprojets/BanqueDuPeupleSamane/public/template/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('/mesprojets/BanqueDuPeupleSamane/public/template/login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="/mesprojets/BanqueDuPeupleSamane/User/connexion">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="email" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="connexion">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="/mesprojets/BanqueDuPeupleSamane/public/template/login/images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/animsition/js/animsition.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/daterangepicker/moment.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/vendor/countdowntime/countdowntime.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="/mesprojets/BanqueDuPeupleSamane/public/template/login/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
