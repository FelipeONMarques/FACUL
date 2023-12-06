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

                </div>
            </div>      
    </div>

    <!-- MAIN CONTENT-->
    <main>
        <div class="brown-background">
            <div class="page-inner-content">
                <div class="cols cols-3">
                    <p><span style="font-weight: bold;">Sobre a Cafeteria:</span><br><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, praesentium deleniti eligendi nemo itaque rerum labore quidem consequatur illum in? Fuga eum fugiat iure quisquam consequatur, dolorem atque quae corrupti.</p>
                    <p><span style="font-weight: bold;">Estrutura Física:</span><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptas numquam iste enim quidem expedita similique velit, distinctio dignissimos delectus. Quis illum doloribus facilis exercitationem est facere ipsum corrupti? Voluptatem.</p>
                    <p><span style="font-weight: bold;">Fale conosco:</span><br><br>(31)98768-1234 
                    <br> (31)3334-7894 <br> <span style="font-weight: bold;">Atendimento:</span> <br><br> 08:00 às 20:00 <br> Segunda a Sábado <br> (Exeto domingo e feriados)</p>
                </div>
            </div>
        </div>

        <div>
            <div class="page-inner-content">
                <h3 class="section-title">Imagens da nossa cafeteria</h3>
                <div class="subtitle-underline"></div>
                <div class="cols cols-4">
                    <img src="images/local-cafeteria.jpg" alt="" width="300px" height="250px">
                    <img src="images/local-cafeteria2.jpg" alt="" width="300px" height="250px">
                    <img src="images/horario_atendimento.jpg" alt="" width="300px" height="250px">
                    <img src="images/local-cafeteria.jpg" alt="" width="300px" height="250px">
                </div>
            </div>

            <div class="page-inner-content">
                <h3 class="section-title">Mapa</h3>
                <div class="subtitle-underline"></div>
                <br><br><br>
                    <div class="maps">
                        <img src="images/mapa.png" alt="">
                    </div>
                </div>
            </div>

        <div class="page-inner-content">
            
        </div>
        <br><br><br>

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

        const cart = document.querySelector(".cart");
        const faShoppingCart = document.querySelector(".fa-shopping-cart");

        faShoppingCart.addEventListener("click", () => {
            navbar.classList.toggle("show-cart");
        });
    </script>
</body>
</html>