<?php
    if(isset($_POST['name'])  && isset($_POST['password'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        echo "<h1>User : $name <br> Password : $password</h1>";
    }
?>