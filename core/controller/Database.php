<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b9c6cdb5f21232";$this->pass="4252c0d2";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_cbd6a0f8ee7f409";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
