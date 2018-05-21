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

   define ("EUROPTS", "20");

   print ("<TABLE WIDTH='200'>\n");
   print ("<TR BGCOLOR='#FFEECC'>\n");
   print ("   <TH>Euros</TH>\n");
   print ("   <TH>Pesos</TH>\n");
   print ("</TR>\n");
   $color0 = "#CCCCCC";
   $color1 = "#CCEEFF";
   for ($i=1; $i<=10; $i++)
   {
      $j = $i%2;
      $colorFila = "color" . $j;
      print ("<TR ALIGN='CENTER' BGCOLOR=${$colorFila}>\n");
      print ("   <TD>$i</TD>\n");
      print ("   <TD>" . $i*EUROPTS . "</TD>\n");
      print ("</TR>\n");
   }
   print ("</TABLE>\n");
?>

</BODY>
</HTML>
