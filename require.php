<?php
    if(isset($_GET['name'])  && isset($_GET['password'])){
        $name = $_GET['name'];
        $password = $_GET['password'];
        echo "<h1>User : $name <br> Password : $password</h1>";
    }
?>