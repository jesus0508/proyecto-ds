<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bienvenido</title>
	<!--CSS-->
	<link rel="stylesheet" href="<?=RUTA_URL?>lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/css/body.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/css/medio.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/css/top.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/css/pie.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>lib/css/fonts.css">

	<!--JS-->
	<script src="<?=RUTA_URL?>lib/jquery/jquery-3.2.1.min.js"></script><!--Va antes que otro script-->
	<script src="<?=RUTA_URL?>lib/js/guardarProductos.js"></script>
	<script src="<?=RUTA_URL?>lib/bootstrap/js/bootstrap.js"></script>
	<script src="<?=RUTA_URL?>lib/alertifyjs/alertify.js"></script>
</head>
<script language="JavaScript">
	function mueveReloj(){
	   	momentoActual = new Date()
	   	hora = momentoActual.getHours()
	   	minuto = momentoActual.getMinutes()
	   	segundo = momentoActual.getSeconds()

	   	str_segundo = new String (segundo)
	   	if (str_segundo.length == 1)
	      	segundo = "0" + segundo

	   	str_minuto = new String (minuto)
	   	if (str_minuto.length == 1)
	      	minuto = "0" + minuto

	   	str_hora = new String (hora)
	   	if (str_hora.length == 1)
	      	hora = "0" + hora

	   	horaImprimible = hora + " : " + minuto + " : " + segundo

	   	document.form_reloj.reloj.value = horaImprimible

	   	setTimeout("mueveReloj()",1000)
	}
</script>

