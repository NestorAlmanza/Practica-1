<!DOCTYPE html>
<?php
	include('conexion.php');
?>
    <HTML>
        
        <title>Formulario Tareas</title>
        <body bgcolor="#C0C0C0">
            <h1 align="center">Agregar Tareas </h1>
        <form action="insertar.php" method="POST">
                <br><br>
                <br> <h2>Descripcion</h2><br>
                <textarea cols="60" name="descripcion" spellcheck="true" rows="4"> </textarea>
                <br><h1>Prioridad</h1>
                <select name="prioridad">
                    <option value="baja">Baja</option>
                    <option value="media">Medio</option>
                    <option value="alta">Alta</option>

                </select>
            <style>
                h2, h1{
                    color: chocolate;
                    font-family: cursive;
                }
        </style>
                <br><br><input type="submit" value="Guardar" >
                <br><a href="Consulta.php" target="_self">Consultar base de datos</a>
        </form>  
                
</body> 

            

</html>