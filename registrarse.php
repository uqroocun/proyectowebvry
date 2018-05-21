<?php
  session_start();
  require 'Conexion.php';
  class Registrarse extends Conexion{
    function __construct(){
      parent::__construct();
    }
    function existsEmail($email){
      $stmt = "SELECT COUNT(id) FROM datus WHERE corr = :corr"; 
      $result = self::$conn->prepare($stmt);
      $result->execute(array(":corr"=>$email));
      $conteo = ($result->fetch(PDO::FETCH_ASSOC))["COUNT(id)"];
      return $conteo > 0 ? true : false;
      $result->closeCursor();
    }
    function insertRecord($corr, $cont){
      $stmt = "INSERT INTO datus (corr, con,) VALUES (:cor, :con)";
      $result = self::$conn->prepare($stmt);
      $result->execute(array(":cor"=>$correo, ":con"=>$cont));
      $conteo = $result->rowCount();
      return $conteo > 0 ? true : false;
      $result->closeCursor();
    }
  }


if(isset($_POST['registrarse'])){
  $corr = $_POST['corr'];
  $cont = $_POST['cont'];

  if(empty($corr)){
    echo "Escribe tu correo" . "<br>";
    $validCorr = false;
  }else{
    $validCorr = true;
  }
  if(empty($cont)){
    echo "Escribe tu contraseña" . "<br>";
    $validCont = false;
  }else{
    $validCont = true;
  }
  

  if($validCorr && $validCont && $iguales){
    $registro = new Registrarse();
    if(!$registro->existsEmail($corr)){
      $contHash = password_hash($cont1, PASSWORD_DEFAULT);
      if($registro->insertRecord($corr, $contHash)){
        $_SESSION['usuario'] = ""; 
        header("location:content.php");
      }else{
        echo "Hubo un problema al registrar el usuario";
      }

    }else{
      echo "El correo ya esta registrado, intenta con otro!";
    }
  }
}
?>
