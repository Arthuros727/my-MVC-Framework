<?php

namespace Core;

class Controller
{
    protected $_render;
    protected function render($view, $scope = [])
    {
        // chdir('../../../..');
        // echo getcwd();
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', basename(get_class($this))), $view]) . '.php';

        // $f = "C:/MAMP/htdocs/delivery/mvc/src/View/App/404.php";
        
        $f = str_replace('\\', '/', $f);
    //    echo $f;
        // echo $_SERVER['DOCUMENT_ROOT'];
        
    
        if (file_exists($f)) {
            // echo "oui";
           
            ob_start();
            include($f);
            $view = ob_get_clean();
            // var_dump(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
            // echo $view;
            // echo "ooo";
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
            // ob_get_clean();
            
            $this->_render = ob_get_clean();
            echo $this->_render;
            
            // echo self::$_render;
        }
    }
}
