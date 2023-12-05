<?php

require 'Cart.php';
require 'Product.php';

session_start();
//print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

$products = [
    1=> ['id' => 1, 'name' => 'Café Irlandes', 'price' => 7.00, 'quantity' => 1],
    2=> ['id' => 2, 'name' => 'Café puro', 'price' => 3.00, 'quantity' => 1],
    3=> ['id' => 3, 'name' => 'Café expresso', 'price' => 5.00, 'quantity' => 1],
    4=> ['id' => 4, 'name' => 'Café com leite', 'price' => 4.00, 'quantity' => 1],
    5=> ['id' => 5, 'name' => 'Café americano', 'price' => 5.00, 'quantity' => 1],
    6=> ['id' => 6, 'name' => 'Cappuccino', 'price' => 12.00, 'quantity' => 1],
    7=> ['id' => 7, 'name' => 'Café laccino', 'price' => 9.00, 'quantity' => 1],
    8=> ['id' => 8, 'name' => 'Café submarino', 'price' => 15.00, 'quantity' => 1],
//-----------------------COMIDAS----------------------------//
    9=> ['id' => 9, 'name' => 'Bolo de morango', 'price' => 4.00, 'quantity' => 1],
    10=> ['id' => 10, 'name' => 'Bolo de chocolate', 'price' => 4.00, 'quantity' => 1],
    11=> ['id' => 11, 'name' => 'Coxinha', 'price' => 5.00, 'quantity' => 1],
    12=> ['id' => 12, 'name' => 'Pão de queijo', 'price' => 4.00, 'quantity' => 1],
];

if (isset($_GET['id'])){
    $id= strip_tags($_GET['id']);
    $productInfo = $products[$id];
    $product = new Product;
    $product->setId($productInfo['id']);
    $product->setName($productInfo['name']);
    $product->setPrice($productInfo['price']);
    $product->setQuantity($productInfo['quantity']);

    $cart = new Cart;
    $cart->add($product);
}

//var_dump($_SESSION['cart'] ?? []);

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
                    <li><a href="contacts.php">Contatos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="user.php">Conta</a></li>
                </ul>
            </nav>
                <div class="nav-icon-container">
                    
                    <img src="images/menu.png" alt="menu" class="menu-button">

                    <div class="cart">
                        <p><a href="mycart.php"><i class="fa fa-shopping-cart"></i></a></p>
                    </div>

                    <div><a href="Exit.php" style="background-color: #978B7B; 
                    color: #fff; padding: 5px; border-radius: 999px">Sair</a></div>
                    
                </div>
            </div>      
    </div>

    <!-- MAIN CONTENT-->
    <main>
        <div class="brown-background">
            <div class="page-inner-content">
                <br><br><br><br>
            </div>
        </div>

        <div>
            <div class="page-inner-content">
                <h3 class="section-title">Cafés</h3>
                <div class="subtitle-underline"></div>
                <div class="cols cols-4">
                    <div class="product">
                        <ul>
                            <li><a href="?id=1" class="product-name">
                            <img src="images/1cafe-irlandes.png" alt="">    
                            Café Irlandes</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">7,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=2" class="product-name">
                            <img src="images/1Cafe-puro.jpeg" alt="">    
                            Café puro</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">3,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=3" class="product-name">
                            <img src="images/1cafe-expresso.png" alt="">    
                            Café expresso</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">5,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=4" class="product-name">
                            <img src="images/1Café com leite.png" alt="">    
                            Café com leite</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">4,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=5" class="product-name">
                            <img src="images/1Café americano.png" alt="">    
                            Café americano</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">5,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=6" class="product-name">
                            <img src="images/1cappuccino.png" alt="">    
                            Cappuccino</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">12,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=7" class="product-name">
                            <img src="images/1cafe-laccino.png" alt="">    
                            Café laccino</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">9,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=8" class="product-name">
                            <img src="images/1submarino-chocolate.jpg" alt="">    
                            Café submarino</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">15,00 <span>R$</span></p>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-inner-content">
                <h3 class="section-title">Acompanhamentos</h3>
                <div class="subtitle-underline"></div>
                <div class="cols cols-4">
                <div class="product">
                        <ul>
                            <li><a href="?id=9" class="product-name">
                            <img src="images/1bolo-mora.png" alt="">    
                            Bolo de morango</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">4,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=10" class="product-name">
                            <img src="images/1bolo-choc.png" alt="">    
                            Bolo de chocoçate</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">4,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=11" class="product-name">
                            <img src="images/1coxinha.png" alt="">    
                            Coxinha</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">5,00 <span>R$</span></p>
                        </ul>
                    </div>
                    <div class="product">
                        <ul>
                            <li><a href="?id=12" class="product-name">
                            <img src="images/1pao-queijo.png" alt="">    
                            Pão de queijo</a></li>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                            <p class="product-price">4,00 <span>R$</span></p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="brown-background">
        <div class="page-inner-content footer-content">
            <div class="download-options">
                <p>Baixe o nosso aplicativo</p>
                <p>Baixe o nosso aplicativo para android e IOS</p>
                <div>
                    <img src="/images/app-store.png" alt="">
                    <img src="/images/play-store.png" alt="">
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