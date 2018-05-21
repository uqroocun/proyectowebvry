<HTML LANG="es">

<HEAD>
   <TITLE>Tabla de conversi�n de euros a pesos</TITLE>
   <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/menu.css" />
        <script src="teclado.js"></script>
</HEAD>

<BODY>

<H1>Conversi�n euros/pesos</H1>

<?PHP
   define ("EUROPTS", "166.386");
   for ($i=1; $i<=10; $i++)
      print ("$i � = " . $i*EUROPTS . " mxn<BR>\n");
?>

</BODY>
</HTML>
