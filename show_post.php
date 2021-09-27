<?php require_once('config.php'); ?>
<?php require_once( ROOT_PATH . '/main/phpfunctions.php'); ?>
<?php require_once('admin/Class/Comment.php'); ?>

<?php 
	if (isset($_GET['title'])) {
		$posts = getPost($_GET['title']);
	}
?>
<?php require_once('main/head_section.php') ?>

 <?php 
	if (isset($_GET['id'])) {
		$post = getPost($_GET['id']);
	} 
?> 
<?php if(isset($_POST["comment_btn"])) {
			$Comment = new Comment();
			$Comment->AddComment();
			// 
			// exit;
}  ?>
 <link rel="stylesheet" href="style/comment.css"> 
</head>
<body style="background-color: #FBFCFF;">
<?php require_once('main/navbar.php') ?>
<?php foreach ( $post as $post): ?>
	<title>BlogSpot | <?php echo $post['title'] ?></title>
	<div class="show-post container-fluid w-50 ml-auto mr-auto mt-5 bg-light " >
			<?php $u_id=$post['user_id'];
		$name=getName($u_id); ?>
	<?php
		while ($row = $name->fetch_assoc()) { ?>
  	     <p class="lead d-flex justify-content-end">Author Name: <?php echo $row['username']." " ?> </p> <?php
	} ?>	
				<h1 class="text-center pt-2"><?php echo $post['title'] ?></h1>
				<div class="d-flex justify-content-center align-items-center">
				<img src="<?php echo BASE_URL . 'images/' . $post['image']; ?>" class="img-fluid pt-2" alt="image">
				</div>
                <p class=" text-center pt-5">(<?php  echo html_entity_decode($post['content'])?></p>                        
		<div class="d-flex justify-content-between pt-2"><span class="lead">Created At: <?php echo $post['created_at'] ?></span><span class="lead">Updated At: <?php echo $post['updated_at'] ?></span> </div>
				</div>
			</div>
	</div>

	
		<!-- comment box -->

	<div class="detailBox container-fluid w-50 ml-auto mr-auto mt-5 bg-light">	
    <div class="titleBox">
      <label>Comment Box</label>
        
    </div>
	<?php 
		$comment = new Comment();
		$allcomment = $comment->showComment($_GET['id']); 
		
		echo '<div class="actionBox">'; 
		foreach($allcomment as $comment) { 
		?>
		<ul class="commentList">
			<li>
		<div class="commentText">
			<span><?php echo $comment['username']; ?></span>
			<p class=""><?php echo $comment['comment_desc']; ?></p> 
		</div>
			</li>
		</ul>
		<?php } ?>	
        <form class="form-inline" role="form" action="" method="post">
            <div class="form-group">
				<input type="text" value="<?php echo $_GET['id'] ?>" name="post_id" hidden>
                <input class="form-control" type="text" placeholder="Your comments" name="desc">
            </div>
            <div class="form-group mar">
                <button class="btn btn-default" name="comment_btn">Comment</button>
            </div>
        </form>
    </div>
</div>
<?php endforeach 
?>
</body>
