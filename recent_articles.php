<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/main/registration_login.php') ?>
<?php require_once(ROOT_PATH . '/main/phpfunctions.php') ?>
<?php require_once('main/head_section.php') ?>

<?php $posts = getRecentPosts(); ?>

	<title>Recent Articles </title>
</head>
<body>

<div class="container">
		<!-- navbar -->
		<?php include('main/navbar.php') ?>
        <?php include('main/banner.php') ?>
		<!-- Page content -->
		<h2 class="content-title">Recent Articles</h2>
			<hr>
		<div class="content row flex-row  mt-2">
			

<?php foreach ($posts as $post): ?>
	<div class=" post col-lg-6 pt-2" >
		<img src="<?php echo BASE_URL . '/images'; ?>" class="post_image" alt="Image">
		
			<div class="post_info">
				<a href="show_post.php?id=<?php echo $post['id']; ?>">  <h2> <?php echo $post['title']; ?></h2></a>
				<div class="d-flex justify-content-between m-1">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<a href="show_post.php?id=<?php echo $post['id']; ?>"> <span class="read_more">Read more...</span> </a>
                    </div>
				</div>
			</div>
			
		
<?php endforeach ?>
	</div>

		</div>