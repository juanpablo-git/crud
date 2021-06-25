<?php
//destroi sessão
session_start();
session_destroy();
header("Location: cadastro.php");