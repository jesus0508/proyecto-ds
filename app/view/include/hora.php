<div class="fecha_hora col-xs-6 col-sm-2 col-md-2 col-lg-2" >
							<div id=fecha align="center">
							<script>
								var f=new Date();
								var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
								document.write('<div class="mifecha">');
								document.write('<div class="ano">' + f.getFullYear()+'      '+ f.getDate() + '     ' +meses[f.getMonth()] +'</div>');
								document.write('</div>');
							</script>
							</div>
							<div id=hora align="center">
								<form name="form_reloj">
									<input type="text" name="reloj" size="10" style=" font-family : Verdana, Arial, Helvetica; border:0px;font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
		</form>
	</div>
</div>