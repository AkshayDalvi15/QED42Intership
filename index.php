<?php require_once('config.php'); ?>
<!-- <?php //require_once( ROOT_PATH . '/main/registration_login.php') ?> -->
<?php require_once('main/head_section.php'); ?>
<?php require_once( ROOT_PATH . '/main/phpfunctions.php'); ?>
<?php require_once('admin/Class/User.php'); ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
		
	<title>BlogWorld | Home </title>	
</head>
<body>


	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include('main/navbar.php') ?>
        <?php include('main/banner.php') ?>
		<!-- Page content -->
		<h2 class="content-title">Articles</h2>
			<hr>
		<div class="content row flex-row  mt-2">
			

<?php foreach ($posts as $post): ?>
	<div class=" post col-lg-8 pt-2" >
		<div class="post_info">
			<a href="show_post.php?id=<?php echo $post['id']; ?>">  <h2> <?php echo $post['title']; ?></h2></a>
			<div class="justify-content-between m-1">
				<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
				<img style="position:absolute; bottom:60px; left:10px;" src="<?php echo BASE_URL . 'images/' . $post['image']; ?>" class="post_image" alt="Image">
				<!-- <div style="display:inline-block;"> -->
					<a style="position:absolute; bottom:0; left:0;" href="show_post.php?id=<?php echo $post['id']; ?>"></br> <span class="read_more">Read more...</span> </a>
				<!-- <div> -->
			</div>
		</div>
			
	</div>
<?php endforeach ?>


 <?php  $prev = $page - 1;
  		$next = $page + 1; 
		  ?> 
	  <nav aria-label="Page navigation example mt-5">
				<ul class="pagination justify-content-center mt-4">
					<li class="page-item <?php if($page <=1){ echo 'disabled'; } ?>">
						<a class="page-link"
							href="<?php if($page < 1){ echo '#'; } else { echo "index.php?page=".$prev; } ?>">Previous</a>
					</li>
	
					<?php for($i = 1; $i <= $total_pages; $i++ ): ?>
					<li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
						<a class="page-link" href="index.php?page=<?= $i; ?>"> <?= $i; ?> </a>
					</li>
					<?php endfor; ?>
	
					<li class="page-item <?php if($page >= $total_pages) { echo 'disabled'; } ?>">
						<a class="page-link"
							href="<?php if($page >= $total_pages){ echo '#'; } else {echo "index.php?page=".$next; } ?>">Next</a>
					</li>
				</ul>
			</nav>
	</div>


		</div>

		<?php include('main/footer.php') ?>
	</body>

