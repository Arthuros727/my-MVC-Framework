<?php
spl_autoload_register(function ($c){
    // echo substr(__DIR__ , 0,-5). "/src/Model/" .  substr(str_replace('\\', '/',$c),4) . '.php';
    if (file_exists(substr(__DIR__ , 0,-5). "/" .  str_replace('\\', '/',$c) . '.php')) {
        require_once substr(__DIR__ , 0,-5). "/" .  str_replace('\\', '/',$c) . '.php';
     }
     elseif (file_exists(substr(__DIR__ , 0,-5). "/src/Controller/".  substr(str_replace('\\', '/',$c), 4) . '.php')) {
        require_once substr(__DIR__ , 0,-5). "/src/Controller/".  substr(str_replace('\\', '/',$c), 4) . '.php';
     }
     elseif (file_exists(substr(__DIR__ , 0,-5). "/src/Model/" .  substr(str_replace('\\', '/',$c),4) . '.php')) {
        require_once substr(__DIR__ , 0,-5). "/src/Model/" .  substr(str_replace('\\', '/',$c),4) . '.php';
     }
       
});
