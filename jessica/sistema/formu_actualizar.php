<html>
		<head>
			<title>Formu actualizar</title>
			<link rel="stylesheet" href="Formulario/estilos.css"> <!--relacion con css-->
		</head>
	<body>
	
			<form action="actualizar.php" method="POST">
				<input type="text" name= "ID_Proveedor" placeholder="ID_Proveedor">
			    <input type="text" name= "Nombre_Proveedor" placeholder="Nombre_Proveedor"> <!--atributos-->
				<input type="text" name= "Apellidos" placeholder="Apellidos"> <!--atributos-->
				<input type="text" name= "RFC_Empresa" placeholder="RFC_Empresa"> <!--atributos-->
				<input type="text" name= "Nombre_Empresa" placeholder="Nombre_Empresa"> <!--atributos-->
				<input type="text" name= "Direccion_Empresa" placeholder="Direccion_Empresa"> <!--atributos-->
				<input type="text" name= "Ciudad" placeholder="Ciudad"> <!--atributos-->
				<input type="text" name= "Telefono_Empresa" placeholder="Telefono"> 
				<input type="submit" value="Actualizar Registro" name="btnactualizar">
				<input type="reset" name="borrar" value="Limpiar Formulario">
			</form>
	</body>
</html>