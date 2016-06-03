
<html>
 <head>
 <title>Mostrar informacion en nuestro formulario</title>
 </head>
 <body>
Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años.
 </body>
</html>