<?php

		
class Dispatcher {
	public function dispatch() {
		
		if(!isset($_GET['request']))
		  $_GET['request']='index';
		
		$path = $_GET['request']; 		
		$exploded = explode('/',$path);
        
		$controller = isset($exploded[0]) && !empty($exploded[0]) ? $exploded[0] : 'index';
		unset($exploded[0]);
		$action = isset($exploded[1]) && !empty($exploded[1]) ? $exploded[1] : 'index';
		unset($exploded[1]);
		$params = array_values($exploded);
	
		$controller_class = ucwords($controller).'Controller';
		$model_class = ucwords($controller).'Model';
		
		$file = CONTROLLER.DS.$controller_class . '.php';
		$model= MODEL.DS.$model_class.'.php';
		if(!file_exists($file))
			die('Crie o arquivo ' . $file);
		
		require_once  $file;
		$object = new $controller_class();
	    if(file_exists($model)){ 
     	   require_once $model;
		   $object->$model_class=new $model_class;
		}
	
		 if(!method_exists($object,$action)){
			 die('Controller  não encontrou action'); 
			 
		 }
		 
		if(!empty($params))
		    call_user_func_array(array($object,$action),$params);
		
		call_user_func(array($object,$action));
		
		// Render
		if($object->useView())
			$object->render();
		
		unset($object);
	}
	
	
	
}