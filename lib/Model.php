<?php

abstract class Model {

    private static $connection = NULL;
    private static $user = 'root';
    private static $pass = '';
    private static $dbname = 'exclusivacastor';
    private static $host = 'localhost';
    private static $dbHandle = NULL;
    protected $table = NULl;
    protected $pk = NULl;

    private static final function getConnection() {
        if (is_null(self::$connection)) {
            self::$connection = mysql_connect(self::$host, self::$user, self::$pass) or die('Nao foi possivel conectar');
            self::$dbHandle = mysql_select_db(self::$dbname, self::$connection) or die('Nao foi possivel selecionar o banco');
        }
    }

    public final function __construct() {
        self::getConnection();
        if (is_null($this->table))
            die("Tabela nao setada");
        if (is_null($this->pk))
            die("Primary Key não setada na propriedade pk");
    }

    public final function query($sql) {
        return mysql_query($sql, self::$connection);
    }

    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->pk . "='" . $id . "'";
        return $this->query($sql);
    }
	/*
	public final function find($array=array()){
	  $sql='select ';
	  
	   if(in_array('campos',$array){
	     if(is_array($array['campos'])){
		    $sql+=implode(',',$array['campos']);
		 }else{
		     if(!empty($array['campos']))
				$sql+=$array['campos'];
			 else 
			    $sql+='*';	
		 }
	   }              
	   if(in_array('filtro',$array){
	   
	       if(is_array($array['filtro'])){
		       foreach($array['filtro'] as $key=> $value ){
			      
			   }
		   }else{
		                
		        $sql+=
		   }
	   }  
      if(in_array('join',$array)   	   
	     
	}
	
	
	*/
	
	
	
	
	

}