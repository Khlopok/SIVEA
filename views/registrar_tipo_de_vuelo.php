<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Tipos de vuelo</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-tipo-vuelo">
            <form controller="Tipovuelo" update="<?php echo $update?>">
                <h1 class="base-title">Registrar Tipo de Vuelo</h1>
                <label class="base-label">
                    Nombre
                    <input type="text" class="base-input" placeholder="Nombre" name="nombre">
                </label>
                <label class="base-label">
                    Tipo
                    <select class="base-input" name="tipo">
                        <option value="Regular">Regular</option>
                        <option value="No Regular">No Regular</option>
                    </select>
                </label>
                <label class="base-label">
                    Descripción (opcional)
                    <textarea cols="30" rows="10" class="base-textarea" placeholder="Descripción" name="descripcion"></textarea>
                </label>
                <div>
                    <a href="<?php base_url() ?>/tipovuelo">
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