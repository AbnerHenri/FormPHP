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
            if(!preg_match("/^[a-zA-Z' ]*$/", $name)){
                $nameMessage = 'Aceitamos apenas letras e espaços';
            }
        }

        // Verifica se o E-mail está vazio
        if(empty($_POST['email'])){
            $emailMessage = 'Campo Obrigatório';
        }else{

            $email = reformText($_POST['email']);

            // Filtra o texto para confirmar se é um e-mail válido
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailMessage = 'E-mail inválido';
            }
        }

        // Verifica se o campo está vazio
        if(empty($_POST['password'])){
            $passwordMessage = 'Campo Obrigatório';
        }else{

            $password = reformText($_POST['password']);

            // Verifica se a senha tem menos de 7 caracteres
            if(strlen($password) < 7){
                $passwordMessage = 'Senha muito curta';
            }
        }

        // Verifica se o campo está vazio
        if(empty($_POST['confirm'])){
            $confirmMessage = 'Campo Obrigatório';
        }else{

            $confirm = reformText($_POST['confirm']);

            // Verifica se as senha são iguais
            if($password !== $confirm){
                $confirmMessage = 'As senhas não coincidem';
            }
        }

        if(($nameMessage=="") && ($emailMessage=="") && ($passwordMessage=="") && ($confirmMessage=="")){
            header('Location: dados.php');
        }
    }



    // Impede Scripts de serem passados no input
    function reformText($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor;
    }

    // Adiciona a classe aos inputs
    function addClass($status){

        $class = '';

        if($status !== ''){
            $class = 'Invalid';
        }

        echo "class='$class'";
    }

    // Readiciona os valores ao input
    function keepInputs($value){
        echo "value='$value'";
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
        <form class="Login" method="POST">

            <p>Entre</p>

            <div class="Name Input">
                <input type="text" <?php addClass($nameMessage) ?> name="name" <?php keepInputs($_POST['name']) ?> placeholder="Nome" />
                <span class="Error"><?php echo $nameMessage ?></span>
            </div>

            <div class="Email Input">
                <input type="text" <?php addClass($emailMessage) ?> name="email" <?php keepInputs($_POST['email']) ?> placeholder="E-mail" />
                <span class="Error"><?php echo $emailMessage ?></span>
            </div>

            <div class="Password Input">
                <input type="text" <?php addClass($passwordMessage) ?> name="password" <?php keepInputs($_POST['password']) ?> placeholder="Password" />
                <span class="Error"><?php echo $passwordMessage ?></span>
            </div>

            <div class="Confirm Input">
                <input type="text" <?php addClass($confirmMessage) ?> name="confirm" <?php keepInputs($_POST['confirm']) ?> placeholder="Repita a senha" />
                <span class="Error"><?php echo $confirmMessage ?></span>
            </div>

            <button type='submit'>Enviar</button>
        </form>

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