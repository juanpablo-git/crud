<link rel="stylesheet" href="style.css">
<?php
require "conection.php";
include("verifica_longin.php");
$email = $_SESSION['email'];
$query = "select * from longin WHERE email='$email' ";
$resultado = mysqli_query($conection,$query);
$dados = mysqli_fetch_array($resultado);


?>
<header>
    <nav>
        <p>
            <?php echo $dados['nome'] ?><a href="sair.php">sair</a>
        </p>
    </nav>
    
</header>
<div id="dadosPessoais">
    <h3>dados pessoais</h3>
    <ul>
        <li>
            <?php echo $dados['id']; ?>
        </li>
        <li>
            <?php print(  $dados['nome']." ". $dados['sobrenome']) ; ?>
        </li>
        <li>
        <?php echo $dados['email']; ?>
        </li>
        <li>
        <?php echo $dados['cpf']; ?>

        </li>
    </ul>
</div>