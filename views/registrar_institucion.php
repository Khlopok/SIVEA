<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Instituciones</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-institucion">
            <form controller="Institucion" update="<?php echo $update?>">
                <h1 class="base-title">Registrar Institucion</h1>
                <label class="base-label">
                    Nombre
                    <input type="text" class="base-input" name="nombre" placeholder="Nombre"> 
                </label>
                <label class="base-label">
                    Dirección fiscal
                    <input type="text" class="base-input" name="direccion_fiscal" placeholder="Direccion">
                </label>
                <label class="base-label">
                    N° Documento/Rif/C.I
                    <input type="text" class="base-input" name="rif" placeholder="V-123456789">
                </label>
                <label class="base-label">
                    Teléfono
                    <input type="text" class="base-input" name="telefono" placeholder="0000-000-0000">
                </label>
                <div>
                    <a href="<?php base_url() ?>/institucion">
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