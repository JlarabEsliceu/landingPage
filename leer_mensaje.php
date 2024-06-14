<?php
include "db.php";
include 'header.php';
?>
<h2>Leer Mensaje</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contactos WHERE id=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $contacto = $result->fetch_assoc();
            ?>
            <div class="informacio">
                <div class="llegir"><strong>ID: </strong><?=$contacto['id']?></div>
                <div class="llegir"><strong>NOMBRE: </strong><?=$contacto['nombre']?></div>
                <div class="llegir"><strong>CORREO: </strong><?=$contacto['correo']?></div>
                <div class="llegir"><strong>TELÉFONO: </strong><?=$contacto['telefono']?></div>
                <div class="llegir"><strong>MENSAJE: </strong><?=$contacto['mensaje'] ?></div>
            </div>
            <?php
        }
        
        $stmt->close();
    }
    
    // Per tancar la connexió amb la base de dades.
    $conn->close();
}
?>
