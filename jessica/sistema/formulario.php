
<html>
		<head>
			<title>Formulario de Registro Proveedor</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="Formulario/estilos.css"> <!--relacion con css-->
		</head>
		<body>
		 <?php 
		 require("conexion.php");
        ?>
			<form action="registrado.php" method=post name="Formulario">
					<h2>Registro de Proveedor</h2>
				<input type="text" name= "Nombre_Proveedor" placeholder="Nombre_Proveedor"> <!--atributos-->
				<input type="text" name= "Apellidos" placeholder="Apellidos"> <!--atributos-->
				<input type="text" name= "RFC_Empresa" placeholder="RFC_Empresa"> <!--atributos-->
				<input type="text" name= "Nombre_Empresa" placeholder="Nombre_Empresa"> <!--atributos-->
				<input type="text" name= "Direccion_Empresa" placeholder="Direccion_Empresa"> <!--atributos-->
				<input type="text" name= "Ciudad" placeholder="Ciudad"> <!--atributos-->
				<input type="text" name= "Telefono_Empresa" placeholder="Telefono"> <!--atributos-->
				<input type="submit" name="botonGuardar" value="Registrar"> <!--creacion de un boton-->
				<input type="reset" name="borrar" value="Limpiar Formulario"> <!--creacion de un boton-->
			</form>
		</body>
</html>
		