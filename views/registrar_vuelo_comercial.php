<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Vuelos Comerciales</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="reg-vuelo-comercial">
            <form>
                <div class="form-title-conainer">
                    <h1 class="base-title">Registrar Vuelo Comercial</h1>
                </div>
                <div class="field-container">
                    <div>
                        <label class="base-label">
                            Fecha 
                            <input type="date" placeholder="DD/MM/AA" class="base-date">
                        </label>
                        <label class="base-label" for="aerolinea">
                            Aerolinea
                            <select name="TIPO DE OPERACIÓN" class="base-input" id="aerolinea">  
                                <option value="NA">Albatros Airline</option>
                                <option value="INT">Conviasa</option>
                            </select>
                        </label>
                        <label class="base-label">
                            Numero de vuelo
                            <input type="text" placeholder="000/000" class="base-input"> 
                        </label>
                        <label class="base-label">
                            Matricula
                            <input type="text" placeholder="YV0000" class="base-input">
                        </label>
                        <label class="base-label" for="ruta">
                            Ruta
                            <select name="TIPO DE OPERACIÓN" class="base-input" id="ruta">  
                                <option value="NA">SVSP-SVMI</option>
                                <option value="INT">SVSP-SVMI-SVMG</option>
                            </select>
                        </label>
                        <label class="base-label">
                            LLegada/Salida
                            <input type="text" placeholder="LL/SAL" class="base-input">
                        </label>
                    </div>
                    <div>
                        <label class="base-label" for="operacion">
                            Operación
                            <select class="base-input">
                                <option value="nacional">Nacional</option>
                                <option value="internacional">Internacional</option>
                            </select>
                        </label>
                        <label class="base-label">
                            Hora programada
                            <input type="text" placeholder="HH:MM" class="base-input">
                        </label>
                        <label class="base-label">
                            Hora real
                            <input type="text" placeholder="HH:MM" class="base-input">
                        </label>
                        <label class="base-label">
                            Carga Kg
                            <input type="text" placeholder="0KGS" class="base-input">
                        </label>
                        <label class="base-label">
                            Pasajeros Embarcados
                            <input type="number" class="base-input" placeholder="Emb">
                        </label>
                        <label class="base-label">
                            Pasajeros Desembarcados
                            <input type="number" class="base-input" placeholder="Desem">
                        </label>
                    </div>
                    <label class="base-label">
                        Observaciones
                        <textarea name="left" class="base-textarea" rows='5' cols='20' placeholder="Comentar Observaciones"></textarea>
                    </label>
                </div>
                <div class="form-buttons-container">
                    <a href="<?php base_url() ?>/vuelocomercial">
                        <button type="button" title="Regresar" class="base-button-danger">Regresar</button>
                    </a>
                    <input type="submit" class="base-button" title="Aceptar Nuevo Registro" value="Registrar">
                </div>
            </form>
            <?php require_once './views/includes/alert.php'?>
            <!-- JS -->
            <script src="<?php base_url() ?>/views/assets/js/validations.js"></script>  
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
        </main>
<?php require_once './views/includes/footer.php' ?>