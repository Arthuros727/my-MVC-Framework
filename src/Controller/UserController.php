<?php

namespace src\Controller;
// include_once("UserModel.php");
class UserController extends \Core\Controller
{
    // public $_render;
    // public $oui = new UserModel;
    function __construct()
    {
    }
    public function registerAction(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            if(($_POST["email"] != "") && ($_POST["password"] != "") ){

                $o = new \src\Model\UserModel();
                $o->save($_POST["email"], $_POST["password"]);
            }
        }
}
    public function register()
    {
        $this->render('register'); // Va rendre la vue src / View / User / register . php
        
        // echo "oui";
    }

    public function error0(){
        $this->render("404");
    }


    public function add()
    {
        // header('Location: ./View/User/register.php');
        echo 'added';
    }

    public function index()
    {
        // header('Location: ./View/User/register.php');
        // echo 'indexed';
        $this->render('index');

    }

    public function login()
    {
    }



    function checkPost()
    {
        if (isset($_POST["UserName"]) && isset($_POST["Password"])) {
            // header('Location: ../src/routes.php');

            //or 

            return true;
        }
        // else{
        //     . . .
        // }
    }

    // function checkPush(){
    //     if($this->oui->push($_POST["UserName"],$_POST["Password"]) == true ){
    //         return true;
    //     }

    //     // else{
    //     //     . . .
    //     // }
    // }

}

