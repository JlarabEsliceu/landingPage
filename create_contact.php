<?php

echo "METHOD ".$SERVER['REQUEST_METHOD']."<BR>";
echo "CREANDO CONTACTO NUEVO <BR>";

if($SERVER['REQUEST_METHOD'] == "POST"){
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    
    echo "NOMBRE: " .$nombre. "<br>";
    echo "TELEFONO: " .$telefono. "<br>";
    echo "CORREO: " .$correo. "<br>";
    echo "mensaje: " .$mensaje. "<br>";

}else{
    echo "ERROR EN METODO POST";
}