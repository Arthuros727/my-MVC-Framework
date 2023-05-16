<?php
namespace src\Controller;
// require("../../Core.php");
class AppController extends \Core\Controller {

    public function index(){
        $this->render('index');
    }

    public function error0(){
        $this->render("404");
    }

}

