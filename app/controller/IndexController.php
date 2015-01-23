<?php

//require_once CLASSES . DS . 'Produto.php';
//require_once MODEL . DS . 'ProdutoModel.php';

class IndexController extends App_Controller {

    public function index() 
	{ 
      $produto= Load::loadClass('Produto');
	
       //printrx(get_class_methods('Produto'));
    }

    public function salva()
	{
        $this->view = NULL;
    }

}