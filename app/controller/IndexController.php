<?php


use  Vendor\classes\Test\Teste;
/**
	 *@param int
	 *//** 
     * A test class
     *
     * @param  foo bar
     * @return baz
     */
class IndexController extends App_Controller {

    /**
	 *@param int
	 *//** 
     * A test class
     *
     * @param  foo bar
     * @return baz
     */

    public function index() 
	{ 
	  $reflector = new ReflectionClass('IndexController');
	 
	 printr($reflector->getMethod('index')->getDocComment());
 printrx($reflector->getDocComment());
      $i =1;
	  foreach($properties as $property)
	  {

		echo ucfirst($property->getName())."<br>";
	   
		$i++;
	  }	
    }

    public function salva()
	{
        $this->view = NULL;
    }

}