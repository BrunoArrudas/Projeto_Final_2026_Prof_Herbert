<?php

$host = 'localhost';
$usuario = 'root';
$senha = '994948664Bb@';
$banco = 'free_manager';

$conn = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco
);

if($conn->connect_error){

    die('Erro de conexão');

}