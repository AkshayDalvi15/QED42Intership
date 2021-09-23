<?php
    global $errors;
    $errors = array();

// profile user variables

if(isset($_POST['Edit_profile'])) {
    createProfile();
    
    
}

function createProfile() {
    global $conn, $error;
    extract($_POST);
    // $firstname = esc($_POST['firstname']);
    // $lastname = esc($_POST['lastname']);
    // $profileimage = esc($_POST['profile_image']);
     $mobileno = esc($_POST['mobileno']);
     $address = esc($_POST['address']);
     $description = esc($_POST['description']);
     $userid = $_SESSION['user']['id'];
  
    

    //validation of form.
    if(empty($firstname)) { array_push($errors, "Please enter firstname."); }
    if(empty($lastname)) { array_push($errors, "Please enter lastname."); }
    // if(empty($profileimage)) { array_push($errors, "Profile image is not provided."); }
    if(empty($mobileno)) { array_push($errors, "Please enter 10 digit mobile number."); }
    if(empty($address)) { array_push($errors, "Please enter correct address"); }
    if(empty($description)) { array_push($errors, "Please enter information about profile user."); }


    $query = "SELECT * FROM profile WHERE user_id = '$userid'";
    $result = mysqli_query($conn, $query);
    $profile = mysqli_fetch_assoc($result);

    // if(!isset($errors)) {
        if($profile) {

            $query = "UPDATE profile SET user_id ='$userid', firstname='$firstname', lastname='$lastname', mobileno='$mobileno',address='$address', description='$description'
            WHERE user_id='$userid' ";

            mysqli_query($conn,$query);
            $_SESSION['message'] = "profile is Edited successfully";
            
            header('location: userProfile.php');
             exit(0);
        } else {
            
            $query = "INSERT INTO profile (user_id, firstname, lastname, mobileno, address, description)
            VALUES('$userid', '$firstname', '$lastname', '$mobileno', '$address', '$description')";
            mysqli_query($conn, $query);
            $_SESSION['message'] = "profile is created successfully";
            header('location: userProfile.php');
            exit(0);
        }
    // } 
}


function esc(String $value){
	global $conn;
	// remove empty space sorrounding string
	$val = trim($value); 
	$val = mysqli_real_escape_string($conn, $value);
	return $val;
}