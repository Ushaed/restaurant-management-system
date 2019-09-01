<?php 
include 'config.php';
 /**
  * summary
  */
 class Database
 {
     // Databse class for Connect to database
     // 
 	public $host   = DB_HOST;
 	public $user   = DB_USER;
 	public $pass   = DB_PASS;
 	public $dbname = DB_NAME;

 	public $pdo;
 	public $error;

     public function __construct()
     {
         if (!isset($this->pdo)) {
         	try {
         		$link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
         		$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         		$this->pdo = $link;

         	} catch (PDOException $e) {
         		die("Failed to Connect Database").$e->getMessage();
         	}
         }
     }

    
 }