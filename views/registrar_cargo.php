<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Cargos</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-aerolinea">
            <form controller="Cargo" update="<?php echo $update?>">
                <h1 class="base-title">Registrar Cargo</h1>
                <label class="base-label">
                    Nombre Cargo
                    <input type="text" placeholder="Gerente" name="nombre" class="base-input"> 
                </label>
                <div>
                    <a href="<?php base_url() ?>/cargo">
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

