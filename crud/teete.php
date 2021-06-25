<link rel="stylesheet" href="style.css">
<body>
<header><a href="sair.php">sair</a></header>


</body>

<?php

require "verifica_longin.php";
require 'conection.php';
if(!$_SESSION['adm']){
    header("Location: cadastro.php");
    exit();
    
}

//ler
$sql = "SELECT * FROM longin";
$results = $conection->query($sql);
if($results->num_rows){
    while($cliente = $results->fetch_object()){
        echo " {$cliente->nome} {$cliente->sobrenome} {$cliente->cpf} {$cliente->cargo} <br>";
    }
}else{
    echo 'erro';
}

?>