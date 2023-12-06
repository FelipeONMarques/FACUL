<?php

    if(isset($_POST['submit'])){
        //print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['email']);
        //print_r('<br>');
        //print_r($_POST['telefone']);
        //print_r($_POST['genero']);
        //print_r('<br>');
        //print_r($_POST['data-nascimento']);
        //print_r('<br>');
        //print_r($_POST['cidade']);
        //print_r('<br>');
        //print_r($_POST['estado']);
        //print_r('<br>');
        //print_r($_POST['endereco']);

        include_once('Config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data-nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO formulario_cliente(nome,senha,email,telefone,genero,data_nasc,cidade,estado,endereco) 
        VALUES('$nome','$senha','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="navbar">
            <div class="header-inner-content">
                <a href="index.php"><h1 class="logo">Cafeteria <span>Gourmet</span></h1></a>
            <nav>
                <ul class="links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="products.php">Produtos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="user.php">Conta</a></li>
                </ul>
            </nav>
                <div class="nav-icon-container">
                    
                    <img src="images/menu.png" alt="menu" class="menu-button">

                    <div class="cart">
                        <p><a href="mycart.php"><i class="fa fa-shopping-cart"></i></a></p>
                    </div>

                    <!--

                        CARRINHO BRANCO NO FACUL INDEX.PHP

                    -->
                </div>
            </div>      
    </div>

<main>
<div class="page-inner-content footer-content box-user">
    <div class="box-form">
        <form action="user.php" method="POST">
            <fieldset>
                <legend>Formulário de Inscrição</legend>
                <div class="subtitle-underline"></div>
                <br><br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user">
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" class="input-user">
                    <label for="email" class="label-input">E-mail</label>
                </div>
                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="input-user">
                    <label for="telefone" class="label-input">Telefone</label>
                </div>
                    
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                    <label for="data-nascimento">Data de Nascimento:</label>
                    <input type="date" name="data-nascimento" id="data-nascimento" required>
                    
                <br><br>

                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user">
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user">
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <div class="input-box">
                    <input type="text" name="endereco" id="endereco" class="input-user">
                    <label for="endereco" class="label-input">Endereço</label>
                </div>
                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="input-user">
                    <label for="senha" class="label-input">Senha</label>
                </div>
                
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    
    <p class="login">Já tem acesso: 
    <br><br>   
    <a href="login.php" class="link-login">Login</a>
    </p>

    </div>

</main>
    
<footer class="brown-background">
    <div class="page-inner-content footer-content">
        <div class="download-options">
            <p>Baixe o nosso aplicativo</p>
            <p>Baixe o nosso aplicativo para android e IOS</p>
            <div>
                <img src="images/app-store.png" alt="">
                <img src="images/play-store.png" alt="">
            </div>
        </div>

        <div class="logo-footer">
            <h1 class="logo">Cafeteria <span>Gourmet</span></h1>
            <p>(LEMA DA EMPRESA)</p>
        </div>

        <div class="links-footer">
            <h3>Links úteis</h3>
            <ul>
                <li>Cupons</li>
                <li>Blog Post</li>
                <li>Políticas</li>
                <li>Inscreva-se</li>
            </ul>
        </div>
    </div>

    <div class="page-inner-content copyright">
        <p>Copyrigth 2023 - Felipe Marques - Todos Direitos Reservados</p>
    </div>
</footer>

<script>
    const navbar = document.querySelector(".navbar");
    const menuButton = document.querySelector(".menu-button");

    menuButton.addEventListener("click", () => {
        navbar.classList.toggle("show-menu");
    });
</script>
</body>
</html>