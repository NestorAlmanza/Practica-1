<?php
    include('conexion.php');
	/* Consulta de Tabla */
	$c = new Conexion();
	$info = $c->consultar();
	?>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Descripcion</th>
			<th>Prioridad</th>
		</tr>
		<?php
			foreach($info as $row) {
				echo "<tr>";
				echo "<td>" . $row['Id'] . "</td>";
				echo "<td>" . $row['Descripcion'] . "</td>";
				echo "<td>" . $row['Prioridad'] . "</td>";
				echo "</tr>";
			}
		?>
    </table>
     <!DOCTYPE HTML>
        <html>
     <body>	
	 <br>
            <form action="tarea.php">
            <input type="submit" value="Regresar" >
            </form>
        </body>
</html>