 <html>
	<head>
		<title>Eliminar</title>
		<link rel="stylesheet" href="Formulario/estilo.css"> <!--relacion con css-->

	</head>
	<body>
			<?php
					
						include ("conexion.php");
						
						$ID_Proveedor = $_POST['prove'];
						
				
						mysqli_query($conexion,"DELETE from registro1 where ID_Proveedor='$ID_Proveedor'")
						or die("ERROR AL ELIMINAR LOS DATOS");
						
						mysqli_close($conexion);
						echo "DATOS ELIMADOS CORRECTAMENTE"
						
						
			?>
	 </body>
</html>	 