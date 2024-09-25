<?php
// Constantes
const PRODUCTION = true;
const BASE_URL   = 'http://localhost/sivea';
const HOST       = 'localhost';
const BD         = 'sivea_system';
const DB_USER    = 'root';
const PASS       = '';
const CHARSET    = 'charset=utf8';

// HTTP Headers
header('Access-Control-Allow-Origin: ' . BASE_URL);
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Locale
setlocale(LC_TIME, '');
