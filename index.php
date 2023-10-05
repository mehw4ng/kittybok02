<?php
include("./db/conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Purple Kitty</title>

    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	
<header>
        <h2 class="logo">Kitty's Book</h2>

        <ul class="navmenu">
            <li><a href="#"></a>Home</li>
            <li><a href="#"></a>Produtos</li>
            <li><a href="#"></a>Lançamentos</li>
            <li><a href="#"></a>Duvidas Frequentes</li>
            <li><a href="#"></a>Contatos</li>
            <li><a href="#"></a>Sobre</li>
            <li><a href="#"></a>Login</li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

	</header>
    
        <!-- Conteúdo principal do sistema  -->

        <!-- MENU DE INCLUSÃO DE CONTEÚDO  -->
        <?php
        if (isset($_GET['menu'])) {
            $menu = $_GET['menu'];
        } else {
            $menu = "";
        }
        switch ($menu) {
            case "home":
                include("home.php");
                break;
            case "produtos":
                include("produtos.php");
                break;
            case "lançamentos":
                include("lançamentos.php");
                break;
            case "duvidas":
                include("duvidas.php");
                break;
            case "contatos":
                include("contatos.php");
                break;
            case "sobre":
                include("sobre.php");
                break;
                case "login":
                    include("login.php");
                    break;
            default:
                include("home.php");
        }
        ?>

</body>

</html>