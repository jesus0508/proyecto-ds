var btn_pollo=document.getElementById('menu_pollo');
var btn_vinos=document.getElementById('menu_vino');
var btn_menus=document.getElementById('menu_menus');
var btn_cerveza=document.getElementById('menu_cerveza');
var btn_ensa=document.getElementById('menu_ensa');
var btn_otros=document.getElementById('menu_otros');
var btn_ofer=document.getElementById('menu_ofer');
var btn_bar=document.getElementById('menu_bar');
var btn_broaster=document.getElementById('menu_broaster');
var btn_desayuno=document.getElementById('menu_desayuno');
var btn_gaseosa=document.getElementById('menu_gaseosa');
var btn_sangrias=document.getElementById('menu_sangrias');
var btn_becal=document.getElementById('menu_becal');
var btn_parrilladas=document.getElementById('menu_parrilladas');
var btn_cajita=document.getElementById('menu_cajita');
var btn_peñas=document.getElementById('menu_peñas');
var btn_criollo=document.getElementById('menu_criollo');
var btn_cantidad=document.getElementById('cantidad');

function mostrarPollos(){
	if($(btn_pollo).html()=="Pollo"){
		$(btn_pollo).html("Combo Pollo Entero");
		$(btn_vinos).html("1 Pollo solo");
		$(btn_menus).html("Combo 1/2 Pollo");
		$(btn_cerveza).html("1/2 Pollo solo");
		$(btn_ensa).html("1/4 Pollo a la brasa");
		$(btn_otros).html("Combo 1/8 Pollo");
		$(btn_criollo).html("Atras");
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarVinos(){
	if($(btn_vinos).html()=="Vino"){
		$(btn_pollo).html("Vino tinto");
		$(btn_vinos).html("Vino blanco");
		$(btn_menus).html("Vino Rose");
		$(btn_cerveza).html("Pisco Puro");
		$(btn_ensa).html("Pisco Acholado");
		$(btn_otros).html("Pisco Mosto Verde");
		$(btn_ofer).html("Champagne");
		$(btn_criollo).html("Atras");
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarMenus(){
	if($(btn_menus).html()=="Menus"){
		$(btn_pollo).html("Lomo saltado");
		$(btn_vinos).html("Arroz con Pollo");
		$(btn_menus).html("Tallarines rojos");
		$(btn_cerveza).html("Arroz Chaufa");
		btn_ensa.style.display='none';
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		$(btn_criollo).html("Atras");
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarCerveza(){
	if($(btn_cerveza).html()=="Cerveza"){
		$(btn_pollo).html("Cristal");
		$(btn_vinos).html("Pilsen");
		$(btn_menus).html("Cusqueña");
		$(btn_cerveza).html("Corona");
		$(btn_ensa).html("Artesanal Candelaria");
		$(btn_otros).html("Harboe Beer Gold");
		$(btn_ofer).html("Artesanal Maddok");
		$(btn_criollo).html("Atras");
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarEnsa(){
	if($(btn_ensa).html()=="Ensaladas y otros acompa"){
		$(btn_pollo).html("Ensalada de verduras");
		$(btn_vinos).html("Ensalada Italiana");
		$(btn_menus).html("Ensalada de Mango");
		$(btn_cerveza).html("Ensalada de Aguacate");
		$(btn_ensa).html("Artesanal Candelaria");
		$(btn_otros).html("Harboe Beer Gold");
		$(btn_ofer).html("Artesanal Maddok");
		$(btn_criollo).html("Atras");
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarCarne(){
	if($(btn_otros).html()=="Otras carnes"){
		$(btn_pollo).html("Chancho al palo");
		$(btn_vinos).html("Parrilladas");
		$(btn_menus).html("Asado de chancho");
		$(btn_cerveza).html("Pescado frito");
		$(btn_ensa).html("Cordero frito");
		$(btn_criollo).html("Atras");
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarOfer(){
	if($(btn_ofer).html()=="Ofertas y Promociones"){
		$(btn_pollo).html("Oferta 1");
		$(btn_vinos).html("Oferta 2");
		$(btn_menus).html("Oferta 3");
		$(btn_cerveza).html("Oferta 4");
		$(btn_criollo).html("Atras");
		btn_ensa.style.display='none';
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarBar(){
	if($(btn_bar).html()=="Carta Bar Variado"){
		$(btn_pollo).html("Bar 1");
		$(btn_vinos).html("Bar 2");
		$(btn_menus).html("Bar 3");
		$(btn_cerveza).html("Pescado frito");
		$(btn_ensa).html("Cordero frito");
		$(btn_criollo).html("Atras");
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarBroaster(){
	if($(btn_broaster).html()=="Broaster y Nuggets"){
		$(btn_pollo).html("6 Broaster");
		$(btn_vinos).html("6 Nuggets");
		$(btn_menus).html("12 Broaster");
		$(btn_cerveza).html("12 Nuggets");
		$(btn_ensa).html("Valde de broaster");
		$(btn_criollo).html("Atras");
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarDesayuno(){
	if($(btn_desayuno).html()=="Desayuno"){
		$(btn_pollo).html("Desayuno 1");
		$(btn_vinos).html("Desayuno 2");
		$(btn_menus).html("Desayuno 3");
		$(btn_cerveza).html("Desayuno 4");
		$(btn_ensa).html("Desayuno 5");
		$(btn_criollo).html("Atras");
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarGaseosa(){
	if($(btn_gaseosa).html()=="Gaseosa"){
		$(btn_pollo).html("3 litros Inka Cola");
		$(btn_vinos).html("3 litros Coca Cola");
		$(btn_menus).html("3 litros Sprite");
		$(btn_cerveza).html("2 litros Inka Cola");
		$(btn_ensa).html("2 litros Coca Cola");
		$(btn_otros).html("2 litros Sprite");
		$(btn_ofer).html("1 litro Inka Cola");
		$(btn_bar).html("1 litro Coca Cola");
		$(btn_broaster).html("1 litro Sprite");
		$(btn_desayuno).html("Gordita");
		$(btn_gaseosa).html("Inka Cola personal");
		$(btn_sangrias).html("Coca Cola personal");
		$(btn_criollo).html("Atras");
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarSangria(){
	if($(btn_sangrias).html()=="Sangrias"){
		$(btn_pollo).html("1 litro de Sangrias");
		$(btn_vinos).html("2 litros de Sangrias");
		$(btn_menus).html("3 litros de Sangria");
		$(btn_criollo).html("Atras");
		btn_cerveza.style.display='none';
		btn_ensa.style.display='none';
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarbeCal(){
	if($(btn_becal).html()=="Bebidas Calientes"){
		$(btn_pollo).html("Te");
		$(btn_vinos).html("Manzanilla");
		$(btn_menus).html("Anis");
		$(btn_criollo).html("Atras");
		btn_cerveza.style.display='none';
		btn_ensa.style.display='none';
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}

function mostrarParrilla(){
	if($(btn_parrilladas).html()=="Parilladas"){
		$(btn_pollo).html("Parrilladas 1");
		$(btn_vinos).html("Parrilladas 2");
		$(btn_menus).html("Parrilladas 3");
		$(btn_criollo).html("Atras");
		btn_cerveza.style.display='none';
		btn_ensa.style.display='none';
		btn_otros.style.display='none';
		btn_ofer.style.display='none';
		btn_bar.style.display='none';
		btn_broaster.style.display='none';
		btn_desayuno.style.display='none';
		btn_gaseosa.style.display='none';
		btn_sangrias.style.display='none';
		btn_becal.style.display='none';
		btn_parrilladas.style.display='none';
		btn_cajita.style.display='none';
		btn_peñas.style.display='none';
		btn_sangrias.style.display='none';
		btn_cantidad.style.display="inline";
	}
}
