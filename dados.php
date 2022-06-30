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
            
        </div>

        <div class="Login">

        </div>
    </div>
</body>
</html>