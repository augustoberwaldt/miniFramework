<?php

class Load {

	public function loadModel($model){
	   
	    $pathModel = APP.DS.'model'.DS.$model.'.php'; 
	
		if(!file_exists($pathModel)){
			return false;
	    }
	    include_once($pathModel);
	    
		$controller = ClassRegistry::getInstance();
	  	$controller = $controller->objects['controller'];
		$controller->$model = new $model(); 
	
	}
	public static function loadClass($class){
	
	   $pathClass= APP.DS.'classes'.DS.$class.'.php'; 
    	
       if(!file_exists($pathClass)){
			return false;
	    }
			
        include_once($pathClass);
    
	    return new $class; 	
 	         
	}
	
	public static function loadView($view)
	{
	   $pathView = VIEW.DS.$view.'.php'; 
       if(!file_exists($pathView)){
			return false;
	   }
       require_once $pathView;
       return true;
	}
	
	
	
}