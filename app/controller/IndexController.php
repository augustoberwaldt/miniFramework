<?php

//require_once CLASSES . DS . 'Produto.php';
require_once MODEL . DS . 'ProdutoModel.php';

class IndexController extends App_Controller {

    public function index() 
	{ 
      ///$produto= Load::loadClass('Produto');
	   $model= new ProdutoModel();
       printrx($model->query("select * from clientes limit 20"));
    }

    public function salva()
	{
        $this->view = NULL;
    }

}