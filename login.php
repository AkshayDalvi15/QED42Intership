<?php  include('config.php'); ?>
<?php  include('main/registration_login.php'); ?>
<?php  include('main/head_section.php'); ?>
<!-- <?php // include('admin/Class/User.php'); ?> -->
	<title>Blog World | Sign in </title>
</head>
<body>
<div class="container">
	
	<?php include( ROOT_PATH . '/main/navbar.php'); ?>
	

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/main/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username" style="width:100%;">
			<div class="pass_field_div w-100">
				<input class="pass_field" type="password" name="password" placeholder="Password" style="width:100%;">
				<img src="./images/eye-fill.svg" class="show_pass" alt="Eye">
			</div>
			<button type="submit" class="btn btn-primary w-100" name="login_btn">Login</button>
			<a href="./forgetpassword.php">Forget Password</a>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</div>

<script>

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