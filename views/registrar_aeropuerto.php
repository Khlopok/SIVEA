<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Aeropuertos</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-aeropuerto">
            <form controller="Aeropuerto" update="<?php echo $update?>">
                <h1 class="base-title">Registrar Aeropuerto</h1>
                <label class="base-label">
                    Ubicación
                    <input type="text" name="ubicacion" class="base-input" placeholder="Ubicación">
                </label>
                <label class="base-label">
                    Código OACI
                    <input type="text" name="codigo" class="base-input" placeholder="SVXZ">
                </label>
                <div>
                    <a href="<?php base_url() ?>/aeropuerto">
                        <button type="button" title="Regresar" class="base-button-danger">Regresar</button>
                    </a>
                    <input type="submit" class="base-button" value="Registrar">
                </div>
            </form>
            <?php require_once './views/includes/alert.php'?>
            <!-- JS -->
            <script src="<?php base_url() ?>/views/assets/js/validations.js"></script>
            <script src="<?php base_url() ?>/views/assets/js/register.js"></script>
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
        </main>
<?php require_once './views/includes/footer.php' ?>