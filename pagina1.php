<?php
    //var_dump($_POST);
    if(isset($_POST)){
        if(!empty($_POST)){
            if(isset($_POST["nome"]) && !empty($_POST["nome"])){
                $nome =  $_POST["nome"];
                $email = $_POST["email"];
                echo $nome."<br>";
                echo $email."<br>";
            }
        }
    }
?>