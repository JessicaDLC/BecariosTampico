   <?php
		require('coneccion.php');
		
		$Nombre_Proveedor=$_POST['Nombre_Proveedor'];
		$Apellidos=$_POST['Apellidos'];
		$RFC_Empresa=$_POST['RFC_Empresa'];
		$Nombre_Empresa=$_POST['Nombre_Empresa'];
		$Direccion_Empresa=$_POST['Direccion_Empresa'];
		$Ciudad=$_POST['Ciudad'];
		$Telefono_Empresa=$_POST['Telefono_Empresa'];
		
		
		
		$insertar="INSERT INTO registro1 (Nombre_Proveedor,Apellidos,RFC_Empresa,Nombre_Empresa,Direccion_Empresa,Ciudad,Telefono_Empresa) VALUES('','$Nombre_Proveedor','$Apellidos','$RFC_Empresa','$Nombre_Empresa','$Direccion_Empresa','$Ciudad','$Telefono_Empresa')";
		mysql_query($insertar);
		echo
		"REGISTRO EXITOSO";
		
   ?>
   
  