<style>
  /* carousel */
#carouselExampleCaptions {
  max-height: 550px;
  padding: 5px;
}
#carouselExampleCaptions .carousel-inner .carousel-item img {
  max-height: 550px;
  image-rendering: pixelated;
}
</style>



<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/slider-1.jpg" class="d-block w-100" alt="image 1">
          </div>
    <div class="carousel-item">
      <img src="./images/slider-2.jpg" class="d-block w-100" alt="image 2">
          </div>
    <div class="carousel-item">
      <img src="./images/slider-3.jpg" class="d-block w-100" alt="image 3">
          </div>
  </div>
 
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span class="p-2">Welcome <a href="./admin/userProfile.php"><?php echo $_SESSION['user']['username'] ?></a></span>
		|
		<span><a href="logout.php">Logout</a></span>
	</div>
<?php }else{ ?>
	<div class="row banner">                                                       
		<div class="col-lg-6 " style="color:Gray;">
		<h1>
		Blogging is good for your career.<br> A well-executed blog sets you apart as an expert in your field<br> by Penelope Trunk
		</h1>
			<a href="register.php" class="btn btn-primary ml-auto mr-auto p-2 mt-lg-5">Register Here</a>
	</div>
		 <div class="col-lg-6 ">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
			<h2 style="color:Gray;">Login</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/main/errors.php') ?>
				</div>
				<input class="mt-lg-4" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" style="width: 75%;
">
				<div class="pass_field_div w-100">
					<input class="pass_field" type="password" name="password" placeholder="Password" style="width:75%;">
					<img src="./images/eye-fill.svg" class="show_pass" alt="Eye" style="right:16%">
				</div>
			
				<a href="./forgetpassword.php" style="padding-left:65px;">Forget Password</br></a>
				<button class="btn btn-primary ml-auto mr-auto mt-lg-5" type="submit" name="login_btn" >Sign in</button>
			</form>
		</div> 
</div>

<?php } 
?>

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