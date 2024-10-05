<?php 
    //Template name: Histórias que Inspiram
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Cases de Sucesso</p>
                <h2>Histórias que inspiram</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--<section class="s-frase-inicial">
    </section>-->

    <?php if (have_rows('repeater_historias')) : $i = 1; while (have_rows('repeater_historias')) : the_row(); ?>
        <section class="s-historias-que-inspiram-interno<?php echo ($i === 1) ? ' destacada' : ''; ?>" id="<?php the_sub_field('ancora_link'); ?>">
            <div class="container">
                    <div class="texto-institucional">
                        <div class="text">
                            <span class="sub-titulo">Histórias que inspiram #<?php echo $i; ?></span>
                            <h2 class="primary-title">
                            <?php the_sub_field('nome_historia');  $i++; ?>
                            </h2>
                            <p>
                            <?php the_sub_field('descricao_da_historia'); ?></p>
                        </div>
                    </div>
                    <div class="video-institucional">
                        <iframe src="https://www.youtube.com/embed/<?php the_sub_field('link_video_historia'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
            </div>
        </section>
    <?php endwhile; else : endif;?>


        <section class="s-mais-historias">
            <div class="container">
                <p class="texto-ver-mais">Para mais histórias visite nosso canal do Youtube</p>
                <a class="link-ver-mais" target="_blank" href="<?php the_field('acf_link_do_botao_ver_mais_historias'); ?>"><button class="btn-primary"><?php the_field('acf_texto_do_botao_ver_mais_historias'); ?></button></a>
            </div>
        </section>

    <!--<?php include(TEMPLATEPATH .'/includes/session-encontre-a-filial.php') ?>-->
    <?php include(TEMPLATEPATH .'/includes/session-faca-uma-simulacao.php') ?>


    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>