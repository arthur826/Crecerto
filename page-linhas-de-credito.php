<?php 
    //Template name: Linhas de Crédito
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Conheça todas as nossas</p>
                <h2>Linhas de Crédito</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="s-todas-linhas-de-credito">
        <div class="container">
            <div class="titulo-link">
                <div class="titulo">
                <h2>Qual a melhor linha de crédito para seu negócio?</h2>
            </div>
            <div class="link">
                <a href="#"><button class="btn-primary">Solicite seu crédito</button></a>
            </div>
                
            </div>
                <div class="cards-solucoes-linhas-de-credito">
                    <ul>
                        <?php if( have_rows('repeater_linha_de_credito', 5) ): while ( have_rows('repeater_linha_de_credito', 5) ) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field ('link_destino')?>">
                                    <div class="icon">
                                        <img src="<?php echo the_sub_field ('icone_linha_de_credito')?>" alt="icone-saque">
                                    </div>
                                    <h4><?php the_sub_field ('nome_da_linha_de_credito')?></h4>
                                    <p><?php the_sub_field ('breve_descricao_da_linha_de_credito')?></p>
                                </a>
                            </li>
                            <?php endwhile; else : endif;?>
                        <a href="">
                        </a>
                    </ul>
                </div>

        </div>

    </section>

    <?php endwhile; else: endif; ?>

<?php get_footer() ?>
