<?php
abstract class Controller  {
	protected $view = NULL;
	private $viewVars = array();
	private $action;
	
	public function __construct() 
	{
		ClassRegistry::set('controller', $this);
	}
	
	public final function render() {
		
		$file_view = VIEW.DS.$this->view.'.php';
		if(!file_exists($file_view))
			die("Crie a view no diretorio: " . $file_view);
		
		extract($this->viewVars);
		require_once($file_view);
	}
	
	protected final function set($name,$value) {
		$this->viewVars[$name] = $value;
	}
	
	public function useView() {
		return $this->view != NULL;
	}
	
	protected final function remove($name) {
		if(isset($this->viewVars[$name])) {
			unset($this->viewVars[$name]);
			return true;
		}
		return false;
	}
}