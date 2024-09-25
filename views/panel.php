<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Panel Principal</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="panel">
            <section class="card-container">
                <article class="card">
                    <span class="card-title">VUELOS COMERCIALES</span>
                    <span class="card-data">10</span>
                </article>
                <article class="card">
                    <span class="card-title">VUELOS OFICIALES</span>
                    <span class="card-data">5</span>
                </article>
                <article class="card">
                    <span class="card-title">VUELOS PRIVADOS</span>
                    <span class="card-data">5</span>
                </article>
                <article class="card">
                    <span class="card-title"> VUELOS GENERALES</span>
                    <span class="card-data">10</span>
                </article>
                <article class="card">
                    <span class="card-title"> VUELOS INTERNACIONALES</span>
                    <span class="card-data">0</span>
                </article>
            </section>
            <section class="base-table-container horario-container">
                <table class="base-table">
                    <thead class="base-table-head">
                        <tr>
                            <th>Fecha</th>
                            <th>Aerolinea</th>
                            <th>Hora de llegada</th>
                            <th>Hora de Salida</th>
                            <th>Ruta</th>
                            <th>LL/SA</th>
                        </tr>
                    </thead>
                    <tbody class="base-table-body">
                        <td>11/05/2024</td>
                        <td>Albatros Airline</td>
                        <td>9:30/10:30</td>
                        <td>11:00/11:30</td>
                        <td>SVSP-SVMI</td>
                        <td>LL/SA</td>
                    </tbody>
                </table>
            </section>
        <!-- JS -->
        <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
        </main>
<?php require_once './views/includes/footer.php' ?>