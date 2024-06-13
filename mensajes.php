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
        <div class="campoCabecera">
            ACCIÓN
        </div>
    </div>
    
    <?php 
        $num=0;
        while($row = $result->fetch_assoc()){
        $num++;    
        $paridad="impar";
        if($num%2==0){
            $paridad="par";
        }
        //PARIDAD ME INDICA SI LA FILA ES PAR O IMPAR
        ?>
        <div class="fila <?=$paridad?>">    
                <div class="campo"><?=$row['id']?></div>
                <div class="campo"><?=$row['nombre']?></div>
                <div class="campo"><?=$row['telefono']?></div>
                <div class="campo"><?=$row['correo']?></div>
                <div class="campo">
                    <?=$row['mensaje']?>
                    <?=substr(0, 51)?>...
                </div>
                <div class="btn-borrar">
                    <a href="borrar.php?id=<?=$row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M4 7l16 0" />
  <path d="M10 11l0 6" />
  <path d="M14 11l0 6" />
  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
</svg></a>
                </div>
                
        </div>
        <?php       
        }    
        if($num==0){
            echo "<p>No hay mensajes</p>";
        }
    ?>
</div>
<?php
    include 'footer.php';
?>

