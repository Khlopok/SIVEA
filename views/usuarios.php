<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Usuarios</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="usuarios">
        <?php require_once './views/includes/alert_modal.php' ?>
            <div class="base-table-container">
                <div class="base-table-components">
                    <a href="<?php base_url() ?>/usuario/crear">
                        <button class="base-button" title="Registrar Nuevo Usuario">Registrar</button>
                    </a>
                    <input type="search" placeholder="Busqueda">
                </div>
                <table class="base-table" controller="Usuario">
                    <thead class="base-table-head">
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo De Usuario</th>
                            <th>persona</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody class="base-table-body">
                    </tbody> 
                </table>
                <div class="base-table-pagination">
                    <span class="base-tnav-indicator">1-2</span>
                    <button type="button" class="base-table-nav" title="Anterior">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button" class="base-table-nav" title="Siguiente">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- JS -->
            <!-- JS -->
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
            <script src="<?php base_url() ?>/views/assets/js/main.js"></script>  
        </main>
<?php require_once './views/includes/footer.php' ?>