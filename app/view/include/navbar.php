<nav>
    <ul class="menu">            
        <li><a href="<?=RUTA_URL?>HomeController" class="opcion">
            <i class="fa fa-home"></i>
            <span>Principal</span>
            </a>
        </li>
        <li><a href="<?=RUTA_URL?>ClientesRokysController" class="opcion">
            <i class="fa fa-users"></i>
            <span>Clientes Rokys</span>
            </a>
        </li>
        <li><a href="<?=RUTA_URL?>VerMesasController" class="opcion">
            <i class="fa fa-eye"></i>
            <span>Ver Mesas</span>
            </a>
        </li>
        <?php if($this->datos['usuario']->getRol()=="Administrador"):?>
        <li><a href="<?=RUTA_URL?>RegistrarController" class="opcion">
            <i class="fa fa-user-plus"></i>
            <span>Registrar Cliente</span>
            </a>
        </li>
        <?php endif;?>
        <li><a href="<?=RUTA_URL?>LoginController" class="opcion">
            <i class="fa fa-sign-out"></i>
            <span>Salir</span>
            </a>
        </li>
    </ul>
</nav>