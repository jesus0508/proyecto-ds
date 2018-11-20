<?php include "include/header.php";?>
<?php include "include/navbar.php";?>
    <main>
        <div class="breadcrumb">
            <ol>
                <li><a href="#">Lista de Clientes Activos</a></li>
            </ol> 
        </div>
        <div class="clientes-container">
            <form id="buscador" class="container-opciones" method="POST" action="<?=RUTA_URL?>ClientesRokysController/filtrarFetch">
                <label for="cliente" >
                    Ingrese el DNI: <input class="input-normal" name="DNI" type="text"/>
                </label>
                <button class="btn btn-normal"><span>Buscar</span></button>
            </form>
            <div class="tabla-container">
                <table class="tabla-clientes-rockys">
                    <caption>Clientes Rockys</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Tarjeta</th>
                            <th>Estado</th>
                            <th>RFID</th>
                        </tr>
                    </thead>
                    <tbody id='tbody'>
                        <?php   
                            $i=0;
                            foreach($this->datos['lista_clientes'] as $iterador):
                                echo '<tr>';
                                    echo '<td>'.$i++.'</td>';
                                    echo '<td>'.$iterador->getNombres().'</td>';
                                    echo '<td>'.$iterador->getApellidos().'</td>';
                                    echo '<td>'.$iterador->getDni().'</td>';
                                    echo '<td>'.$iterador->getTarjetaRokys()->getCod_tarjeta().'</td>';
                                    echo '<td>'.$iterador->getTarjetaRokys()->getEstado().'</td>';
                                    echo '<td><a href='.RUTA_URL.'ClientesRokysController/asignarTarjeta/'.$iterador->getDni().' class="btn btn-normal"><span>Asignar</span></a></td>';
                                echo '</tr>';
                            endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php include 'include/footer.php'?>
