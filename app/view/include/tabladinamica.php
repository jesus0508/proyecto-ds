<div class="row">
	<div class="col-sm-12">
	<h2>Tabla de Pagos Rokys</h2>
		<table id="tabla-productos" class="table table-hover table-condensed table-bordered">
		<!--<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPedido">Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>-->
			<tr>
				<td>Numero</td>
				<td>Codigo</td>
				<td>Producto</td>
				<td>Precio</td>
				<td>Cant</td>
				<!--<td>Editar</td>
				<td>Eliminar</td>-->
			</tr>
			<tbody id="tabla-productos-cuerpo">
					<?php 
					if(isset($this->datos['pedidos'])):
						$i=1;
						foreach ($this->datos['pedidos'] as $producto):
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$producto->getCodigo()."</td>";
							echo "<td>".$producto->getNombre()."</td>";
							echo "<td>".$producto->getPrecio()."</td>";
							echo "<td>".$producto->getCantidad()."</td>";
							echo "</tr>";
						$i++;
						endforeach;
					endif?>
					<!--<td>
						<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion">Editar</button>
					</td>
					<td>
						<button class="btn btn-danger glyphicon glyphicon-remove">  Eliminar</button>
					</td>-->
			</tbody>

		</table>
	</div>
</div>