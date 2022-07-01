<?php 

    $name = '';
    $email = '';

    if(isset($_POST['name']) && (isset($_POST['email']))){
        $name = $_POST['name'];
        $email = $_POST['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='./StyleDados.css' rel='stylesheet' />
    <title>Dados</title>
</head>
<body>
    <div class="Container">
        <div class="Welcome">
            <img src='./Assets/DataOne (1).svg' />
            <img src="./Assets/DataOne (2).svg" />
        </div>

        <div class="Login">
            <div class="Card"><span>Seu Nome : </span><?php echo $name ?></div>
        </div>
    </div>
</body>
</html>