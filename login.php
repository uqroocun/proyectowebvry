
<?php
  session_start();
  require 'Conexion.php';
  class Login extends Conexion{
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
    function getData($email){
      $stmt = "SELECT * FROM datus WHERE corr = :corr";
      $result = self::$conn->prepare($stmt);
      $result->execute(array(":corr"=>$email));
      return $result->fetch(PDO::FETCH_ASSOC);
      $result->closeCursor();
    }
  }

  if(isset($_POST['login'])){
    $corr = $_POST['corr'];
    $cont = $_POST['cont'];

    if(empty($corr)){
      echo "Introducce tu correo" . "<br>";
      $validCorr = false;
    }else{
      $validCorr = true;
    }

    if(empty($cont)){
      echo "Introducce tu contraseña!" . "<br>";
      $validCon = false;
    }else{
      $validCon = true;
    }

    if($validCorr && $validCon){
      $login = new Login();
      if($login->existsEmail($corr)){
        $contaHash = ($login->getData($corr))["cont"];
        if(password_verify($cont, $contHash)){
          $_SESSION['usuario'] = "";
          header("location:content.php");
        }else {
          echo "Contraseña incorrecta";
        }

      }else{
        echo "No se encontró el correo en la base de datos!";
      }
    }

  }

 ?>
