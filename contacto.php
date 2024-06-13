<?php 
    include 'header.php';
    if(isset($_GET['status'])){
        $status=$_GET['status'];
        $msg=$_GET['msg'];
        ?>
    
    <div class="mensaje contenedor <?php echo $status; ?>">
        <p><?php echo $msg ?></p>
    </div>

    <?php
    }
?>
<h1>Contacto</h1>
<main>
<section>
     <form class="formulario" action ="create_contact.php" method="POST">
            <fieldset>
               <legend>Contactame enviando tus datos</legend>
                <div class="contenedor-camos">
                        <div class="campo"> 
                            <div>
                                <label for="">Nombre:</label>
                                <input class="input-text" type="text" name="nombre" placeholder="Tu Nombre">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Teléfono</label>
                                <input class="input-text" type="tel" name="telefono" id="" placeholder="Tu teléfono">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Correo</label>
                                <input class="input-text" type="email" name="correo" id="" placeholder="Tu correo">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Mensaje</label>
                                <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    <div>
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                    </div><!--contenedor-campos-->
                    
                </fieldset>
            </form>
            
        </section>
</main>
<?php
    include 'footer.php';
?>