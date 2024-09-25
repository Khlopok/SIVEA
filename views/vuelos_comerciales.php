<?php require_once './views/includes/navigation.php' ?>
    <div class="main-container">
        <header>
            <h1>Vuelos Comerciales</h1>
            <span>Usuario</span>
            <a href="<?php base_url() ?>/login">
                <button class="base-button" title="Cerrar Sesión">Cerrar Sesión</button>
            </a>
        </header>
        <main class="vuelos-comerciales">
            <dialog class="table-modal" id="modal">
                <div class="modal-table-container">
                    <div class="table-scroll">
                        <table class="base-table">
                            <thead class="base-table-head">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Aerolinea</th>
                                    <th>N° De Vuelo</th>
                                    <th>Matricula</th>
                                    <th>Ruta</th>
                                    <th>
                                        LL 
                                        <hr>
                                        SAL
                                    </th>
                                    <th>Tipo De Operación</th>
                                    <th>
                                        Hora Programada
                                        <hr>
                                        Hora Real
                                    </th>
                                    <th>Carga Kg</th>
                                    <th>
                                        Pasajeros Desembarcados
                                        <hr>
                                        Pasajeros Embarcados
                                    </th>
                                    <th>Observaciones</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody class="base-table-body">
                                <tr>
                                    <td>01/02/24</td>
                                    <td>Albatros</td>
                                    <td>346/063</td>
                                    <td>YV2776</td>
                                    <td>SVMI/SVSP/SVMI</td>
                                    <td>LL/SAL</td>
                                    <td>Nacional</td>
                                    <td>
                                        15:35/17:16
                                        <hr>
                                        15:35/17:16
                                    </td>
                                    <td>0 kg</td>
                                    <td>
                                        21
                                        <hr>
                                        12
                                    </td>
                                    <td>Vuelo Sin Novedad</td>
                                    <td>
                                        <button type="button" class="base-table-edit" title="Cerrar" id="closeModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.793 2.232a.75.75 0 0 1-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 0 1 0 10.75H10.75a.75.75 0 0 1 0-1.5h2.875a3.875 3.875 0 0 0 0-7.75H3.622l4.146 3.957a.75.75 0 0 1-1.036 1.085l-5.5-5.25a.75.75 0 0 1 0-1.085l5.5-5.25a.75.75 0 0 1 1.06.025Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button type="button" class="base-table-edit" title="Editar">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                            </svg>   
                                        </button>
                                        <button type="button" class="base-table-delete" title="Eliminar">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </dialog>
            <div class="base-table-container">
                <div class="base-table-components">
                    <a href="<?php base_url() ?>/vuelocomercial/crear">
                        <button class="base-button" title="Nuevo Vuelo Comercial">Registrar</button>
                    </a>
                    <button class="base-button" title="Imprimir Documento">Imprimir</button>
                    <input type="search" placeholder="Busqueda">
                </div>
                <div class="table-scroll">
                    <table class="base-table">
                        <thead class="base-table-head">
                            <tr>
                                <th>Fecha</th>
                                <th>Aerolinea</th>
                                <th>N° De Vuelo</th>
                                <th>Matricula</th>
                                <th>Ruta</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody class="base-table-body">
                            <tr>
                                <td>01/02/24</td>
                                <td>Albatros</td>
                                <td>346/063</td>
                                <td>YV2776</td>
                                <td>SVMI/SVSP/SVMI</td>
                                <td>
                                    <button type="button" class="base-table-edit" title="Ver más" id="showModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.5 12a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm6 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm6 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd" />
                                        </svg>                                      
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
            <script src="<?php base_url() ?>/views/assets/js/accordion.js"></script> 
            <script src="<?php base_url() ?>/views/assets/js/showMore.js"></script>
        </main>
<?php require_once './views/includes/footer.php' ?>