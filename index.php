<?php
    //Template name: Home
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <!-- Swiper -->
    <section class="s-slide-inicial swiper mySwiper">
        <div class="swiper-wrapper">
            <?php if( have_rows('repeater_slide_inicial') ): while ( have_rows('repeater_slide_inicial') ) : the_row(); ?>
            <div class="swiper-slide s-hero" style="background-image: url(<?php the_sub_field('imagem_slide'); ?>">
                <div class="container">
                        <!--<div class="social" data-aos="fade-left">
                            <ul>
                                <a href="#">
                                    <li data-aos="fade-up">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="icone-youtube">
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="icone-linkedin">
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="icone-facebook">
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="icone-instagram">
                                    </li>
                                </a>
                            </ul>
                        </div>-->
                    <div class="text">
                        <!--<p class="intro-1">Desenvolvendo o empreendedorismo</p>-->
                        <h1 data-aos="fade-up"><?php the_sub_field('titulo_principal_slide'); ?></h1>
                        <p data-aos="fade-up"><?php the_sub_field('texto_slide'); ?></p>
                        <a data-aos="fade-bottom" href="<?php the_sub_field('link_do_botao_do_slide'); ?>"><button class="btn-primary btn-simulacao"><?php the_sub_field('nome_do_botao_do_slide'); ?></button></a>
                    </div>
                </div>
            </div>
            <?php endwhile; else : endif;?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>

    <section class="s-estatisticas">
        <div class="container">
            <div class="box-info">
            <?php if( have_rows('repeater_estatisticas') ): while ( have_rows('repeater_estatisticas') ) : the_row(); ?>
                <div class="box-info-individual">
                    <div class="icone">
                        <img src="<?php the_sub_field('icone_estatistica'); ?>" alt="">
                    </div>
                    <div class="texto">
                        <h3 data-aos="fade-down"><?php the_sub_field('titulo_estatistica'); ?></h3>
                        <p data-aos="fade-up"><?php the_sub_field('texto_estatistica'); ?></p>
                    </div>
                </div>
                <?php endwhile; else : endif;?>

            </div>
        </div>
    </section>

    <section class="s-institucional-home">
        <div class="container">

        <img data-aos="fade-down" data-aos-offset="500" data-aos-duration="2000" src="<?php echo get_template_directory_uri() ?>/img/dots.svg" alt="dots">
            <div class="video-institucional-home" data-aos="fade-right">
                <button class="play js-open-modal" aria-label="play">
                    <div class="player">
                    </div>
                </button>
            </div>
            <div class="texto-institucional-home" data-aos="fade-left">
                <div class="text">
                    <span class="sub-titulo"><?php the_field ('subtitulo_institucional')?></span>
                    <h2 class="primary-title">
                        <?php the_field ('titulo_institucional')?>
                    </h2>
                        <p><?php the_field ('texto_institucional')?></p>
                </div>
                <a href="<?php echo get_permalink(get_page_by_path('Institucional'))?>"<button class="btn-primary js-open-modal">Saiba mais</button></a>
            </div>
        </div>
    </section>

    <!--<section class="s-solucoes">
        <div class="container">
        <img src="<?php echo get_template_directory_uri() ?>/img/dots-yellow.svg" alt="dots" data-aos="fade-down" data-aos-offset="500" data-aos-duration="2000">

                <div class="cards-solucoes" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <ul>
                        <li class="card-inicial">
                            <span class="sub-titulo">Linhas de Crédito</span>
                            <h2>Conheça nossas <br>soluções</h2>
                            <p>Selecione uma linha de crédito para obter maiores detalhes:</p>
                        </li>

                        <?php if( have_rows('repeater_linha_de_credito') ): while ( have_rows('repeater_linha_de_credito') ) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field ('link_destino')?>">
                                        <div class="icon">
                                            <?php if( get_sub_field('condicao_da_imagem_das_linhas_de_credito') ): ?>
                                                <img src="<?php echo the_sub_field ('icone_linha_de_credito')?>" alt="<?php the_sub_field('nome_da_linha_de_credito')?>">
                                            <?php endif; ?>
                                        </div>
                                        <?php if( get_sub_field('condicao_do_titulo_das_linhas_de_credito') ): ?>
                                            <h4><?php the_sub_field ('nome_da_linha_de_credito')?></h4>
                                        <?php endif; ?>
                                    <p><?php the_sub_field ('breve_descricao_da_linha_de_credito')?></p>
                                </a>
                            </li>
                            <?php endwhile; else : endif;?>
                        <a href="">
                            <li class="card-final">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icon-saque.svg" alt="icone-saque">
                                </div>
                                <h4><span>Veja todas nossas<br> </span>
                                    linhas de crédito</h4>
                                <p>Veja todas as linhas de crédito que a Crecerto tem para você.</p>
                                <a href="<?php echo get_permalink(get_page_by_path('linhas-de-credito'))?>"><button class="btn-primary">Ver todas</button></a>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </section>-->

    <section style="border-top: 1px solid #f2f2f2 ?>; border-top: 1px solid #f2f2f2" class="swiper swiperLinhasCredito">
        <div class="swiper-wrapper">
        <?php if (have_rows('repeate_linha_de_credito_novo_teste')) : $i = 1; while (have_rows('repeate_linha_de_credito_novo_teste')) : the_row(); ?>
            <section class="swiper-slide" style="background-color: <?php the_sub_field('acf_background_color_do_slide') ?>">
                 <div class="container">
                        <div class="left" style="background-color: <?php the_sub_field('acf_background_color_do_slide') ?>">
                            <div class="subtitulo-top" style="border: 1px solid <?php the_sub_field('acf_cor_de_destaque_do_slide') ?>;">
                                <p style="color: <?php the_sub_field('acf_cor_do_texto_do_slide') ?>">Linhas de crédito</p>
                            </div>
                            <div class="logo-linha-de-credito">
                                <img src="<?php the_sub_field('acf_logo_da_linha_de_credito') ?>" alt="">
                            </div>
                            <div class="info-one">
                                <h4 class="title-txt-linha-de-credito" style="color: <?php the_sub_field('acf_cor_de_destaque_do_slide') ?>"><?php the_sub_field('acf_titulo_do_primeiro_texto_da_linha_de_credito') ?></h4>
                                <p style="color: <?php the_sub_field('acf_cor_do_texto_do_slide') ?>"><?php the_sub_field('acf_primeiro_texto_da_linha_de_credito') ?></p>
                            </div>
                            <div class="info-two">
                                <h4 class="title-txt-linha-de-credito" style="color: <?php the_sub_field('acf_cor_de_destaque_do_slide') ?>"><?php the_sub_field('acf_titulo_do_segundo_texto_da_linha_de_credito') ?></h4>
                                <p style="color: <?php the_sub_field('acf_cor_do_texto_do_slide') ?>"><?php the_sub_field('acf_segundo_texto_da_linha_de_credito') ?>
                                </p>
                            </div>
                            <a class="btn-primary" style="border: none; color: <?php the_sub_field('acf_background_color_do_slide') ?> !important; background-color: <?php the_sub_field('acf_cor_de_destaque_do_slide') ?>" href="<?php the_sub_field('acf_link_do_botao_do_topo_da_sessao_linha_de_credito2')?>">Saiba Mais</a>


                        </div>
                        <div class="right">
                            <img src="<?php the_sub_field('acf_imagem_da_linha_de_credito') ?>" alt="">
                        </div>
                 </div>
            </section>
        <?php endwhile; else : endif;?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>



    <section class="s-historias-que-inspiram">
        <div class="container">
            <img class="dots" data-aos="fade-down" data-aos-offset="500" data-aos-duration="2000" src="<?php echo get_template_directory_uri() ?>/img/dots.svg" alt="dots">
            <div class="top-texto" id="topTextoHistorias" data-aos="fade-right">
                    <div class="titulos">
                        <span class="sub-titulo"><?php the_field('acf_subtitulo_cases_de_sucesso'); ?></span>
                        <h2 class="primary-title"><?php the_field('acf_titulo_cases_de_sucesso'); ?></h2>
                    </div>

                    <div class="infos">
                        <p><?php the_field('acf_texto_cases_de_sucesso'); ?></p>
                    </div>

                    <a href="<?php bloginfo('url')?>/historias-que-inspiram/" class="btn-primary">Ver mais histórias</a>
            </div>
            <div class="historias">
                <div class="modal-inicial-historias" id="modanicialHistorias">
                    <div class="video-clikado" id="videoClikado">

                    </div>
                </div>
                <ul>
                <?php if( have_rows('acf_repeater_cases_historias_que_inspiram') ): while ( have_rows('acf_repeater_cases_historias_que_inspiram') ) : the_row(); ?>
                    <li>
                        <div class="video">
                            <iframe class="iframe-video" src="https://www.youtube.com/embed/<?php the_sub_field('acf_link_video_case_historia_que_inspiram'); ?>?rel=0&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" data-gtm-yt-inspected-10="true"></iframe>
                            <img class="image" src="<?php the_sub_field('acf_imagem_de_capa_da_historia'); ?>" alt="">
                            <button class="btn-play-video"><i class="fa-regular fa-circle-play" style="color: #fbaa03;"></i></button>
                        </div>
                        <h3><?php the_sub_field('acf_titulo_do_case'); ?></h3>
                        <p><?php the_sub_field('acf_texto_inicia_do_case'); ?></p>
                    </li>
                <?php endwhile; else : endif;?>
                </ul>
            </div>
        </div>
    </section>


    <?php include(TEMPLATEPATH .'/includes/session-faca-uma-simulacao.php') ?>


    <section class="s-blog">
        <div class="container">
            <div class="img-dots">
                <img src="<?php echo get_template_directory_uri() ?>/img/dots_secondary.svg" alt="dots" data-aos="fade-down" data-aos-offset="500" data-aos-duration="2000">
            </div>
            <span class="sub-titulo">BLOG</span>
            <div class="titulo-link">
                <div class="titulo"  data-aos="fade-right">
                    <h2 class="primary-title">
                        Veja as últimas notícias<br>
                        do nosso blog
                    </h2>
                </div>
                <div class="link-historias" data-aos="fade-left">
                <a href="<?php echo get_option("siteurl"); ?>/noticias" class="btn-primary">Visitar Blog</a>
                </div>
            </div>
            <ul data-aos="fade-up">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'order' => 'DESC',
                );
                $category_query = new WP_Query( $args );
                if ($category_query->have_posts()): while ($category_query->have_posts()) : $category_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="img-noticia">
                            <?php the_post_thumbnail('post-default');?>
                            </div>
                            <div class="corpo-card-post">
                                <h5><?php the_title();?></h5>
                                <p><?php the_excerpt();?></p>
                                <a href="<?php the_permalink(); ?>" class="btn">Saiba Mais <img src="<?php echo get_template_directory_uri() ?>/img/arrow-double-btn.svg" alt=""></a>
                            </div>
                        </a>
                    </li>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
					<p><?php _e( 'Desculpe, essa categoria não tem notícias.' ); ?></p>
					<?php endif; ?>
        </div>
    </section>


    <?php include(TEMPLATEPATH .'/includes/session-encontre-a-filial.php') ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<?php endwhile; else: endif; ?>

<?php get_footer() ?>
