  <html>
	<head>
		<title>Actualizar</title>
		<link rel="stylesheet" href="Formulario/estilo.css"> <!--relacion con css-->

	</head>
 
 
 <?php 
 
	   include ("conexion.php");
		if
		(isset($_POST['Nombre_Proveedor']) && !empty($_POST['Nombre_Proveedor'])&&
		isset ($_POST['Apellidos']) && !empty($_POST['Apellidos'])&&
		isset ($_POST['RFC_Empresa']) && !empty($_POST['RFC_Empresa'])&&
		isset ($_POST['Nombre_Empresa']) && !empty($_POST['Nombre_Empresa'])&&
		isset ($_POST['Direccion_Empresa']) && !empty($_POST['Direccion_Empresa'])&&
		isset ($_POST['Ciudad']) && !empty($_POST['Ciudad'])&&
		isset ($_POST['Telefono_Empresa']) && !empty($_POST['Telefono_Empresa'])){
		
		
			$Nombre_Proveedor=$_POST['Nombre_Proveedor'];
			$Apellidos=$_POST['Apellidos'];
			$RFC_Empresa=$_POST['RFC_Empresa'];
			$Nombre_Empresa=$_POST['Nombre_Empresa'];
			$Direccion_Empresa=$_POST['Direccion_Empresa'];
			$Ciudad=$_POST['Ciudad'];
			$Telefono_Empresa=$_POST['Telefono_Empresa'];
			
			mysqli_query($conexion,"INSERT INTO registro1(ID_Proveedor,Nombre_Proveedor,Apellidos,RFC_Empresa,Nombre_Empresa,Direccion_Empresa,Ciudad,Telefono_Empresa) VALUES('','$Nombre_Proveedor','$Apellidos','$RFC_Empresa','$Nombre_Empresa','$Direccion_Empresa','$Ciudad','$Telefono_Empresa')");
			echo "GUARDADO CORRECTAMENTE";
			
		}
		else
		{
			echo "Debes llenar los campos.";
		}

 ?>
   </html>