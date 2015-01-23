<?php

class Load {

	public function loadModel($model){
	
	  
	
	}
	public static function loadClass($class){
	
	   $pathClass= APP.DS.'classes'.DS.$class.'.php'; 
    	
       if(!file_exists($pathClass)){
			return false;
	    }
			
        include_once($pathClass);
    
	   return new $class; 	
 	    
	}
	/*
	public function __autoload($classname) {
		
		if(!file_exists($classname))
		 return false;
 
		include_once($classname);
		return true;
				
   }*/
}