<?php
class application_postgresql	{
    public $connections = array();
    public function __construct($reg)   {
	$dbname = 'erati';
	$dsn = "pgsql:dbname={$dbname}";
	echo $dsn;
	try {
	    $this->$dbname = new PDO($dsn,'erati','Bree1776');
	    $this->$dbname->name = $dbname;
	} catch(PDOException $e)    {
	  var_dump($e);
	  die();
	  
	}
    }
    public function __set($name, $value) {
	$this->connections[$name] = $value;
    }
    public function __get($name)    {
	return $this->connections[$name];
    }
}
?>
