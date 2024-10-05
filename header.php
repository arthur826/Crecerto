<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <title><?php bloginfo('name') ?><?php wp_title ('|')?></title>
    <?php wp_head()?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141070382-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-141070382-1');
    </script>
    <meta name="google-site-verification" content="So65VM14qDUc4NLRW_pjekY7tdQU363mJWequz4NeOA" />
</head>
<body>
    <header id="js-header">
        <div class="container">
            <a href="<?php echo get_option("siteurl"); ?>" class="logo-principal">
                <img src="<?php echo get_template_directory_uri() ?>/img/crecerto_rodape.png" alt="logo-crecerto">
            </a>
            <a href="<?php echo get_option("siteurl"); ?>" class="logo-sticker">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-crecerto.svg" alt="logo-crecerto">
            </a>
            <nav>
                <?php
                    $args = array(
                        'menu' => 'Header Principal',
                        'theme_location' => 'header-principal',
                        'container' => false,
                        'menu_class' => 'menu-crecerto'
                    );
                    wp_nav_menu( $args );
                ?>
            </nav>
            <ul class="idiomas">
                <li>
                <a href="<?php the_field ('link_site_portugues', 'option')?>">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icone-brasil.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('link_site_espanhol', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icone-espanha.png" alt=""></a>
                </li>
                <li>
                    <a href="<?php the_field('link_site_ingles', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icone-eua.png" alt=""></a>
                </li>
            </ul>
            <div class="search-button-header" id="searchButtonHeader">
                <i class="fa-solid fa-magnifying-glass" style="color: #0066ff; "></i>
            </div>
            <button class="btn-mobile" id="js-btn-menu-mobile">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icon_menu_mobile.svg" alt="botao-mobile">
            </button>
        </div>
    </header>

    <div class="buscar-informacoes" id="buscarInformacoes">
        <aside>
            <div class="container">
                    <form class="busca" action="<?php echo home_url(); ?>">
                        <input class="search" type="text" id="search-input" placeholder="O que você procura?" name="s">
                        <button class="btn-search-primary" id="search-button">Buscar</button>
                    </form>
            </div>
        </aside>
    </div>

    <div class="menu-mobile">
        <div class="overlay js-overlay"></div>
        <aside>
            <a href="<?php echo get_option("siteurl"); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/crecerto_rodape.png" alt="logo" class="logo">
            </a>
            <?php
                    $args = array(
                        'menu' => 'Header Principal',
                        'theme_location' => 'header-principal',
                        'container' => false,
                        'menu_class' => 'menu-crecerto'
                    );
                    wp_nav_menu( $args );
                ?>
            <ul class="idiomas">
                <li>
                <a href="<?php the_field ('link_site_portugues', 'option')?>">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icone-brasil.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('link_site_espanhol', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icone-espanha.png" alt=""></a>
                </li>
                <li>
                    <a href="<?php the_field('link_site_ingles', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icone-eua.png" alt=""></a>
                </li>
            </ul>
        </aside>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const jsHeader = document.getElementById("js-header");
            const buscarInformacoes = document.getElementById("buscarInformacoes");
            const searchButtonHeader = document.getElementById("searchButtonHeader");

            let isSearchActive = false;

            searchButtonHeader.addEventListener("click", function () {

                window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                        });
                console.log("click");
                if (!isSearchActive) {
                    // Ativar a animação e as configurações de pesquisa
                    buscarInformacoes.style.animation = "searchSpwan 1s ease-in forwards";
                    jsHeader.style.animation = "headerBGTwo 0.1s ease-in forwards"; //
                    jsHeader.style.border = "1px solid #E6EAF0";
                    jsHeader.classList.add('header-search');
                } else {
                    // Desativar a animação e restaurar as configurações originais
                    buscarInformacoes.style.animation = "searchSpwanInvert 0.5s ease-in forwards";
                    jsHeader.style.animation = "headerBG 1.3s ease-in forwards"; //
                    jsHeader.style.border = ""; //
                    jsHeader.classList.remove('header-search');
                }

                // Inverter o estado
                isSearchActive = !isSearchActive;
            });
        });
    </script>

