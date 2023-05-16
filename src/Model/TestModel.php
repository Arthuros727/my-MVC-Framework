<?php

namespace src\Model;
use \PDO;
class UserModel{
    public $conn;
    private $email;
    private $password;
    function  __construct(){
    $servername = "mysql:dbname=MVC;host=127.0.0.1";
    $username = "new_user";
    $password = "password";
    
    // Create connection
    $this->conn = new PDO($servername, $username, $password);
    
    // Check connection
    if (!$this->conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    }

   
}