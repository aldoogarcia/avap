<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','formulario');

$link = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR EN LA CONEXION" . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$interesado = $_POST['interesado'];
$comentario = $_POST['coment'];

$sql = "INSERT INTO datos(nombre, apellidos, email, telefono, interesado, coment) VALUES ('$nombre', '$apellidos', '$email', '$interesado', '$comentario')";

$ejecutar = mysqli_query($link, $sql);

if (!$ejecutar) {
    echo " ay un error";
}else{
    echo "datos almacenados correctamente";
}
?>