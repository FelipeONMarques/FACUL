<?php

session_start();

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('Config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('email:' . $email);
        //print_r('senha:' . $senha);

        $sql = "SELECT * FROM formulario_cliente WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) <1){    //não existe

            unset($_SESSION['email']);
            unset($_SESSION['senha']);


            header('Location: login.php');
        }
        else{   //existe

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: products.php');
        }
    }

    else{
        header('Location: login.php');
    }
?>