<!--<body onload="mueveReloj()">-->
<body>
	<!--Comienza cabecera-->
		<header>
			<div class="container">
				<div class="row">
						<div class="foto col-xs-12 col-sm-2 col-md-1 col-lg-1" align="center">
								<img src="<?=RUTA_URL?>lib/img/usuario.png">
						</div>
						<div class="nom_emp col-xs-12 col-sm-1 col-md-1 col-lg-1" align="center" >
							<p><?=$this->datos['usuario']->getNombres();?></p>
						</div>
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

						<div class="mesa col-xs-6 col-sm-1 col-md-1 col-lg-2" align="center">
								<div>
								<label for="mesa">Mesa:</label></div>
								<span><?=$this->datos['mesa'];?></span>
								<div><input class="caja_mesa" type="text" name="mesa"/></div>
						</div>
						<div class="secuencia col-xs-12 col-sm-6 col-md-6 col-lg-6">
						</div>
				</div>
			</div>
		</header>
		<!--Fin de cabeza-->
		<!--Comienza el medio con container-->
		<div class="container-fluid">
			<div class="row"><!--Comienza parte del medio-->
				<div class="col-xs-12 col-sm-6 col-md-6" align="center"> <!--Comienza parte -->
					<div class="container">
						<!--<div id="tabladinamica"></div>-->
						<?php include_once 'include/tabladinamica.php';?>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-4">
								<p>
									<div class="table-responsive">
										<table class="cuentas">
											<thead>
												<th>Cuenta Cliente</th>
												<th>Cantidad</th>
											</thead>
											<tr>
												<td>Sub Total</td>
												<td><?=$this->datos['monto']?></td>
											</tr>
											<tr>
												<td>Descuento</td>
												<td>0.00</td>
											</tr>
											<tr>
												<td>Descuento adm</td>
												<td>0.00</td>
											</tr>
											<tr>
												<td>Total</td>
												<td><?=$this->datos['monto']?></td>
											</tr>
										</table>
									</div>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="col-xs-12">
								<p>
									<table class="info">
										<tr><td>
												<select>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</td>
											<td>
												<select>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</td>
											<td>
												<select>
													<option value="normal">Normal</option>
													<option value="rfid">RFID</option>
												</select>
											</td>
										</tr>
										<tr><td>Seleccionar cantidad</td>
											<td>Visitantes</td>
											<td>Tipo de venta</td>
										</tr>
									</table>
								</p>
							</div>
						</div>
					</div><!--Fin parte izquierda-->
				</div>

				<!--<form id="comidas" class="col-xs-12 col-ms-6 col-md-6" method="POST" action="IngresoController/abrir_modal">--><!--Comienza parte derecha-->
					<div class="col-xs-12 col-ms-6 col-md-6"><!--Comienza parte derecha-->
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_pollo"  onclick="mostrarPollos()">Pollo</p>
								<!-- data-toggle="modal" data-target="#modalPollo"-->
								<a href="<?=RUTA_URL?>IngresoController/ver_detalles/P001" class="btn btn-lg btn-block btn-warning" id="combo_pollo" style="display:none;">Pollo a la brasa</a>
								<a href="<?=RUTA_URL?>IngresoController/ver_detalles/P400" class="btn btn-lg btn-block btn-warning" id="vino_tinto" style="display:none;">Vino Tinto</a>
								<p href="#Vlomo_saltado" class="btn btn-lg btn-block btn-warning" id="lomo_saltado" style="display:none;" data-toggle="modal" data-target="#modalLomoSaltado">Lomo Saltado</p>
								<p href="#Vcerveza_cristal" class="btn btn-lg btn-block btn-warning" id="cerveza_cristal" style="display:none;" data-toggle="modal" data-target="#modalCristal">Cristal</p>
								<p href="#Vensalada_verduras" class="btn btn-lg btn-block btn-warning" id="ensalada_verduras"  style="display:none;" data-toggle="modal" data-target="#modalEnsVerduras">Ensalada de Verduras</p>
								<p href="#Vchancho_palo" class="btn btn-lg btn-block btn-warning" id="chancho_palo" style="display:none;" data-toggle="modal" data-target="#modalChanchoPalo">Chancho al palo</p>
								<p href="#Voferta_1" class="btn btn-lg btn-block btn-warning" id="oferta_1"  style="display:none;" data-toggle="modal" data-target="#modalOferta_1">Oferta 1</p>
								<p href="#vbar_1" class="btn btn-lg btn-block btn-warning" id="bar_1"  style="display:none;" data-toggle="modal" data-target="#modalBar_1">Bar 1</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="seis_broaster" style="display:none;" data-toggle="modal" data-target="#modalBroaster_6">6 Broaster</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_1" style="display:none;" data-toggle="modal" data-target="#modalDesayuno1">Desayuno 1</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_3" style="display:none;" data-toggle="modal" data-target="#modalInkacola_3">Inkacola 3 litros</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sangria_1" style="display:none;" data-toggle="modal" data-target="#modalSangria_1">1 litro de sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="te" style="display:none;" data-toggle="modal" data-target="#modalTe">Te</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="parillada_1" style="display:none;" data-toggle="modal" data-target="#modalParrillada_1">Parilladas 1</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_vino" onclick="mostrarVinos()">Vino</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_entero" style="display:none;" data-toggle="modal" data-target="#modal1_2Pollo">1/2 Pollo a la brasa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="vino_blanco" style="display:none;" data-toggle="modal" data-target="#modalVino_blanco">Vino Blanco</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="arroz_con_pollo" style="display:none;" data-toggle="modal" data-target="#modalArroz_Pollo">Arroz con Pollo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cerveza_pilsen" style="display:none;" data-toggle="modal" data-target="#modalPilsen">Pilsen</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="ensalada_italiana"  style="display:none;" data-toggle="modal" data-target="#modalEnsItaliana">Ensalada Italiana</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="asado_de_chancho" style="display:none;" data-toggle="modal" data-target="#modalAsado_Chancho">Asado de Chancho</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="oferta_2"  style="display:none;" data-toggle="modal" data-target="#modalOferta_2">Oferta 2</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="bar_2"  style="display:none;" data-toggle="modal" data-target="#modalBar_2">Bar 2</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="seis_nuggets" style="display:none;" data-toggle="modal" data-target="#modalNuggets_6">6 Nuggets</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_2" style="display:none;" data-toggle="modal" data-target="#modalDesayuno_2">Desayuno 2</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_3" style="display:none;" data-toggle="modal" data-target="#modalCoca_3">CocaCola 3 litros</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sangria_2" style="display:none;" data-toggle="modal" data-target="#modalSangria_2">2 litros de sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="manzanilla" style="display:none;" data-toggle="modal" data-target="#modalManzanilla">Manzanilla</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="parillada_2" style="display:none;" data-toggle="modal" data-target="#modalParrillada_2">Parilladas 2</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row"><p>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_menus" onclick="mostrarMenus()">Menus</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="combo_1_2" style="display:none;" data-toggle="modal" data-target="#modal1_4Pollo">1/4 Pollo a la brasa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="vino_rose" style="display:none;" data-toggle="modal" data-target="#modalVino_rose">Vino Rose</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="tallarines_rojos" style="display:none;" data-toggle="modal" data-target="#modaltallarines_rojos">Tallarines Rojos</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cerveza_cusquena" style="display:none;" data-toggle="modal" data-target="#modalcusqueña">Cusqueña</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="ensalada_de_mango"  style="display:none;" data-toggle="modal" data-target="#modalensalada_mango">Ensalada de Mango</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pescado_frito" style="display:none;" data-toggle="modal" data-target="#modalpescado_frito">Pescado Frito</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="oferta_3"  style="display:none;" data-toggle="modal" data-target="#modaloferta_3">Oferta 3</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="bar_3"  style="display:none;" data-toggle="modal" data-target="#modalbar_3">Bar 3</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="doce_broaster" style="display:none;" data-toggle="modal" data-target="#modal12_broaster">12 Broasters</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_3" style="display:none;" data-toggle="modal" data-target="#modalDesayuno_3">Desayuno 3</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sprite_3" style="display:none;" data-toggle="modal" data-target="#modalSprite_3">Sprite 3 litros</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sangria_3" style="display:none;" data-toggle="modal" data-target="#modalSangria_3">3 litros de sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="anis" style="display:none;" data-toggle="modal" data-target="#modalAnis">Anis</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="parillada_3" style="display:none;" data-toggle="modal" data-target="#modalParrillada_3">Parilladas 3</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_cerveza" onclick="mostrarCerveza()">Cerveza</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_1_2" style="display:none;" data-toggle="modal" data-target="#modal1_4PolloPobre"> 1/4 Pollo a lo pobre</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pisco_puro" style="display:none;" data-toggle="modal" data-target="#modalPisco_puro">Pisco Puro</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="arroz_chaufa" style="display:none;" data-toggle="modal" data-target="#modalArroz_chaufa">Arroz Chaufa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cerveza_corona" style="display:none;" data-toggle="modal" data-target="#modalCorona">Corona</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="ensalada_de_aguacate"  style="display:none;" data-toggle="modal" data-target="#modalEnsalada_aguacate">Ensalada de Aguacate</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cordero_frito" style="display:none;" data-toggle="modal" data-target="#modalCordero_frito">Cordero Frito</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="oferta_4"  style="display:none;" data-toggle="modal" data-target="#modalOferta_4">Oferta 4</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="doce_nuggets" style="display:none;" data-toggle="modal" data-target="#modalNuggets_12">12 Nuggets</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_4" style="display:none;" data-toggle="modal" data-target="#modalDesayuno_4">Desayuno 4</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_2" style="display:none;" data-toggle="modal" data-target="#modalInkacola_2">Inkacola 2 litros</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_ensa" onclick="mostrarEnsa()">Ensaladas y otros acompa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_1_4" style="display:none;" data-toggle="modal" data-target="#modal1_4PolloAlmuerzo"> 1/4 Pollo almuerzo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pisco_acholado" style="display:none;" data-toggle="modal" data-target="#modalPisco_achola">Pisco Acholado</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="artesanal_candelaria" style="display:none;" data-toggle="modal" data-target="#modalArtesanal_candelaria">Artesanal Candelaria</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="valde_broaster" style="display:none;" data-toggle="modal" data-target="#modalValde_broaster">Valde de broaster</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_5" style="display:none;" data-toggle="modal" data-target="#modalDesayuno_5">Desayuno 5</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_2" style="display:none;" data-toggle="modal" data-target="#modalCocacola_2">CocaCola 2 litros</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_otros" onclick="mostrarCarne()">Otras carnes</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pisco_mosto_verde" style="display:none;" data-toggle="modal" data-target="#modalMosto_verde">Pisco Mosto Verde</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="beer_gold" style="display:none;" data-toggle="modal" data-target="#modalHarboe_beer">Harboe Beer Gold</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sprite_2" style="display:none;" data-toggle="modal" data-target="#modalSprite_2">Sprite 2 litros</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_ofer" onclick="mostrarOfer()">Ofertas y Promociones</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="champagne" style="display:none;" data-toggle="modal" data-target="#modalChampagne">Champagne</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="artesanal_maddok" style="display:none;" data-toggle="modal" data-target="#modalArtesanal_maddok">Artesanal Maddok</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_1" style="display:none;" data-toggle="modal" data-target="#modalInkacola_1">InkaCola 1 litro</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_bar" onclick="mostrarBar()">Carta Bar Variado</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_1" style="display:none;" data-toggle="modal" data-target="#modalCocacola_1">CocaCola 1 litro</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_broaster" onclick="mostrarBroaster()">Broaster y Nuggets</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sprite_1" style="display:none;" data-toggle="modal" data-target="#modalSprite_1">Sprite 1 litro</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_desayuno" onclick="mostrarDesayuno()">Desayuno</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="gordita" style="display:none;" data-toggle="modal" data-target="#modalGordita">Gordita</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_gaseosa" onclick="mostrarGaseosa()">Gaseosa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_personal" style="display:none;" data-toggle="modal" data-target="#modalInkacola_personal">InkaCola Personal</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_sangrias" value="Sangrias" href="" onclick="mostrarSangria()">Sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_personal" style="display:none;" data-toggle="modal" data-target="#modalCocacola_personal">CocaCola Personal</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_becal" onclick="mostrarbeCal()">Bebidas Calientes</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_parrilladas" onclick="mostrarParrilla()">Parilladas</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_cajita" data-toggle="modal" data-target="#modalCajita_magica">Cajita Magica</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_peñas" data-toggle="modal" data-target="#modalPeñas">Peñas</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_criollo" data-toggle="modal" data-target="#modalCriollos">Criollos</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="atras" href="#" style="display:none;">Atras</p>
							</div>
						</div>
					</div>
				</div><!--Fin parte derecha-->
			</div><!--Fin medio-->
		</div><!--Fin container-->
		<!--Fin de parte media, empieza botones-->
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="caja" href="">
						<span class="icon-shop"></span>Enviar Caja</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="vales" href="<?=RUTA_URL?>ClientesRokysController">
						<span class="icon-ticket"></span>Asignar RFID</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="kits" href="">
						<span class="icon-suitcase"></span>Agregar kits</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="terminar" href="<?=RUTA_URL?>HomeController">
						<span class="icon-check"></span>Terminar</a>
					</div>
				</div>
				<br>
			</div>
		</footer>
		<!--Fin de botones-->
		<!--Comienza los menus desplegables-->
		<?php if(isset($this->datos['producto'])):?>
			<div id="menusdesplegables">
					<?php include "include/menusdesplegables.php";?>
			</div>
		<?php endif?>
	<script src="<?=RUTA_URL?>lib/js/jquery.js"></script>
	<script src="<?=RUTA_URL?>lib/js/ingreso.js"></script>
	<script src="<?=RUTA_URL?>lib/js/apertura_menu.js"></script>
	<script src="<?=RUTA_URL?>lib/js/bootstrap.min.js"></script>



</body>
</html>



