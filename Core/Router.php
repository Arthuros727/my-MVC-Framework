<?php

namespace Core;
// session_start();
class Router
{
    private static $instance = null;
    // public $array = array("../src/Controller/UserController.php"=>"", "Ben"=>"37", "Joe"=>"43");
    private static $routes;
    public static function connect($url, $route)
    {
        self::$routes[$url] = $route;
    }
    public static function get($url)
    {
        if (array_key_exists($url, self::$routes)) {
            echo 'test';
            return self::$routes[$url];
            // $_SESSION["DATA"] = $u;
            // return $u;
            // setcookie("testuuuu", $u, time()+3600);
        } else {
            return 'noooo';
        }
        // retourne un tableau associatif contenant
        // - le controller a instancier
        // - la methode du controller a appeler
    }

    public static function getInstance() 
	{ 
		if(is_null(self::$instance)) 
		{ 
			self::$instance = new self; 
		} 
  
		return self::$instance; 
	}

    // input : User/login
    // output : array [1]: User [2]: login
    // function qui traite le text pour avoir l'output en fonction de l'imput

    // public function appelerAction() 
	// { 
	// 	// Construction du chemin vers la classe de l'action 
	// 	$classeControleur = 'application\\modules\\'.$this->getModule().'\\controllers\\'.$this->getAction(); 
  
	// 	// Instanciation de la classe contrôleur de l'action 
	// 	$controleur = new $classeControleur(); 
  
	// 	// Appel de la méthode par défaut de toute classe d'action 
	// 	$controleur->index(); 
	// }


}
