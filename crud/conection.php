<?php
//conexão
$conection = new mysqli('localhost','root','','cadastro');
if ($conection->connect_error){
    echo "{$conection->connect_error}";
}

//error_reporting(0);
