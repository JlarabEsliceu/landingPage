<?php 
    include 'header.php';
    include 'db.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);

?>

<h1>Mensajes</h1>
<div class="contenedor listado">
    <div class="fila cabecera">
        <div class="campoCabecera">
            id
        </div>
        <div class="campoCabecera">
            Nombre
        </div>
        <div class="campoCabecera">
            Telefono
        </div>
        <div class="campoCabecera">
            Correo
        </div>
        <div class="campoCabecera">
            Mensaje
        </div>
    </div>
    <?php 
        while($row = $result->fetch_assoc()){
        ?>
        <div class="fila">    
                <div class="campo"><?=$row['id']?></div>
                <div class="campo"><?=$row['nombre']?></div>
                <div class="campo"><?=$row['telefono']?></div>
                <div class="campo"><?=$row['correo']?></div>
                <div class="campo"><?=$row['mensaje']?></div>
        </div>
        <?php       
        }    
    ?>
</div>
<?php
    include 'footer.php';
?>