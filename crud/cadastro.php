<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color:rgb(0, 145, 255) ;
        }
        #voltar{
            background-color: blue;
            font-size:23px;
          width: 100px;
            border-radius: 10px;
        }
        #voltar:hover{
            background-color: #6495ED;
            transition: background-color 1s;
        }
        a{
            text-decoration: none;
            color: black;
        }
        h1{
            text-align: center;
            color: white;
        }
        h5{
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            text-align: center;
            color: white;
            background-color: red;
        }
        form{
            margin: 0% auto;
            background-color:blue;
            width: 530px;
            margin-top:25vh;
            border-radius: 5px;
            box-shadow: 0px 0px 20px black;
            
        }
        span{
            text-align: center;
            background-color: red;
        }
        input{
            padding:5px;
            height: 34px;
            margin: 5px;
           border: none;
            width: 500px;
            outline: none;
        }
        button{
            width: 510px;
            height: 34px;
            margin: 5px;
            padding: 5px;
            border: none;

        }
    </style>
</head>
<body>
<a href="index.html"> <div id="voltar">&#129092; VOLTAR</div>
</a>

    <form action="destinocadastro.php" method="post">
    <?php
if(isset($_SESSION["naoAutenticado"])):
?>
<h5>Usuário não Autenticado</h5>
<?php
endif;
unset($_SESSION["naoAutenticado"]);
?>
<?php
if(isset($_SESSION["campovazio"])){
    echo " <h5>campo vazio</h3>";
}
unset($_SESSION['campovazio']);
?>


        <h1>Faça longin</h1>
        <input type="text" name="email" id="nome" placeholder="seu email">
        <br>
        <input type="password" placeholder="su senha" name="senha" id="senha"/>
        <br>
        <button>Entrar</button>
    </form>
    

</body>
</html>