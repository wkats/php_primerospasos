<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>:.Hola Mundo PHP.:</title>
</head>
<body>

<?php
/*Pequeña tabla que muestra
**un mensaje de bienvenida :)
*/
echo "<table>";
echo "	<tr>";
echo "		<th>¡Hola </th>";
echo "		<th> Mundo!</th>";
echo "	</tr>";
echo "	<tr>";
echo "		<td>Contenido</td>";
echo "		<td> programado ;)</td>";
echo "	</tr>	";
echo "</table>";

//Declaramos variables de varios tipos
//Int, Float, String, Boolean
$dia = 20; //Int
$sueldo = 2300.10; //Float
$nombre = 'René'; //String
$completado = true; //Boolean

echo "
<table>
	<tr>
		<th>Tipo de Dato</th>
		<th>Nombre de Variable</th>
		<th>Valor</th>
	</tr>
	<tr>
		<td>Int</td>
		<td>dia</td>
		<td>$dia</td>
	</tr>
	<tr>
		<td>Float</td>
		<td>sueldo</td>
		<td>$sueldo</td>
	</tr>
	<tr>
		<td>String</td>
		<td>nombre</td>
		<td>$nombre</td>
	</tr>
	<tr>
		<td>Boolean</td>
		<td>completado</td>
		<td>$completado</td>
	</tr>
</table>
";
?>


	
</body
></html>