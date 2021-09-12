<?php  include('config.php'); ?>
<?php include('main/errors.php'); ?>
<?php  include('main/head_section.php'); ?>
<?php include('main/navbar.php'); ?>
<?php    $Id = $_GET['id']; ?>
<!-- <h1>Hello I m Here</h1> -->
<title>BlogWorld | Change Password </title>
</head>
<body>
    <div class="container" style="width:40%">
        <form method="post" action="changepassword.php" >
			<h3>Change your password</h3>
			<?php include(ROOT_PATH . '/main/errors.php') ?>
			<input type="password" name="newpassword" placeholder="Password" required>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
            <button type="submit" class="btn btn-primary w-100" name="send" value="Send">change password</button>
            <input type="text" name="id" value="<?php echo $Id?>" hidden> 
            <p>Passwords shall have a minimum of 8 characters with a mix of alphanumeric and special characters</p> 
    </div>
    <?php

        
        if(isset($_POST['send'])) {
            $Id = $_POST['id'];
           
            $pass1 = mysqli_real_escape_string($conn,$_POST['newpassword']);
            $pass2 = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
            
            if(empty($pass1)) { array_push($errors, "please provide password."); }
            if(empty($pass2)) { array_push($errors, "please provide confirm password."); }

            if($pass1===$pass2) {
                $pass = md5($pass1); 
                
                $user_query = "UPDATE users SET password='$pass'
                WHERE id=$Id";
                $result = mysqli_query($conn, $user_query);
                if($result) {
                     header('location: ' . BASE_URL . './login.php');
                }   
            }
            else {
                echo 'password and cofirm password are not matching';
            }
            
        }
    ?>
</body>