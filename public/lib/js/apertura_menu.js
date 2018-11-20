var btn_atras = document.getElementById('atras');

function borrarMenuPrincipal() {
    document.getElementById('menu_pollo').style.display = "none";
    document.getElementById('menu_vino').style.display = "none";
    document.getElementById('menu_menus').style.display = "none";
    document.getElementById('menu_cerveza').style.display = "none";
    document.getElementById('menu_ensa').style.display = "none";
    document.getElementById('menu_otros').style.display = "none";
    document.getElementById('menu_ofer').style.display = "none";
    document.getElementById('menu_bar').style.display = "none";
    document.getElementById('menu_broaster').style.display = "none";
    document.getElementById('menu_desayuno').style.display = "none";
    document.getElementById('menu_gaseosa').style.display = "none";
    document.getElementById('menu_sangrias').style.display = "none";
    document.getElementById('menu_becal').style.display = "none";
    document.getElementById('menu_parrilladas').style.display = "none";
    document.getElementById('menu_cajita').style.display = "none";
    document.getElementById('menu_peñas').style.display = "none";
    document.getElementById('menu_criollo').style.display = "none";
}

function mostrarPollos() {
    borrarMenuPrincipal();
    document.getElementById('combo_pollo').style.display = "block";
    document.getElementById('pollo_entero').style.display = "block";
    document.getElementById('combo_1_2').style.display = "block";
    document.getElementById('pollo_1_2').style.display = "block";
    document.getElementById('pollo_1_4').style.display = "block";
    //document.getElementById('pollo_1_8').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarVinos() {
    borrarMenuPrincipal();
    document.getElementById('vino_tinto').style.display = "block";
    document.getElementById('vino_blanco').style.display = "block";
    document.getElementById('vino_rose').style.display = "block";
    document.getElementById('pisco_puro').style.display = "block";
    document.getElementById('pisco_acholado').style.display = "block";
    document.getElementById('pisco_mosto_verde').style.display = "block";
    document.getElementById('champagne').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarMenus() {
    borrarMenuPrincipal();
    document.getElementById('lomo_saltado').style.display = "block";
    document.getElementById('arroz_con_pollo').style.display = "block";
    document.getElementById('tallarines_rojos').style.display = "block";
    document.getElementById('arroz_chaufa').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarCerveza() {
    borrarMenuPrincipal();
    document.getElementById('cerveza_cristal').style.display = "block";
    document.getElementById('cerveza_pilsen').style.display = "block";
    document.getElementById('cerveza_cusquena').style.display = "block";
    document.getElementById('cerveza_corona').style.display = "block";
    document.getElementById('artesanal_candelaria').style.display = "block";
    document.getElementById('beer_gold').style.display = "block";
    document.getElementById('artesanal_maddok').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarEnsa() {
    borrarMenuPrincipal();
    document.getElementById('ensalada_verduras').style.display = "block";
    document.getElementById('ensalada_italiana').style.display = "block";
    document.getElementById('ensalada_de_mango').style.display = "block";
    document.getElementById('ensalada_de_aguacate').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarCarne() {
    borrarMenuPrincipal();
    document.getElementById('chancho_palo').style.display = "block";
    document.getElementById('asado_de_chancho').style.display = "block";
    document.getElementById('pescado_frito').style.display = "block";
    document.getElementById('cordero_frito').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarOfer() {
    borrarMenuPrincipal();
    document.getElementById('oferta_1').style.display = "block";
    document.getElementById('oferta_2').style.display = "block";
    document.getElementById('oferta_3').style.display = "block";
    document.getElementById('oferta_4').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarBar() {
    borrarMenuPrincipal();
    document.getElementById('bar_1').style.display = "block";
    document.getElementById('bar_2').style.display = "block";
    document.getElementById('bar_3').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarBroaster() {
    borrarMenuPrincipal();
    document.getElementById('seis_broaster').style.display = "block";
    document.getElementById('seis_nuggets').style.display = "block";
    document.getElementById('doce_broaster').style.display = "block";
    document.getElementById('doce_nuggets').style.display = "block";
    document.getElementById('valde_broaster').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarDesayuno() {
    borrarMenuPrincipal();
    document.getElementById('desayuno_1').style.display = "block";
    document.getElementById('desayuno_2').style.display = "block";
    document.getElementById('desayuno_3').style.display = "block";
    document.getElementById('desayuno_4').style.display = "block";
    document.getElementById('desayuno_5').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarGaseosa() {
    borrarMenuPrincipal();
    document.getElementById('inkacola_3').style.display = "block";
    document.getElementById('cocacola_3').style.display = "block";
    document.getElementById('sprite_3').style.display = "block";
    document.getElementById('inkacola_2').style.display = "block";
    document.getElementById('cocacola_2').style.display = "block";
    document.getElementById('sprite_2').style.display = "block";
    document.getElementById('inkacola_1').style.display = "block";
    document.getElementById('cocacola_1').style.display = "block";
    document.getElementById('sprite_1').style.display = "block";
    document.getElementById('gordita').style.display = "block";
    document.getElementById('inkacola_personal').style.display = "block";
    document.getElementById('cocacola_personal').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarSangria() {
    borrarMenuPrincipal();
    document.getElementById('sangria_1').style.display = "block";
    document.getElementById('sangria_2').style.display = "block";
    document.getElementById('sangria_3').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarbeCal() {
    borrarMenuPrincipal();
    document.getElementById('te').style.display = "block";
    document.getElementById('manzanilla').style.display = "block";
    document.getElementById('anis').style.display = "block";
    btn_atras.style.display = "block";
}

function mostrarParrilla() {
    borrarMenuPrincipal();
    document.getElementById('parillada_1').style.display = "block";
    document.getElementById('parillada_2').style.display = "block";
    document.getElementById('parillada_3').style.display = "block";
    btn_atras.style.display = "block";
}