<?php

require_once 'lib' . DIRECTORY_SEPARATOR .'bootstrap.php';
$ds = new Dispatcher();
$ds->dispatch();


/*
funtion global
*/

function printr($array=array())
 {
	  
	  echo '<pre>'; 
		print_r($array);
	  echo '</pre>'; 
	
}
function printrx($array=array())
 {
	
	  printr($array);
	  exit;
}