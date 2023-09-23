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
echo "Connected successfully, ";
 //recuperar las variables
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $username=$_POST['username'];
 $correo=$_POST['correo'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO datos (id, nombre, apellido, username, correo) VALUES(
            null, 
            '$nombre',
            '$apellido',
            '$username',
            '$correo'
            )";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($conn,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
mysqli_close($conn);
?>

