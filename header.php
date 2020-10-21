<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IEEE UFABC</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>

<nav class="navbar navbar-expand-lg" id="menu-navbar">

    <!-- Logo IEEE -->
    <div id="logo-ieee">
        <a href="#">
            <img src= <?php header_image() ?> alt="IEEE Logo">
        </a>
    </div>

    <!-- Botão (Menu hambúrguer) -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links de navegação -->
        <ul class="navbar-nav mr-auto" id="links-navegacao">
            <!--<li class="nav-item">
                <a class="nav-link" href="#">Participe!</a>
            </li> -->
            <?php wp_nav_menu(array('theme_location' => 'my_main_menu','container_id' => 'containerMenu')); ?>
        </ul>

        <!-- Barra de pesquisa -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-1" id="barra-pesquisar" type="search" placeholder="Pesquisar"
                aria-label="Search">
            <button class="btn my-2 my-sm-0" id="lupa-pesquisar" type="submit">
                <img src= <?php echo get_template_directory_uri()."/assets/icons/icon-lupa.svg"?> alt="Icone de Pesquisar">
            </button>
        </form>

        <!-- Escolha do idioma -->
        <ul class="navbar-nav" id="escolha-idioma">

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src= <?php echo get_template_directory_uri()."/assets/icons/icon-globo.svg"?> alt="Icone de Linguagem">
                    EN
                </a>

                <div class="dropdown-menu" id="idioma-pt" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">PT</a>
                </div>

            </li>

        </ul>

    </div>

</nav>

</header>
    
