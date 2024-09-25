//  CRUD VUELOS
//  DESHABILITAR EN LUGAR DE ELIMINAR
//  SESION
//  PANEL HORARIO
//  PANEL TARJETAS
//  VALIDAR NUMERO DE CARACTERES
//  MOSTRAR MENSAJE PERSONALIZADO AL EDITAR
//  RESPONSIVIDAD
//  MEJORAR ALERTAS
//  REPORTES
//  BITACORA
//  COMANDOS
//  REFACTORIZAR JS

const selectRuta = document.querySelector('select[fk="aeropuerto"]');
const inputRuta  = document.querySelector('input[placeholder="Ruta"]');

const rutaHandler = () => {
    inputRuta.value = inputRuta.value + (inputRuta.value ? '-' : '') + selectRuta.value;
    selectRuta.value = 'foo';
};

selectRuta.addEventListener('change', rutaHandler)

//////// logo ruta funcionalidad////////
const trashcan = document.getElementById('trashcan')
const trashcanHandler = () => {
    inputRuta.value = '';
}
trashcan.addEventListener('click', trashcanHandler);
