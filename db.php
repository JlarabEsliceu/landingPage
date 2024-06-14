<?php
//parametres de connexió
$servername="localhost";
$username="jesus";
$password="12344";
$dbname="gimnasio";

//crear connexió
$conn=new mysqli($servername,$username,$password,$dbname);

//comprovar connexió
if($conn->connect_error){
    //la conexion ha sido mala
    die("Connection failed: ". $conn->connect_error);
}

//echo "LA CONEXION HA SIDO UN EXITO";