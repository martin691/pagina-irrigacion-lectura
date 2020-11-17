<?php
$servername = "172.25.12.119";
$database = "registro";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
} 
echo "Coneccion Correcta";
$telefono= $_POST["telefono"];

$sql = "INSERT INTO `registro` (`id`, `telefono`) VALUES (NULL, '$telefono')";

if (mysqli_query($conn, $sql)) {
      echo "Nuevo Dato Cargado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>