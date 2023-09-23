<?php
$servername = "localhost";
$database = "notas";
$username = "Helio";
$password = "helio123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully, ";
}       
        //Paso 3 es hacer la sentencia sql y ejecutarla
                $sql = "SELECT * FROM datos";
                $ejecuta_sentencia = mysqli_query($conn,$sql);
                if(!$ejecuta_sentencia){
                        echo'hay un error en la sentencia de sql: '.$sql;
                }else{
        //Paso 4 es traer los resultados como un array para imprirlos en pantalla
                        $lista_datos = mysqli_fetch_array($ejecuta_sentencia);
                }


?>
<!DOCTYPE hmtl>
<html>
        <head>
                <title>Mostrar Datos</title>
                <link rel="stylesheet" type="text/css" href="estilo.css">
        </head>
        <body>
                <h1>Registros de usuarios en la base de datos</h1>
                <table>
                        <thead>
                                <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Username</th>
                                        <th>Correo</th>
                                </tr>
                        </thead>
                        <tbody>
                                <?php
                                        
                                        for($i=0; $i<$lista_datos; $i++){
                                                echo"<tr>";
                                                        echo"<td>";
                                                                echo$lista_datos[0];
                                                        echo"</td>";

                                                        echo"<td>";
                                                                echo$lista_datos[1];
                                                        echo"</td>";
                                                        echo"<td>";
                                                                echo$lista_datos[2];
                                                        echo"</td>";
                                                        echo"<td>";
                                                                echo$lista_datos[3];
                                                        echo"</td>";
                                                        echo"<td>";
                                                                echo$lista_datos[4];
                                                        echo"</td>";
                                                $lista_datos = mysqli_fetch_array($ejecuta_sentencia); 
                                                echo"</tr>"; 
                                        }
                                        
                                ?>
                        </tbody>
                </table>
        </body>
</html>


