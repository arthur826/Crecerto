<?php get_header(); ?>

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


    <section class="s-blog-interna" id="ReturnToTop">
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
                                <p id="postCount">Resultados encontrados: <span id="contador">0</span></p>
                                <div class="btn-filtro-category" id="btnFiltroCategory"><i class="fa-solid fa-sliders" style="color: #0066ff;"></i></div>
                            </div>
                            <p class="palavraPesquisada">Palavra pesquisada: <strong><?php echo get_query_var('s') ?></strong></p>
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
                <ul class="lista-posts" id="lista-lis">
                        <?php
                                global $query_string;
                                $query_args = explode("&", $query_string);
                                $search_query = array();

                                foreach($query_args as $key => $string) {
                                    $query_split = explode("=", $string);
                                    $search_query[$query_split[0]] = isset($query_split[1]) ? urldecode($query_split[1]) : '';                                    
                                }
                                $the_query = new WP_Query($search_query);
                                if ( $the_query->have_posts() ) : 
                                ?>        
                                <ul class="alm-listing">
                                    
                                    <?php while ( $the_query->have_posts()) : $the_query->the_post(); ?>
                                        <li class="post-noticia <?php echo ($post_counter === 0) ? 'post-destaque' : ''; ?>">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img-noticia">
                                                    <?php the_post_thumbnail('post-default'); ?>
                                                </div>
                                                <div class="corpo-card-post">
                                                    <?php $category = get_the_category(); ?>
                                                    <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                                    <h5 class="title-post"><?php the_title(); ?></h5>
                                                    <p><?php the_excerpt(); ?> </p>
                                                    <div class="categoria">
                                                    <?php $category = get_the_category(); ?>
                                                        <?php if (!empty($category)) : ?>
                                                            <span class="category-post"><?php echo esc_html($category[0]->cat_name); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>

                                <?php wp_reset_postdata(); ?>

                                <?php else : ?>
                                    

                                <div class="empty-search">
                                    <h3>Nenhum resultado encontrado<i class="fa-solid fa-face-sad-tear" style="color: #0066ff;"></i></h3>
                                    <p>Nao foi encontrado nenhum post com a palavra buscada</p>
                                </div>
                        <?php endif; ?>
                        <script>
                            /*Inicializa o contador*/
                            let contadorDeLis = 0;

                            // Seleciona o elemento ul que contém os lis
                            const listaLis = document.getElementById('lista-lis');

                            // Cria um MutationObserver para observar alterações no conteúdo da lista
                            const observer = new MutationObserver(() => {
                                // Atualiza o contador quando houver uma alteração
                                contadorDeLis = listaLis.getElementsByTagName('li').length;
                                document.getElementById('contador').innerText = contadorDeLis;
                            });

                            // Configurações do MutationObserver
                            const config = { childList: true, subtree: true };

                            // Inicia a observação
                            observer.observe(listaLis, config);
                        </script>

                </ul>
              
            </div>
        </div>
       
        </div>
    </section>

<?php get_footer() ?>