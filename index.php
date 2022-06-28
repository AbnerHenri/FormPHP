<?php
if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
}else{
    $nome = 'Mundo';
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h1>
        Olá <?php echo $nome ?>
    </h1>
    <a href='index.php?nome=Abner'>Ir para Abner</a><br>
    <a href='index.php?nome=José'>Ir para José</a><br>
    <a href='index.php?nome=Larissa'>Ir para Larissa</a><br>
</body>
</html>

