<?php 
    //Template name: Modelo páginas de Notícias
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Fique por dentro das novidades</p>
                <h2>Notícias</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    
    <section class="s-blog-interna">
          <div class="container">
          <div class="overlay-mecanismos-buscar" id="overlayMecanismosBuscar"></div>
            <div class="mecanismos-buscar" id="mecanismosBuscar">
                <div class="elemento-de-busca">
                    <h4>Buscar</h4>
                    <div class="busca">
                        <form action="<?php echo home_url(); ?>">
                            <input class="search" type="text" id="search-input" placeholder="O que você procura?" name="s">
                            <button class="search-button" id="search-button"><i class="fa-solid fa-magnifying-glass" style="color: #0066ff; "></i></button>
                        </form>
                    </div>
                </div>
                <?php include(TEMPLATEPATH .'/includes/filtro-por-categoria.php') ?>

                

            </div>
            <div class="conteudo-de-noticias" id="conteudoDeNoticias">
                <div class="topo-blog">
                        <div class="count-posts">
                            <div class="btn-filtro-category" id="btnFiltroCategory"><i class="fa-solid fa-sliders" style="color: #0066ff;"></i></div>
                        </div>
                        <form class="btn-data" action="" method="get" id="order-form">
                            <label for="order">Ordenar por:</label>
                            <select name="order" id="order" onchange="this.form.submit()">
                                <option value="desc" <?php selected(isset($_GET['order']) && $_GET['order'] === 'desc', true); ?>>Mais recente</option>
                                <option value="asc" <?php selected(isset($_GET['order']) && $_GET['order'] === 'asc', true); ?>>Mais antigo</option>
                            </select>
                        </form>

                        <script>
                            const btnFiltroCategory = document.getElementById("btnFiltroCategory");
                            const conteudoDeNoticias = document.getElementById("conteudoDeNoticias");
                            const overlayMecanismosBuscar = document.getElementById("overlayMecanismosBuscar");

                            function openMenuMecanismos() {
                                document.documentElement.classList.toggle('mecanismos-mobile');
                                document.documentElement.classList.toggle('overlay-mecanismos-active');
                            }

                            function closeMenuMecanismos() {
                                document.documentElement.classList.remove('mecanismos-mobile');
                                document.documentElement.classList.remove('overlay-mecanismos-active');
                            }

                            btnFiltroCategory.addEventListener('click', openMenuMecanismos);
                            overlayMecanismosBuscar.addEventListener('click', closeMenuMecanismos);
                        </script>
                    </div>
                <ul class="lista-posts">
                <?php
                        $category = get_queried_object();
                        $order = isset($_GET['order']) ? sanitize_text_field($_GET['order']) : 'desc'; // Obtém a ordem selecionada, padrão para 'desc'

                        $args = array(
                            'post_type' => 'post',
                            'order' => $order,
                            'cat' => $category->term_id,
                        );

                        $the_query = new WP_Query($args);

                        $post_counter = 0; //?>

                    
                    
                        <?php echo do_shortcode('[ajax_load_more container_type="ul" post_type="post" posts_per_page="12" scroll="false" transition_container="false" button_label="Carregar Mais" button_loading_label="Carregando..." order="' . (isset($_GET['order']) ? sanitize_text_field($_GET['order']) : 'desc') . '"]');?>
                        
                   
                </ul>
               
            </div>
        </div>
        </div>
    </section>
    
    <?php include(TEMPLATEPATH .'/includes/session-faca-uma-simulacao.php') ?>
    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>