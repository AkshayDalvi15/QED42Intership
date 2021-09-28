<?php  include('config.php'); ?>
<!-- <?php // include('main/registration_login.php'); ?> -->
<?php include('main/head_section.php'); ?>
<?php include('admin/Class/User.php'); ?>
<?php if (isset($_POST['reg_user'])) {
    $logUser = new User();			// User class object is created.
		$logUser->RegisterUser();
}?>
<title>BlogSpot | Sign up </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/main/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on Blog-World</h2>
			<?php include(ROOT_PATH . '/main/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username" style="width:100%;">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" style="width:100%;">
			<div class="pass_field_div w-100">
				<input class="pass_field" type="password" name="password_1" placeholder="Password" style="width:100%;">
				<img src="./images/eye-fill.svg" class="show_pass" alt="Eye">
			</div>
			<div class="pass_field_div w-100">
				<input class="pass_field" type="password" name="password_2" placeholder="Password confirmation" style="width:100%;">
				<img src="./images/eye-fill.svg" class="show_pass" alt="Eye">
			</div>
			<button type="submit" class="btn btn-primary w-100" name="reg_user">Register</button>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
</div>

<script>		//show-password with eye button.
const show_pass = document.querySelectorAll(".show_pass");
const pass_field = document.querySelectorAll(".pass_field");
for (let i = 0; i < show_pass.length; i++) {	
	show_pass[i].addEventListener("click", function () {
	if (pass_field[i].type == "password") {
		pass_field[i].type = "text";
	} else {
		pass_field[i].type = "password";
	}
});
}
</script>
</body>