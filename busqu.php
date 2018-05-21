<HTML LANG="es">

<HEAD>
   <TITLE>busqueda de Campamento</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="menu.css">
</HEAD>

<BODY>

<?PHP
   $insertar = $_REQUEST['insertar'];
   if (isset($insertar))
   {

      $tipo = $_REQUEST['tipo'];
      $zona = $_REQUEST['zona'];
      $direccion = $_REQUEST['direccion'];
      $ndormitorios = $_REQUEST['ndormitorios'];
      $precio = $_REQUEST['precio'];
      $tamano = $_REQUEST['tamano'];
      $extras = $_REQUEST['extras'];
      $observaciones = $_REQUEST['observaciones'];

      print ("<H1>Insercion de Campamento</H1>\n");

      $errores = "";
      if (trim($direccion) == "")
         $errores = $errores . "   <LI>Se requiere la direcci�n del campamento\n";
      if (!is_numeric($tamano))
         $errores = $errores . "   <LI>El tama�o debe ser un valor num�rico\n";
      if (!is_numeric($precio))
         $errores = $errores . "   <LI>El precio debe ser un valor num�rico\n";

      $copiarFichero = false;


      if (is_uploaded_file ($_FILES['foto']['tmp_name']))
      {
         $nombreDirectorio = "fotos/";
         $nombreFichero = $_FILES['foto']['name'];
         $copiarFichero = true;

         $nombreCompleto = $nombreDirectorio . $nombreFichero;
         if (is_file($nombreCompleto))
         {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
         }
      }
      else if ($_FILES['foto']['error'] == UPLOAD_ERR_FORM_SIZE)
      {
      	 $maxsize = $_REQUEST['MAX_FILE_SIZE'];
         $errores = $errores . "   <LI>El tama�o del fichero supera el l�mite permitido ($maxsize bytes)\n";
      }
      else if ($_FILES['foto']['name'] == "")
         $nombreFichero = '';
      else
         $errores = $errores . "   <LI>No se ha podido subir el fichero\n";

      if ($errores != "")
      {
         print ("<P>No se ha podido realizar la inserci�n debido a los siguientes errores:</P>\n");
         print ("<UL>\n");
         print ($errores);
         print ("</UL>\n");
         print ("<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>\n");
      }
      else
      {

         if ($copiarFichero)
            move_uploaded_file ($_FILES['foto']['tmp_name'], $nombreDirectorio . $nombreFichero);

         print ("<P>Estos son los datos introducidos:</P>\n");
         print ("<UL>\n");
         print ("   <LI>Tipo: $tipo\n");
         print ("   <LI>Zona: $zona\n");
         print ("   <LI>Direccion: $direccion\n");
         print ("   <LI>Numero de dormitorios: $ndormitorios\n");
         print ("   <LI>Precio: $precio &euro;\n");
         print ("   <LI>Tama�o: $tamano metros cuadrados\n");
         print ("   <LI>Extras: ");

         foreach ($extras as $extra)
            print ($extra . " ");
         print ("\n");

         if ($copiarFichero == true)
            print ("   <LI>Foto: <A TARGET='_blank' HREF='$nombreDirectorio$nombreFichero'>$nombreFichero</A>\n");
         else
            print ("   <LI>Foto: (no hay)\n");

         print ("   <LI>Observaciones: $observaciones\n");
         print ("</UL>\n");
         print ("<P>[ <A HREF='practica7.php'>Insertar otro campamento </A> ]</P>\n");
      }
   }
   else
   {
?>

<H1>Inserci�n de Campamento</H1>

<P>Introduzca los datos de la vivienda:</P>

<FORM CLASS="borde" ACTION="practica7.php" METHOD="POST" ENCTYPE="multipart/form-data">

<P><LABEL>Tipo de vivienda:</LABEL>
<SELECT NAME="tipo">
   <OPTION VALUE="Piso" SELECTED>Piso
   <OPTION VALUE="Adosado">playa
   <OPTION VALUE="Chalet">laguna
   <OPTION VALUE="terreno">cenote
</SELECT></P>

<P><LABEL>Zona:</LABEL>
<SELECT NAME="zona">
   <OPTION VALUE="norte">norte 
   <OPTION VALUE="sur">sur
   <OPTION VALUE="este">este
   <OPTION VALUE="oeste">oeste
   <OPTION VALUE="aleatoreo">aleatoreo
</SELECT></P>

<P><LABEL>Direcci�n:</LABEL>
<INPUT TYPE="TEXT" NAME="direccion"></P>

<P><LABEL>N�mero de campamentos:</LABEL>
<INPUT TYPE="radio" NAME="ndormitorios" VALUE="1">1
<INPUT TYPE="radio" NAME="ndormitorios" VALUE="2">2
<INPUT TYPE="radio" NAME="ndormitorios" VALUE="3" CHECKED>3
<INPUT TYPE="radio" NAME="ndormitorios" VALUE="4">4
<INPUT TYPE="radio" NAME="ndormitorios" VALUE="5">5</P>

<P><LABEL>Precio:</LABEL>
<INPUT TYPE="TEXT" NAME="precio"> &peso;</P>

<P><LABEL>Tama�o:</LABEL>
<INPUT TYPE="TEXT" NAME="tamano"> metros cuadrados</P>

<P><LABEL>Extras (marque los que procedan):</LABEL>
<INPUT TYPE="checkbox" NAME="extras[]" VALUE="Piscina">Piscina
<INPUT TYPE="checkbox" NAME="extras[]" VALUE="Jard�n">Jard�n
<INPUT TYPE="checkbox" NAME="extras[]" VALUE="Estacionamiento">Estacionamiento</P>

<P><LABEL>Foto:</LABEL>
<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
<INPUT TYPE="FILE" NAME="foto"></P>

<P><LABEL>Observaciones:</LABEL>
<TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Insertar campamentos"></P>

</FORM>

<?PHP
   }
?>

</BODY>
</HTML>
