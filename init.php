<?php

//Constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','senha123');
define('DB_NAME', 'siscvet');

//habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);

//inclui o arquivo de funções
require_once 'function.php';
