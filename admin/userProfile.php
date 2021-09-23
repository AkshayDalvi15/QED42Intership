<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/main/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/main/head_section.php'); ?>
	<title>User Profile</title>
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

body {
  margin: 0;
  font-family: 'Lato', sans-serif;
}

.Header {
  min-height: 60vh;
  background: #009FFF;
background: linear-gradient(to right, #ec2F4B, #009FFF);
  color: white;
  clip-path: ellipse(100vw 60vh at 50% 50%);
  display: flex;
  align-items: center;
  justify-content: center;
}
.details {
  text-align: center;
}
.profile-pic {
  height: 10rem;
  width: 10rem;
  object-fit: center;
  border-radius: 50%;
  border: 2px solid #fff;
}
.stats {
  display: flex;
}
.stats .col-4 {
  width: 10rem;
  text-align: left;
}
.heading {
  font-weight: 400;
  font-size: 1.3rem;
  margin: 1rem 0;
}

</style>
</head>
<body>
    <div class="header">
            <div class="logo">
                <a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
                    <h1>BLog World - Dashboard</h1>
                </a>
            </div>
            <?php if (isset($_SESSION['user'])): ?>
                <div class="user-info">
                    <a href="<?php BASE_URL ?>../index.php"> Home </a>
                    <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
                    <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
                </div>
            <?php endif ?>
    </div>
   <?php  
     $userid = $_SESSION['user']['id'];
     $query = "SELECT * FROM profile where user_id = $userid;";
     $result = mysqli_query($conn, $query);
     $profile = mysqli_fetch_assoc($result);
    ?>  

<section class="profile">
    <header class="Header">
      <?php if(isset($profile)) { ?>  
      <div class="details">
        <img src="../images/profile.jpg" alt="John Doe" class="profile-pic">
         <h1 class="heading">Name: <?php echo $profile['firstname'] . $profile['lastname'] ?> </h1>
        </div>
        <div class="stats">
            <div class="col-3">
            <p>Role : <?php echo $_SESSION['user']['role'] ?></p>
            <p>Address: <?php echo $profile['address']?></p>
            <p>Description: <?php echo $profile['description']?></p>
            </div>
            <div class="col-3">
            <h4></h4>
            <p>UserId : <?php echo $_SESSION['user']['id'] ?></p>
            <p>Mobile: <?php echo $profile['mobileno']?></p>
            </div>
        </div>
      <?php } else {
        echo "Profile is not updated, kindly Update it first.";
      } ?>
    </header>
</section>
<div class="container dashboard">
    <div class="buttons d-flex flex-row justify-content-center">
                <a href="editProfile.php">Edit Profile</a>
    </div>
</div>
