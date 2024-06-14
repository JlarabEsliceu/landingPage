<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $id=$_GET['id'];
    $sql="DELETE FROM contactos WHERE id=?";
    $stmt = $conn->prepare($sql);
    // Vincular parámetros
    $msg="El mensaje ha sido borrado";
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();

    header("Location: read.php?status=success&msg=" .$msg);
} 