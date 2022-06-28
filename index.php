<?php
    $alunos = array(
        "Aluno 1"=>"Abner",
        "Aluno 2"=>"José",
        "Aluno 3"=>"Giovanna",
        "Aluno 4"=>"Larissa"
    )
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
    <?php 
        foreach($alunos as $key => $value){
            echo "<strong>$key</strong> : $value<br>";
        }
    ?>
</body>
</html>

