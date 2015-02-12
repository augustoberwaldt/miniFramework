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
    private  static $conn;

    private static final function getConnection() {
		
        if (is_null(self::$connection)) 
            self::$conn = new PDO(
								"mysql:host=".self::$host.";dbname=".self::$dbname, self::$user, self::$pass,
								array(PDO::ATTR_PERSISTENT => true)
							  );
	
    }

    public final function __construct() {
		$dados=include 'config/database.php'; 
		
		self::$host=$dados['host'];
		self::$dbname=$dados['schema'];
		self::$user=$dados['user'];
		self::$pass=$dados['pass'];
        self::getConnection();
        if (is_null($this->table))
            die("Tabela nao setada");
        if (is_null($this->pk))
            die("Primary Key não setada na propriedade pk");
    }

    public final function query($sql) {
	
		$stmt=self::$conn->prepare($sql);
        $stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->pk . "='" . $id . "'";
        return $this->query($sql);
    }
	
	
	
	
	

}