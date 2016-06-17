 <html>
	<head>
		<title>Actualizar</title>
		<link rel="stylesheet" href="Formulario/estilo.css"> <!--relacion con css-->

	</head>
		<?php			
						 include ("conexion.php");
						
						$ID_Proveedor=$_POST['ID_Proveedor'];
						$Nombre_Proveedor=$_POST['Nombre_Proveedor'];
						$Apellidos=$_POST['Apellidos'];
						$RFC_Empresa=$_POST['RFC_Empresa'];
						$Nombre_Empresa=$_POST['Nombre_Empresa'];
						$Direccion_Empresa=$_POST['Direccion_Empresa'];
						$Ciudad=$_POST['Ciudad'];
						$Telefono_Empresa=$_POST['Telefono_Empresa'];
						
				
						mysqli_query($conexion,"UPDATE registro1 SET Nombre_Proveedor='$Nombre_Proveedor',
						Apellidos='$Apellidos',
						RFC_Empresa='$RFC_Empresa',
						Nombre_Empresa='$Nombre_Empresa',
						Direccion_Empresa='$Direccion_Empresa',
						Ciudad='$Ciudad',
						Telefono_Empresa='$Telefono_Empresa' 
						where ID_Proveedor='$ID_Proveedor'")
						or die("ERROR AL ACTUALIZAR LOS DATOS");
						
						echo "DATOS ACTUALIZADOS CORRECTAMENTE";
						
						
						
						
			?>
	</html>