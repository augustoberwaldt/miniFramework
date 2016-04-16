<?php






spl_autoload_register(function($className){
		$prefix = '.php';   
		$path = (str_replace('\\','/', $className)).$prefix;  
	
		if (file_exists($path)) {
            require_once($path);
            return;
        }
});


