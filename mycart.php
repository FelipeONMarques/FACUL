<?php

require 'Product.php';
require 'Cart.php';

session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

$cart = new Cart;
$productsInCart = $cart->getCart();

if (isset($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $cart->remove($id);
    header('Location: mycart.php');
    
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

                    <?php echo "<p>$logado</p>";?>
                    <div><a href="Exit.php" style="background-color: #978B7B; 
                    color: #fff; padding: 10px; border-radius: 999px; margin-left:  20px;">Sair</a></div>
                    </div>

                </div>
            </div>      
    </div>

    <!-- MAIN CONTENT-->
    <main>
        <div class="brown-background">
            <div class="page-inner-content">
                <div class="cols cols-3">
                    
                </div>
            </div>
        </div>

        <div class="mycart">
            <br><br>
        <ul>
            <?php if(count($productsInCart) <=0): ?>
                <p style="text-align: center;">NENHUM PRODUTO NO CARRINHO!!</p>
                <BR><br><br></BR>
            <?php endif ?>

            <?php foreach($productsInCart as $product): ?>
            <li style="list-style-type: none;"> 
                <p style="color: #ffff; font-weight:700"><?php echo $product->getName(); ?></p>
                <p style="color: #ffff; font-weight:700"><?php echo $product->getQuantity() ?></p>
                Preço: R$ <?php echo number_format($product->getPrice(), 2, ',', '.') ?>
                Subtotal: R$ <?php echo number_format($product->getPrice() * $product->getQuantity(), 2, ',', '.') ?>
                <a href="?id=<?php echo $product->getId() ?>">Remover</a>
            </li>

            <?php endforeach; ?>

            <li style="list-style-type: none;" class="total">Total: R$<?php echo number_format( $cart->getTotal(), 2, ',', '.') ?></li>
        </ul>
        </div>
        <br><br>
        <h2>Tipo de pagamento:</h2>
        <div class="pagamento cols cols-3">
            <a href="pagamento/pix.php" style="color: #fff;">
                <img src="images/pix.png" alt="" width="200px" height="120px" style="padding-bottom: 20px;">
                <p style="margin-left:20px;">PIX</p>
            </a>
                <a href="pagamento/cartao.php" style="color: #fff;">
                <img src="images/cartao.png" alt="" width="200px" height="120px" style="padding-bottom: 20px;">
                <p style="margin-left:2%;">Cartão (DÉBITO/CRÉDITO)</p>
            </a>
                <a href="pagamento/boleto.php" style="color: #fff;">
                <img src="images/boleto.png" alt="" width="200px" height="120px" style="padding-bottom: 20px;">
                <p style="margin-left:2%;">Boleto</p>
            </a>
                
        </div>

        

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

        const cart = document.querySelector(".cart");
        const faShoppingCart = document.querySelector(".fa-shopping-cart");

        faShoppingCart.addEventListener("click", () => {
            navbar.classList.toggle("show-cart");
        });
    </script>
</body>
</html>