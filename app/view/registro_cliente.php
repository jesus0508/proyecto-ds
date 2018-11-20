<?php include 'include/header.php';?>
<?php include 'include/navbar.php';?>

<main>
    <div class="breadcrumb">
                <ol>
                    <li><a href="#">Registro de Nuevos Clientes</a></li>
                </ol> 
    </div>
    <div class="registro-container">
        <form class="cliente-form" method="POST" action="<?=RUTA_URL?>RegistrarController/enviar_registro">
            <div class="datos">
                <label for="Nombre">Nombre</label>
                <input class="input-normal" name="Nombre" type="text">
            </div>

            <div class="datos">
                <label for="Apellidos">Apellidos</label>
                <input class="input-normal" name="Apellidos" type="text">
            </div>

            <div class="datos">
                <label for="DNI">DNI</label>
                <input class="input-normal" name="DNI" type="number">
            </div>                
            
            <div class="datos">
                <label for="Numero Telefonico">Numero Telefonico</label>
                <input class="input-normal" name="Numero_Telefonico" type="number"> 
            </div>

            <div class="datos">
                <label for="Direccion">Direccion</label>
                <input class="input-normal" name="Direccion" type="text"> 
            </div>
            
            <div class="datos">
                <label for="Correo">Correo</label>
                <input class="input-normal" name="Correo" type="email"> 
            </div>

            <div class="datos">
                <label for="Codigo de Tarjeta">Codigo de Tarjeta</label>
                <input class="input-normal" name="Codigo_de_Tarjeta" type="text" value="<?= $this->datos['codigo_tarjeta']->getCod_tarjeta();?>" disabled> 
            </div>

            <div class="botonera">
                <button class="btn-submit">
                    <i class="fa fa-save"></i>
                    <span>Listo</span>
                </button>
                <button class="btn-refresh" type="button">
                    <i class="fa fa-refresh"></i>
                    <span>Cancelar</span>
                </button>
            </div>
                       
        </form>
    </div>

</main>

<?php include "include/footer.php";?>