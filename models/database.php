<?php
class Database
{
   protected $pdo = null;
   public function __construct(){
       try {
           $this->pdo = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
       } catch (Exception $e ){
           die($e->getMessage());
       }
   }
}