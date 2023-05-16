<?php

use \Core\Router;

Router::connect ( '/' , ['controller' => 'App' , 'action' => 'index' ]) ;
Router::connect ( '/register' , [ 'controller' => 'User' , 'action' => 'add' ]) ;
Router::connect ( '/test' , [ 'controller' => 'Test' , 'action' => 'pie' ]) ;
