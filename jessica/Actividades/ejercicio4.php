<html>
 <head>
  <title> Ejemplo usando estructuras de control y funciones</title>
 </head>
 <body>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'Está usando Internet Explorer.<br />'; 
	
}
?>
 </body>
</html>