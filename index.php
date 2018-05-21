<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    header("location:content.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registrase :V</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/menu.css" />
        <script src="teclado.js"></script>
    </head>
    <body>
        <h1>Es la Primera Vez que inicia sesion</h1>
        <form action="login.php" method="post">
        <label for="email">Correo:</label><br/>
        <input type="email" name="email">
         <br/><br/>

         <label for="pass">Password:</label><br>
         <input type="password" name="password" maxlength="8" required>

         <br/><br/>
         <input type="submit" name="submit" value="sing up">
         <input type="reset" name="clear" value="Borrar">
        
        </form>
        <section>
        <button type="button" href="reg.php" >Registro</button>
        </section>
    </body>
</html>