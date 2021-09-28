<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Blog World Dashboard</h1>
		</a>
	</div>
	<div class="user-info">
			<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<a href="<?php BASE_URL ?>../index.php"> Home </a>
				<span><a href="./userProfile.php"><?php echo $_SESSION['user']['username'] ?></a></span> &nbsp; &nbsp; 
		<span><?php $_SESSION['user'] ?> </span> &nbsp; &nbsp; <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
</div>