<?php

class ProdutosController extends Controller {

    public function __construct() {
    }
    public function index($id=null){
		printrx($id);	
	}
    public function remover($id = null) {
        $this->view = null;
		printrx('dfvfbfb');
    }

}