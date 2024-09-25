<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Estadisticas</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="estadisticas">
            <section class="chart-controls">
                <label class="base-label">
                    Operacion
                    <select class="base-input-select">
                        <option>Operación</option>
                    </select>
                </label>
                <label class="base-label">
                    Tipo De Vuelo
                    <select class="base-input-select">
                        <option>Tipo de vuelo</option>
                    </select>
                </label>
                <label class="base-label">
                    Fecha
                    <select class="base-input-select">
                        <option>Fecha</option>
                    </select>
                </label>
                <label class="base-label">
                    Tipo de grafica
                    <select class="base-input-select">
                        <option>Tipo de grafica</option>
                    </select>
                </label>
            </section>
            <section class="chart-container">
                <div>
                    <div id="menuChartLeft"></div>
                </div>
                <div>
                    <div id="menuChartRight"></div>
                </div>
            </section>
            <!-- JS -->
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
            <script src="<?php base_url() ?>/views/assets/js/plotly.js"></script> 
            <script src="<?php base_url() ?>/views/assets/js/charts.js"></script> 
        </main>
<?php require_once './views/includes/footer.php' ?>