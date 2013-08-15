<!DOCTYPE html>
<html lang="es-CO">
    <head>
        <meta charset="utf-8">
        <title><?php echo $titulo; ?></title>
        <link href="<?php echo base_url(); ?>css/normalize.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/vendor/prefixfree.js"></script>
        <script src="<?php echo base_url(); ?>js/vendor/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/main.js"></script>
    </head>
    <body>
        <header>
            <h1>MAMI | Mamás más involucradas</h1>
            <figure>
                <img alt="Logo MAMI" src="<?php echo base_url(); ?>img/logo_mami.png">
            </figure>
            <nav>
                <ul>
                    <li><?php echo anchor('/', 'Home', ''); ?></li>
                    <li><?php echo anchor('/', 'Como lo hacemos', ''); ?></li>
                    <li><?php echo anchor('/', 'Nuestro equipo', ''); ?></li>
                    <li><?php echo anchor('/', 'Haz parte', ''); ?></li>
                    <li><?php echo anchor('/', 'Iniciar sesión', ''); ?></li>
                </ul>
            </nav>
            <!--    #fbbb37 amarillo
                    #f84f6c rojo
                    #797979 gris
                    #00adbd azul-->
        </header>