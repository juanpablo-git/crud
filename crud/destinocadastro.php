<?php
//criando sessao
session_start();
require "conection.php";
//validação do formulário
if(empty($_POST["email"]) || empty($_POST['senha'])){
    header("Location: cadastro.php");
    $_SESSION['campovazio'] = true ;
    exit();
}

//montando a query
$email = mysqli_real_escape_string($conection,$_POST['email']);
$senha = mysqli_real_escape_string($conection,$_POST['senha']);
$query = "SELECT email FROM longin WHERE email='{$email}' AND senha='{$senha}'";
$result = mysqli_query($conection,$query);
$row = mysqli_num_rows($result);

//verificar se é adm

if($row == 1){
    
    $_SESSION['email']= $email;
    if($_SESSION['email'] == "adm@dominio.com"){
        $_SESSION['adm'] = true;
        header("Location: teete.php");
        exit();

    }else{
        header("Location: painel.php");
        exit();
    }

}else{
    
    $_SESSION["naoAutenticado"] = true;
    header("Location: cadastro.php");
    exit();
}

?>