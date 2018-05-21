<?php
  class Conexion{
    protected static $conn;
    function __construct(){
      if(self::$conn==null){
        try{
          self::$conn = new PDO("mysql:host=localhost;dbname=id5599005_res", "id5599005_res", "12345");
          self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          self::$conn->exec("SET CHARACTER SET UTF8");
        }catch(PDOException $e){
          die("No se pudo conectar a la base de datos. " . $e->getMessage());
        }
      }
    }
  }
?>
