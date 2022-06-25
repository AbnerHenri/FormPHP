<?php

    class Linguagens {
        public $name;
        public $framework;
        public function __construct($name, $framework){
            $this->name = $name;
            $this->framework = $framework;
        } 

        public function message(){
            echo "A linguagem é $this->name<br>";
            echo "O Framework é $this->framework";
        }
    }

    $leaguage1 = new Linguagens('JS', 'NextJs');
    $leaguage2 = new Linguagens('PHP', 'Laravel');
    $leaguage3 = new Linguagens('Python', 'Django');

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
        echo $leaguage3->message();
    ?>
</body>
</html>

