
<html>
	<head>
		<title>Consulta</title>
		<link rel="stylesheet" href="Formulario/estilo.css"> <!--relacion con css-->

	</head>
	<body>
		<?php
			
			include ("conexion.php");
		?>
		
		
		<table border="1" >
			 <tr>
				<td colspan="10"><h3><center>Registro de Proveedores</center></h3></td>
			 </tr>
			 <tr>
				<td>ID_Proveedor</td>
				<td>Nombre_Proveedor</td>
				<td>Apellidos</td>
				<td>RFC_Empresa</td>
				<td>Nombre_Empresa</td>
				<td>Direccion_Empresa</td>
				<td>Ciudad</td>
				<td>Telefono_Empresa</td>
			 </tr>	

			 
   <?php
	$result = mysqli_query($conexion," select * from registro1 ");
	while($row = mysqli_fetch_array($result)){ ?>
	 <tr>
		<td><?php echo $row["ID_Proveedor"];?></td>
		<td><?php echo $row["Nombre_Proveedor"];?></td>
		<td><?php echo $row["Apellidos"];?></td>
		<td><?php echo $row["RFC_Empresa"];?></td>
		<td><?php echo $row["Nombre_Empresa"];?></td>
		<td><?php echo $row["Direccion_Empresa"];?></td>
		<td><?php echo $row["Ciudad"];?></td>
		<td><?php echo $row["Telefono_Empresa"];?></td>
	 </tr>
	
	<?php 
	}
	
	?>
	
		</table>
		<center>
		
			 <td><h3><a href="formu_actualizar.php"> Actualizar</a></h3></td>
			 <td><h3><a href="F_elimiar.php"> Eliminar</a></h3></td>
			 
		</center>
		</center>
	</body>
</html>