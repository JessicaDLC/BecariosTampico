

<?php
$s= "localhost";
$u= "root";
$pw= "";
$bd= "proveedores";

	$conexion=new mysqli($s,$u,$pw,$bd);

if($conexion -> connect_errno){

	echo "No conectado";
}
else{
	
	//echo "conectado";
}

?>