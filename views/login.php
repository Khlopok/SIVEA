<!DOCTYPE html>
<html lang="es">
<head>
    <!-- TITULO -->
    <title>SIVEA</title>
    <!-- METADATOS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKS -->
    <link rel="stylesheet" href="<?php base_url() ?>/views/assets/css/vars.css">
    <link rel="stylesheet" href="<?php base_url() ?>/views/assets/css/config.css">
    <link rel="stylesheet" href="<?php base_url() ?>/views/assets/css/login.css">
</head>
<body>
    <main>
        <img src="<?php base_url() ?>/views/assets/img/aeropuerto.jpg" alt="Portada" title="Aeropuerto Stt.Nestor Arias">
        <form action="<?php base_url() ?>/panel">
            <h1>¡Bienvenido a S.I.V.E.A!</h1>
            <div class="input-container">
                <label>
                    Usuario
                    <input type="text" placeholder="Nombre">
                </label>
                <label>
                    Contraseña
                    <input type="password" placeholder="Contraseña" id="pass">
                    <img src="<?php base_url() ?>/views/assets/img/ojito.svg" class="ojito ojito-remove">
                </label>
                <input type="submit" value="Entrar">
            </div>
        </form>
        <!-- JS -->
        <script src="<?php base_url() ?>/views/assets/js/validations.js"></script> 
        <script src="<?php base_url() ?>/views/assets/js/login.js"></script>
    </main>
</body>
</html>