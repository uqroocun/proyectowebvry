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

   define ("EUROPTS", "21");

   print ("<TABLE BORDER WIDTH='200'>\n");
   print ("<TR>\n");
   print ("   <TH>Euros</TH>\n");
   print ("   <TH>Pesos</TH>\n");
   print ("</TR>\n");
   for ($i=1; $i<=10; $i++)
   {
      print ("<TR ALIGN='CENTER'>\n");
      print ("   <TD>$i</TD>\n");
      print ("   <TD>" . $i*EUROPTS . "</TD>\n");
      print ("</TR>\n");
   }
   print ("</TABLE>\n");
?>

</BODY>
</HTML>
