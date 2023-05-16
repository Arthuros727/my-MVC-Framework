<?php

namespace Core;

use \Core\Router;
// use src\Controller;


class Core
{
    public function run()
    {
        require str_replace("Core", "", __DIR__) . "/src/routes.php";
        // echo "OUI ?";
        // echo $_SERVER["REQUEST_URI"]
        // var_dump($_SERVER["REQUEST_URI"]);
        // // setcookie("test", "u", time()+3600);
        // foreach($data as $k => $v){
            //     if($v == "app"){
                // var_dump($data["controller"]);
                //         echo 'uuu';
                //     }
                // }  
                
                
                // $ne = "\src\Controller\\$data['controller']Controller()";
        
        
                // $exec = '$data["action"]()';

                //routax classax
        $data = Router::get($_SERVER["REQUEST_URI"]);
        $ne = "\src\Controller\\". $data["controller"]. "Controller";
        $exec = $data["action"];
        $app = new $ne();
        $app->$exec();


        //routax dynamax:
        // $url= trim($_SERVER['REQUEST_URI'], "/");
        // $urlarray = explode("/", $url);
        // // var_dump($urlarray);
        // if($urlarray[0] == ""){
        //     echo"oio";
        //     // $ne = "\src\Controller\\". "App". "Controller";
        //     // $exec = "index";
        //     // echo $ne . " & " . $exec;
        //     $app = new \src\Controller\AppController();
        //     $app->index();

        // }
        // elseif(isset($urlarray[0]) && isset($urlarray[1])){
        //     $ne = ".\src\Controller\\". $urlarray[0]. "Controller.php";
        //     if(file_exists($ne)){
        //         $nee = substr($ne, 1, -4);
        //         // echo $nee;
        //         $exec = $urlarray[1];
        //         // echo $ne . " & " . $exec;
        //         $app = new $nee();
        //         if(!method_exists($app ,$exec)){
        //             $app = new \src\Controller\AppController();
        //             $app->error0();
        //         }else{

        //             $app->$exec();
        //         }
        //     }else{
        //         $app = new \src\Controller\AppController();
        //         $app->error0();
        //     }
        // }elseif(!isset($urlarray[1])){
        //     $ne = ".\src\Controller\\" . $urlarray[0] . "Controller.php";
        //     if (file_exists($ne)) {
        //         $nee = substr($ne, 1, -4);
        //     // $exec = "index";
        //     // echo $ne . " & " . $exec;
        //     $app = new $nee();
        //     $app->index();
        //     }else{
        //         $app = new \src\Controller\AppController();
        //         $app->error0();
        //     }

        // }
       


        // if($data["controller"] == 'app'){
        //     // echo "OUI";
        //     // include('./src/Controller/AppController.php');
        //     $app = new \src\Controller\AppController();
        //     $app->index();
        // }

        // if($data["controller"] == 'User'){
        //     // echo "OUI";
        //     // include('./src/View/User/register.php');
        //     // echo $data["action"]; 
        //     // echo $ne . "<br>";
        //     // echo $exec;
        //     $app = new \src\Controller\UserController();
        //     $app->add();
        // }



    }
}
