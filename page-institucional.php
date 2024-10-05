<?php 
    //Template name: Institucional
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1"><?php the_field ('subtitulo_cabecalho_quem_somos')?></p>
                <h2><?php the_field ('titulo_cabecalho')?></h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="s-institucional">
        <div class="container">
            <div class="texto-institucional">
                <div class="text">
                    <span class="sub-titulo"><?php the_field ('subtitulo_quem_somos')?></span>
                    <h2 class="primary-title">
                        Conheça um pouco sobre nossa história, atuação e impactos do microcrédito
                    </h2>
                    <p><?php the_field ('texto_quem_somos')?></p>
                </div>
            </div>
            <div class="video-institucional">
                <button class="play js-open-modal" data-video-id="YLxH-Bv3wI4" aria-label="play">
                    <div class="player">
                    </div>
                </button>
                <!--<video src="/video/filme_vinhetas.mp4">
                </video>-->
            </div>
        </div>
    </section>

    <section class="s-origem-microcredito" id="origem-microcredito">
        <div class="container">
            <div class="imagem-direita">
            <img src="<?php echo the_field ('imagem_historia_do_microcredito')?>" alt="historia-microcredito">
            </div>
            <div class="texto-institucional">
                <div class="text">
                    <span class="sub-titulo"><?php the_field ('subtitulo_historia_do_microcredito')?></span>
                    <h2 class="primary-title">
                    <?php the_field ('titulo_historia_do_microcredito')?>
                    </h2>
                    <p><?php the_field ('texto_historia_do_microcredito')?></p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="s-nosso-objetivo" id="nosso-objetivo">
        <div class="container">
            <div class="texto-institucional">
                <div class="text">
                    <span class="sub-titulo">
                        <?php the_field ('subtitulo_nosso_objetivo')?></span>
                    <h2 class="primary-title">
                        <?php the_field ('titulo_nosso_objetivo')?>
                    </h2>
                    <p><?php the_field ('texto_nosso_objetivo')?></p>
                </div>
            </div>
            <div class="imagem-direita">
            <img src="<?php echo the_field ('imagem_nosso_objetivo')?>" alt="img-objetivos">
             </div>
        </div>
    </section>

    <section class="s-impactos-gerados" id="impactos-gerados">
        <div class="container">
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                        <?php the_field ('titulo_impactos_gerados')?>
                    </h2>
                    <p><?php the_field ('texto_impactos_gerados')?></p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="s-missao" id="nossa-missao-visao">
        <div class="container">
            <div class="cards-solucoes-institucional">
                <ul>
                    <?php 
                    if( have_rows('missao_visao_e_valores') ):
                        while( have_rows('missao_visao_e_valores') ) : the_row();
                    ?>
                    <li>
                        <h4><?php the_sub_field ('titulo_missao')?></h4>
                        <p><?php the_sub_field ('texto_missao')?></p>
                    </li>
                    <li>
                        <h4><?php the_sub_field ('titulo_visao')?></h4>
                        <p><?php the_sub_field ('texto_visao')?></p>
                    </li>
                    <li>
                        <h4><?php the_sub_field ('titulo_valores')?></h4>
                        <p><?php the_sub_field ('texto_valores')?></p>
                    </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="s-conselho-administrativo" id="conselho-administrativo">
        <div class="container">
            <div class="cards-solucoes-adm">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-conselho-diretor.svg" alt="icone-conselho-diretor">
                        </div>
                        <h4>Conselho Diretor</h4>
                        <ul>
                            <?php 
                            if( have_rows('membros_conselhos') ):
                                while( have_rows('membros_conselhos') ) : the_row();
                            ?>
                                <li><strong>Presidente: </strong><?php the_sub_field ('presidente')?></li>
                                <li><strong>Vice-Presidente: </strong><?php the_sub_field ('vice-presidente')?></li>
                                <?php if( have_rows('repeater_demais_conselheiros_diretores') ): while ( have_rows('repeater_demais_conselheiros_diretores') ) : the_row(); ?>
                                    <li><?php the_sub_field ('nome_do_membro_conselho_diretor')?></li>
                                <?php endwhile; else : endif;?>
                            <?php
                            endwhile;
                            endif;
                            ?>
                        </ul>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icone-direcao.svg" alt="icone-diretor">
                        </div>
                        <h4>Direção</h4>
                        <?php 
                            if( have_rows('membros_conselhos') ):
                                while( have_rows('membros_conselhos') ) : the_row();
                            ?>
                                <p><strong>Diretor Administrativo Financeiro: </strong><?php the_sub_field ('diretor_admininstrativo')?></p>
                                <p><strong>Diretor Comercial: </strong><?php the_sub_field ('diretor_comercial')?></p>
                        <?php
                                endwhile;
                            endif;
                            ?>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-conselho-fiscal.svg" alt="icone-conselho-fiscal">
                        </div>
                        <h4>Conselho Fiscal</h4>
                        <ul>
                            <?php 
                            if( have_rows('membros_conselhos') ):
                                while( have_rows('membros_conselhos') ) : the_row();
                            ?>
                                <?php if( have_rows('repeater_membros_conselho_fiscal') ): while ( have_rows('repeater_membros_conselho_fiscal') ) : the_row(); ?>
                                    <li><?php the_sub_field ('nome_do_membro_conselho_fiscal')?></li>
                                <?php endwhile; else : endif;?>
                            <?php
                            endwhile;
                            endif;
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <?php include(TEMPLATEPATH .'/includes/session-faca-uma-simulacao.php') ?>
    <?php include(TEMPLATEPATH .'/includes/session-encontre-a-filial.php') ?>

    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>