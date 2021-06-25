<?php
require 'conection.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = $_POST['senha'];
$cpf = $_POST['npf'];
$cargo = $_POST['cargo'];

//add
$sql = "insert into longin (nome,sobrenome,senha,email,cpf,cargo) values ('$nome','$sobrenome','$senha','$email','$cpf','$cargo')";
$conection->query($sql);

echo "Bem vindo $cargo";

?>