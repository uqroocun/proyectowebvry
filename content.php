<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="css/menu.css" />
    <script src="teclado.js"></script>
</head>
<body>

  <h1>
    Hola Bienveido!
  </h1>
  <header>
        <nav class="medio">
        <ul>
            <li> <a href="index.html">Inicio</a></li>
            <li> <a href="tc.html"> Tipos de Camping</a></li>
            <li> <a href="campamentos.html">Camping</a></li>
            <li><a href="registrodecamping.html"</li>Registra tu camping</a></li>
        </ul>
        </nav>
    </header>
    <section class="medio" >
    <img src="img/campin.jpg" class="ini">
    </section>
    <section class="medio2">
       <article>
        <p> es donde puedes buscar un buen campamneto a excelentes precio en diferenres lugares de cancun y quintana roo</p>
        <br>
        <p>Donde hay campamento de diferentes lugares incluso donde puedes acampar gratis en frente de las playas permitido por la zofema </p>
        </article>
    </section>
  <secction>
  <a href="logout.php">Cerrar sesión :)</a>
  </secction>

</body>
</html>
