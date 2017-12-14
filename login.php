<?php
 
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "test";
 
$con = mysqli_connect($server, $username, $password, $database) or die ("No se conecto: " . mysql_error());
 
$usu = mysqli_real_escape_string($con, $_POST["usu"]);
$pass = mysqli_real_escape_string($con, $_POST["pass"]);
 
$sql = "SELECT nombre FROM usuarios WHERE nombre='$usu' AND password='$pass'";
 
if ($resultado = mysqli_query($con,$sql)){
    if (mysqli_num_rows($resultado) > 0){
        echo true;
    }
}
else{
    echo false;
}
//mysql_close($con);
 
?>