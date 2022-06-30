<?php

    $nameMessage = '';
    $emailMessage = '';
    $passwordMessage = '';
    $confirmMessage = '';

    // Pra quando existir uma requisição tipo POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // Verificar se o post nome está vazio
        if(empty($_POST['name'])){
            $nameMessage = 'Campo obrigatório';
        }else{
            $name = reformText($_POST['name']);

            // Verifica se no campo há apenas letras e espaços
            if(!preg_match("/^[a-zA-Z' ]*$/", $nome)){
                $nameMessage = 'Aceitamos apenas letras e espaços';
            }
        }
    }

    // Impede Scripts de serem passados no input
    function reformText($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Login</title>
</head>
<body>
    <div class="Container">
        <div class="Login">

            <p>Entre</p>

            <div class="Name Input">
                <input type="text" name="name" placeholder="Nome" />
                <span class="Error"></span>
            </div>

            <div class="Email Input">
                <input type="text" name="email" placeholder="E-mail" />
                <span class="Error"></span>
            </div>

            <div class="Password Input">
                <input type="text" name="password" placeholder="Password" />
                <span class="Error"></span>
            </div>

            <div class="Confirm Input">
                <input type="text" name="confirm" placeholder="Repita a senha" />
                <span class="Error"></span>
            </div>

            <button>Enviar</button>
        </div>

        <div class="Welcome">
            <p>
                <span style="font-size : 22px">Seja Muito</span> 
                <br>Bem-Vindo
            </p>
            <img src="./Assets/Conect.svg" />
        </div>
    </div>
</body>
</html>