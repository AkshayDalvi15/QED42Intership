<?php  include('../config.php'); ?>
	
	<?php include(ROOT_PATH . '/admin/main/head_section.php'); ?>
    <!-- <?php //include(ROOT_PATH . '/admin/main/profile_function.php'); ?> -->
    <?php include(ROOT_PATH . '/admin/Class/Profile.php'); ?>
	<title>Edit User Profile</title>
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
            <?php
            //New Instance of Profile class for getProfile function.
            $pro = new Profile();
            $profile = $pro->getProfile();
            
            if (isset($_POST['Edit_profile'])) {
                $pro->createProfile();
            }

            ?> 
    </div>
    <div class="col-md-7 border-right">
        <div class="p-3 py-5">
            <form method="post" enctype="multipart/form-data" action="editProfile.php"; >
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Firstname</label><input type="text" class="form-control" placeholder="Enter firstname" name="firstname" value="<?php if(isset($profile['firstname'])) { echo $profile['firstname'];}?>"></div>
                    <div class="col-md-6"><label class="labels">Lastname</label><input type="text" class="form-control" value="<?php if(isset($profile['lastname'])) { echo $profile['lastname'];}?>" placeholder="Enter lastname" name="lastname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter 10 digit mobile number" name="mobileno" value="<?php if(isset($profile['mobileno'])) { echo $profile['mobileno'];}?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="Enter full address" name="address" value="<?php if(isset($profile['address'])) { echo $profile['address'];}?>"></div>
                    <div class="col-md-12"><label class="labels">Description</label><input type="text" class="form-control" placeholder="Education" name="description" value="<?php if(isset($profile['description'])) { echo $profile['description'];}?>"></div>
                    <button type="submit" class="btn" name="Edit_profile" >Edit Profile</button>
                </div>
            </form>
        </div>
    </div>
        

