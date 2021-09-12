
<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span class="p-2">Welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">Logout</a></span>
	</div>
<?php }else{ ?>
	<div class="row banner">
		<div class="col-lg-6 " style="color=Gray;">
		<h1 > 
		Blogging is good for your career.<br> A well-executed blog sets you apart as an expert in your field<br> by Penelope Trunk
		</h1>
			<a href="register.php" class="btn btn-primary ml-auto mr-auto p-2 mt-lg-5">Register Here</a>
	</div>
		<div class="col-lg-6 ">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
			<h2 style="color=Gray;">Login</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/main/errors.php') ?>
				</div>
				<input class="mt-lg-4" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" style="width: 75%;
">
				<input class="mt-lg-4" type="password" name="password"  placeholder="Password" style="width: 75%;">
				<a href="./forgetpassword.php" style="padding-left:65px;">Forget Password</a>
				<button class="btn btn-primary ml-auto mr-auto mt-lg-5" type="submit" name="login_btn" >Sign in</button>
			</form>
		</div>
</div>
<?php } ?>