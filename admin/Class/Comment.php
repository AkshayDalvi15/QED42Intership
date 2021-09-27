
<?php
require_once('Database.php');


class Comment extends Database {

  public function AddComment() {
      global $conn;
      $user_id = $_SESSION['user']['id'];
      extract($_POST);
      
      
      $query = "INSERT INTO comment (post_id,user_id,comment_desc)
                  VALUES ('$post_id','$user_id','$desc')";
      $result = mysqli_query($conn, $query);
      header("Location: show_post.php?id=" . $post_id);
      exit;
  }

  public function showComment($post_id) {
      global $conn;
      $usercomment = array();

      $query = "SELECT * FROM comment WHERE post_id = $post_id ";
      $result = mysqli_query($conn, $query);
      $res = mysqli_fetch_all($result,MYSQLI_ASSOC);
      
      foreach ($res as $in) {
          $in['username'] = $this->getUserName($in['user_id']);
          array_push($usercomment, $in);
        }
      return $usercomment;
  }

  public function getUserName($user_id) {
      global $conn;
      $query = "SELECT username FROM users WHERE id=$user_id";
      $result = mysqli_query($conn, $query);
      if ($result) {
        // return username
        return mysqli_fetch_assoc($result)['username'];
      } else {
        return null;
      } 

  }  
}
