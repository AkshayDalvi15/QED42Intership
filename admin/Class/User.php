<?php
    $errors = array();

require_once("Database.php");

    class User extends Database{
        
        public function RegisterUser(){
            global $conn, $errors;
            $username = $this->mess($_POST['username']);
            $email = $this->mess($_POST['email']);
            $password_1 = $this->mess($_POST['password_1']);
            $password_2 = $this->mess($_POST['password_2']);


        }

        public function Login(){
            global $conn, $errors;
            $username = $this->mess($_POST['username']);
            $password = $this->mess($_POST['password']);
            echo $username;

            $password = md5($password);
            if (empty($username)) { array_push($errors, "Username required"); }
            if (empty($password)) { array_push($errors, "Password required"); }
            if (empty($errors))
            {
                    
                $sql = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";
        
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) 
                {
                    // get id of created user
                    $reg_user_id = mysqli_fetch_assoc($result)['id']; 
    
                    // put logged in user into session array
                    $_SESSION['user'] = $this->getUserById($reg_user_id); 
    
                    // if user is admin, redirect to admin area
                    if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
                        $_SESSION['message'] = "You are now logged in";
                        // redirect to admin area
                        header('location: ' . BASE_URL . '/admin/dashboard.php');
                        exit(0);
                    } else {
                        $_SESSION['message'] = "You are now logged in";
                        // redirect to public area
                        header('location: index.php');				
                        exit(0);
                    
                    }
                } else {
                    array_push($errors, 'Wrong credentials');
                }
                
            }
        }
        

        public function mess(String $value)
        {	
            // bring the global db connect object into function
            global $conn;
    
            $val = trim($value); // remove empty space surrounding string
            $val = mysqli_real_escape_string($conn, $value);
    
            return $val;
        }

        public function getUserById($id)
        {
            global $conn;
            $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";
    
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);
    
            return $user; 
        }
    
    }

    $logUser = new User();

    if (isset($_POST['login_btn'])) {
        $logUser->Login();
    }

    if (isset($_POST['reg_user'])) {
        $logUser->RegisterUser();
    }

?>