<?php require_once './views/includes/navigation.php' ?>
<div class="main-container">
    <header>
        <h1>Vuelos Generales</h1>
        <span>Usuario</span>
        <a href="<?php base_url() ?>/login">
            <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
        </a>
    </header>
    <main class="reg-vuelo-general">
        <form controller="Vuelogeneral" update="<?php echo $update?>">
            <div class="form-title-conainer">
                <h1 class="base-title">Registrar Vuelo General</h1>
            </div>
            <div class="field-container">
                <div>
                    <label class="base-label" for="institucion">
                        Institución
                        <select class="base-input" name="institucion" fk="institucion">
                        </select>
                    </label>
                    <label class="base-label">
                        Fecha LLegada
                        <input type="date" name="fecha_llegada" class="base-input" placeholder="DD/MM/AA">
                    </label>
                    <label class="base-label">
                        Hora de LLegada
                        <input type="time" name="hora_llegada" class="base-input" placeholder="HH:MM">
                    </label>
                    <label class="base-label">
                        Pasajeros Embarcados
                        <input type="number" name="pasajeros_embarcados" class="base-input" placeholder="EMB">
                    </label>
                    <label class="base-label" for="modeloAeronave">
                        Modelo de Aereonave
                        <select class="base-input" name="aeronave" fk="aeronave">
                        </select>
                    </label>
                    <label class="base-label" for="tipoVuelo">
                        Tipo de Vuelo
                        <select class="base-input" name="tipovuelo" fk="tipovuelo">
                        </select>
                    </label>
                </div>
                <div>
                    <label class="base-label">
                        Matricula de Aereonave
                        <input type="text" name="matricula" class="base-input" placeholder="YV0000">
                    </label>
                    <label class="base-label">
                        Fecha Salida
                        <input type="date" name="fecha_salida"class="base-input" placeholder="DD/MM/AA">
                    </label>
                    <label class="base-label">
                        Hora de Salida
                        <input type="time" name="hora_salida" class="base-input" placeholder="HH:MM">
                    </label>
                    <label class="base-label">
                        Pasajeros Desembarcados
                        <input type="number" name="pasajeros_desembarcados" class="base-input" placeholder="DES">
                    </label>
                    <Label class="base-label" for="tipoOperacion">
                        Tipo de Operación
                        <select name="operacion" class="base-input">
                            <option value="Nacional">Nacional</option>
                            <option value="Internacional">Internacional</option>
                        </select>
                    </Label>
                    <label class="base-label" for="ruta">
                        Ubicación
                        <select class="base-input" fk="aeropuerto">
                            <option disabled selected value="foo">Selecciona</option>
                        </select>
                    </label>
                </div>
                <div>
                    Ruta
                    <div class="input-action-container">
                        <input type="text" name="ruta" disabled placeholder="Ruta" class="base-input">
                        <img src="<?php base_url() ?>/views/assets/img/papelera.svg" class="papelera" id="trashcan">
                    </div>
                    <label class="base-label">
                        Observaciones
                        <textarea name="observaciones" class="base-textarea" rows='5' cols='20'
                            placeholder="Comentar Observaciones"></textarea>
                    </label>
                </div>
            </div>
            <div class="form-buttons-container">
                <a href="<?php base_url() ?>/vuelogeneral">
                    <button type="button" title="Regresar" class="base-button-danger">Regresar</button>
                </a>
                <input type="submit" class="base-button" title="Aceptar Nuevo Registro" value="Registrar">
            </div>
        </form>
        <?php require_once './views/includes/alert.php'?>
        <!-- JS -->
        <script src="<?php base_url() ?>/views/assets/js/validations.js"></script>
        <script src="<?php base_url() ?>/views/assets/js/register.js"></script>
        <script src="<?php base_url() ?>/views/assets/js/ruta.js"></script>
        <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script>
    </main>
    <?php require_once './views/includes/footer.php' ?>