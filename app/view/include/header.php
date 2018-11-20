<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/grid.css"> 
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/keyboard.css">
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/header2.css">
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/home.css">
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>css/line-awesome-font-awesome.min.css">  
    <link rel="shortcut icon" href="<?=RUTA_URL?>img/favicon.ico">
</head>
<body>
    <header>
        <div class="logo-container">
            <a href="#">
                <img class="logo" src="<?=RUTA_URL?>img/LOGO-ROKYS-2017-01.png" alt="Rokys" height="60">
                <span class="separator"></span>
            </a>
        </div>
        <div class="opciones-container">
            <div class="user-box">
                <figure class="avatar">
                        <img src="<?=RUTA_URL?>img/r2d2.png" alt="UserAvatar" height="40">
                </figure>
                <div class="user-container">
                    <span class="nombre"><?=$this->datos['usuario']->getNombres();?></span>
                    <span class="rol"><?=$this->datos['usuario']->getRol();?></span>
                </div>
            </div>
            <ul class="notificaciones">
                <a href="#">
                    <li class="">
                        <i class="fa fa-bell"></i>
                        <span class="badge"></span>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span class="badge"></span>
                    </li>
                </a>
                <a href="index">
                    <li>
                        <i class="fa fa-power-off"></i>
                        <span class="badge"></span>
                    </li>
                </a>
            </ul>
        </div>
    </header>