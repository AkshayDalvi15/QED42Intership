<?php

class Database
{
    public $conn;
    public $error;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "phppractice");
        if(!$this->conn){
            echo "DataBaser Connection Error " . mysqli_connect_error($this->conn);
        }
    }
}

?>