<?php
session_start();
if(!$_SESSION['email']){
    header("Location: cadastro.php");
    exit();
    
}

?>