<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Personas</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-personas">
            <form controller="Persona" update="<?php echo $update?>">
                <h1 class="base-title">Datos de la Persona</h1>
                <fieldset>
                    <div class="usuario-fields-container">
                        <div>
                            <label class="base-label">
                                Cedula De Identidad
                                <input type="text" <?php echo $update == 'false' ? '' : 'disabled'?> name="cedula" placeholder="V-00000000" class="base-input">
                            </label>
                            <label class="base-label">
                                Nombre
                                <input type="text" name="nombre" placeholder="Nombre" class="base-input">
                            </label>
                            <label class="base-label">
                                Correo
                                <input type="text" name="correo" placeholder="jean@Gmail" class="base-input">
                            </label>
                        </div>
                        <div>
                            <label class="base-label">
                                Cargo
                                <select class="base-input" name="id_cargo" fk="Cargo">
                                </select>
                                </label>
                                <label class="base-label">
                                    Apellido
                                    <input type="text" name="apellido" placeholder="Apellido" class="base-input">
                                </label>
                            <label class="base-label">
                                Tlf
                                <input type="text" name="telefono" placeholder="0400-0000000" class="base-input">
                            </label>
                        </div>
                    </fieldset>
                    <a href="<?php base_url() ?>/persona">
                        <button type="button" title="Regresar" class="base-button-danger">Regresar</button>
                    </a>
                    <input type="submit" class="base-button" value="Registrar" title="Aceptar Nuevo Registro">
                </div>
            </form>
            <?php require_once './views/includes/alert.php'?>
            <!-- JS -->
            <script src="<?php base_url() ?>/views/assets/js/validations.js"></script>  
            <script src="<?php base_url() ?>/views/assets/js/register.js"></script>
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
        </main>
<?php require_once './views/includes/footer.php' ?>
        

