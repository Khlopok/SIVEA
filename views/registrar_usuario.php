<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Usuarios</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-usuario">
            <form controller="Usuario" update="<?php echo $update?>">
                <fieldset>
                    <h1 class="base-fieldset-title">Datos de usuario</h1>
                    <div class="usuario-fields-container">
                        <div>
                            <label class="base-label">
                                Persona
                                <select <?php echo $update == 'false' ? '' : 'disabled'?> name="cedula_persona" class="base-input" fk="persona">
                                </select>
                            </label>
                            <label class="base-label">
                                Usuario
                                <input type="text" name="apodo" placeholder="Nombre de usuario" class="base-input">
                            </label>
                            <label class="base-label">
                                Contraseña
                                <input type="password" name="password" placeholder="Contraseña" class="base-input" passwordValidator>
                            </label>
                        </div>
                        <div>
                            <label class="base-label"  id="tipoUsuario">
                                Tipo de usuario
                                <select class="base-input" name="tipo">
                                    <option value="admin">Administrador</option>
                                    <option value="Mode">Moderador</option>
                                    <option value="Inv">Invitado</option>
                                </select>
                            </label>
                            <label class="base-label">
                                Confirmar contraseña
                                <input type="password" placeholder="Confirmacion" class="base-input" passwordValidator>
                            </label>
                        </div>
                    </fieldset>
                    <a href="<?php base_url() ?>/usuario">
                        <button type="button" title="Regresar" class="base-button-danger">Regresar</button>
                    </a>
                    <input type="submit" class="base-button" value="Registrar" title="Registrar">
                </div>
            </form>
            <?php require_once './views/includes/alert.php'?>
            <!-- JS -->
            <script src="<?php base_url() ?>/views/assets/js/validations.js"></script>  
            <script src="<?php base_url() ?>/views/assets/js/register.js"></script>
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
        </main>
<?php require_once './views/includes/footer.php' ?>
        

