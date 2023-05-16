<?php
define('BASE_URI',str_replace('\\','/',substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));
// require_once(implode(DIRECTORY_SEPARATOR,['src','autoload.php']));

// $app = new Controller\UserController;
// $app->go();     

$app = new Core\Core() ;
$app->run() ;
// $app3 = new Core\tata() ;
// $app3->run() ;
// $app4 = new src\titi() ;
// $app4->run() ;
// require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));

// $app2 = new src\toto();
// $app2->run();

?>

    
        <?php  
    // echo "POST : <br>";
    // if(isset($_POST)){

    //     foreach($_POST as $value){
    //         echo "---",$value, "<br>";
    //     }
    // }
    // echo "GET : <br>";
    // if(isset($_GET)){

    //     foreach($_GET as $value){
    //         echo "---",$value, "<br>";
    //     }
    // }
    // echo "SERVER : <br>";
    // if(isset($_SERVER)){

    //     foreach($_SERVER as $key=>$value){
    //         echo "---$key---",$value, "<br>";
    //     }
    // }
    
    ?> 
      

<?php 
// $UserName = $_POST["UserName"];
// $Password = $_POST["Password"];

// echo "UserName : " , $UserName, "<br>";
// echo "Password : " , $Password, "<br>";