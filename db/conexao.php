<?php


const SERVIDOR = "localhost";
const USUARIO = "root";
const SENHA = "123456";
const BANCO = "dbkitty";

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or 
die("Erro ao conectar ao servidor. " . mysqli_connect_error());


?>