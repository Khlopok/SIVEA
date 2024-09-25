<?php require_once './views/includes/navigation.php' ?>
<div class="main-container">
    <header>
        <h1>Vuelos Generales</h1>
        <span>Usuario</span>
        <a href="<?php base_url() ?>/login">
            <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
        </a>
    </header>
    <main class="vuelos-generales">
        <dialog class="alert-modal" id="modal">
            <div class="alert-modal-container">
                <div class="alert-modal-content" id="modalContent"></div>
                <div class="alert-modal-button">
                    <button type="button" class="base-table-delete" title="Cancelar" id="closeModal">Cancelar</button>
                    <button type="button" class="base-table-edit" title="Confirmar" id="action">Confirmar</button>
                </div>
            </div>
        </dialog>
        <div class="base-table-container">
            <div class="base-table-components">
                <a href="<?php base_url() ?>/vuelogeneral/crear">
                    <button class="base-button" title="Nuevo Vuelo General">Registrar</button>
                </a>
                <button class="base-button" title="Imprimir Documento">Imprimir</button>
                <input type="search" placeholder="Busqueda">
            </div>
            <table class="base-table" controller="Vuelogeneral">
                <thead class="base-table-head">
                    <tr>
                        <th>Instituciòn</th>
                        <th>Aeronave</th>
                        <th>Tipo de vuelo</th>
                        <th>Ruta</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody class="base-table-body">
                </tbody>
            </table>
            <dialog class="table-modal" id="moreModal">
                <div class="modal-table-container">
                    <div class="table-scroll">
                        <table class="base-table">
                            <thead class="base-table-head">
                                <tr>
                                    <th>Institución</th>
                                    <th>Matricula</th>
                                    <th>Fecha de Llegada</th>
                                    <th>Fecha de Salida</th>
                                    <th>Hora de Llegada</th>
                                    <th>Hora de Salida</th>
                                    <th>Pasajeros Embarcados</th>
                                    <th>Pasajeros Desembarcados</th>
                                    <th>Aeronave</th>
                                    <th>Operación</th>
                                    <th>Tipo de vuelo</th>
                                    <th>Ruta</th>
                                    <th>Observaciones</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody class="base-table-body" id="moreModalTbody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </dialog>
            <div class="base-table-pagination">
                <span class="base-tnav-indicator">1-2</span>
                <button type="button" class="base-table-nav" title="Anterior">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button" class="base-table-nav" title="Siguiente">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- JS -->
        <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script>
        <script src="<?php base_url() ?>/views/assets/js/main.js"></script>
        <script src="<?php base_url() ?>/views/assets/js/modalInfo.js"></script>
    </main>
    <?php require_once './views/includes/footer.php' ?>