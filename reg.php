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
	<title>REgistro </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/menu.css" />
    <script src="teclado.js"></script>
</head>
<body>
 <h1>Registro de Aventureros</h1>
     <form class="medio" action="registrarse.php" method="post" >
         <label for="nombre">Nombre Completo:</label><br/>
         <input type="text" maxlength="32" required>
         <br/>
          <label for="email">Correo:</label><br/>
          <input type="email"  name="corr">


         <label for="pass">Comtraseña</label><br>
         <input type="password" name="cont" maxlength="8" required><br>
         <input type="password" pattern=".{6,}"><br>
         <label for="telefono">Telefono</label><br>
         <input type="tel" name="telefono"><br>
		<label for="sexo">sexo</label><br>
			<input type="radio" name="hm" value="h"><p> Hombre</p><br>
		    <input type="radio" name="hm" value="m"><p> Mujer</p><br>
		 <label for="Ciu">ciudad</label><br>
		 <input type="text" name="ciudad">		  



         <br/><br/>
         <input type="submit" name="submit" value="Registrarme">
         <input type="reset" name="clear" value="Borrar">
     </form>
</body>
</html>