<?php

//AUTOLOAD DO COMPOSER(CARREGANDO AS CLASSES DO COMPOSER)
require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS
use Google\Client as GoogleClient;

//VALIDAÇÃO PRINCIPAL DO COOKIE

//VERIFICA OS CAMPOS OBRIGATÓRIOS DO POST
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
    header('location: index.php');
    exit;
}

//COOKIE CSRF
$cookie = $_COOKIE['g_csrf_token'] ?? '';

//VERIFICA O VALOR DO COOKIE E DO POST PARA O CSRF
if($_POST['g_csrf_token'] != $cookie){
    header('location: index.php');
    exit;
}

//VALIDAÇÃO SECUNDÁRIA DO TOKEN

//INSTÂNCIA DO CLENTE GOOGLE
$client = new GoogleClient(['client_id' => '8280478689-
1hrga0rq45c2u75bh4qfse3fsqtg3np7.apps.googleusercontent.com']);

//OBTÉM OS DADOS DO USÁRIO COM BASE NO JWT

//UM ERRO QUE SÓ DEUS SABE
/*$payload = $client->verifyIdToken($_POST['credential']);

//VERIFICA OS DADOS DO PAYLOAD
if (isset($payload['email'])) {
    echo "<pre>";
    print_r($payload);
    echo "<pre>"; exit;
}

var_dump($payload);*/

