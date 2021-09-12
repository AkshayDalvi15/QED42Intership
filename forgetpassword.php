<?php  include('config.php'); ?>
<?php  include('main/head_section.php'); ?>
<?php include('main/navbar.php'); ?>
<?php include('main/errors.php'); ?>
<!-- <h1>Hello I m Here</h1> -->
<title>BlogWorld | Forget Password </title>
</head>
<body>
    <div class="container" style="width:40%">
        <form method="post" action='forgetpassword.php' >
			<h3>Recover your password</h3>
			<?php include(ROOT_PATH . '/main/errors.php') ?>
			<input type="email" name="email" placeholder="Email" style="width:100%;" required>
            <button type="submit" class="btn btn-primary w-100" name="send" value="Send">Send Mail</button>
            <p>Please Enter correct Email id for getting the change password link</p>
    </div>
    <?php
        if(isset($_POST['send'])) {
            $email = mysqli_real_escape_string($conn,$_POST['email']);
             
            if(empty($email)) { array_push($errors, "Email is Missing."); }

            $user_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";

            $result = mysqli_query($conn, $user_query);
            
            $out = mysqli_fetch_assoc($result);
            if($out) {
                header('location: ' . BASE_URL . './sendmail.php?id='.$out['id']);
            } else {
                array_push($errors, "No Email found, Kindly provide Email. ");
            }
        }
    ?>
</body>;