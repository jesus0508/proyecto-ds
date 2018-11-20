
    <!--/*Nose si se haria por cada producto aunque seria excesivo*/-->
    <!-- Modal para pedidos nuevos nuevos-->

<form class="modal fade in show" id="producto"  method="POST" action="<?=RUTA_URL?>IngresoController/agregar_producto/<?=$this->datos['mesa']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Producto
                </h4>
            </div>
            <div class="modal-body">
                <label>id</label>
                <input name="id_producto" type="text" id="id_producto" value="<?=$this->datos['producto']->getCodigo(); ?>" class="form-control input-sm" readonly="readonly">
                <label>Nombre:</label>
                <input name="nombre" type="text" id="nomPro" value="<?=$this->datos['producto']->getNombre()  ?>" class="form-control input-sm" readonly="readonly">
                <label>Categoria:</label>
                <input name="categoria" type="text" id="catPro" value="<?=$this->datos['producto']->getCategoria() ?>" class="form-control input-sm" readonly="readonly">
                <label>Precio:</label>
                <input name="precio" type="text" id="prePro" value="<?=$this->datos['producto']->getPrecio() ?>" class="form-control input-sm" readonly="readonly">
                <label>Descripcion:</label>
                <input name="descripcion" type="text" id="desPro" value="<?=$this->datos['producto']->getDescripcion() ?>" class="form-control input-sm" readonly="readonly">
                <label>Cantidad: </label>
                <select name="cantidad" id="cantidad" class="form-control input-sm">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="modal-footer">
                <button id="agregar_producto_pedido" class="btn btn-primary" data-dismiss="modal" id="guardarNuevo">Agregar producto</button>
                <a href="<?=RUTA_URL?>IngresoController/asignar_pedido/<?=$this->datos['mesa']?>" type="button" class="btn btn-danger" data-dismiss="modal" id="guardarNuevo">Cancelar</a>
            </div>
        </div>
    </div>
</form>