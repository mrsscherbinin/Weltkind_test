<?php

class Model{
	
	public static $db;

	public function __construct(){
		try {
		    self::$db = new PDO('mysql:host=localhost;dbname='.DBNAME.'', DBUSER, DBPASS);
		    self::$db->exec('SET NAMES utf8');

		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

}