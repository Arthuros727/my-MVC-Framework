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

    function Getall(){
        $sql = "SELECT * from users";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $row = $result->fetchAll();
        
        return $row;
    }

    function save($a, $b){
        $sql = "insert into users ( email, password) values ( '$a', '$b')";
        $result = $this->conn->prepare($sql);
        if($result->execute()){
            echo "<h1>DONE</h1>";
        }else{
            echo "<h1>ERROR TRY AGAIN</h1>";
        }
        
    }
}