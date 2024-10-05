
  <?php 
    //Template name: Trabalhe Conosco
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
<section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1"><?php the_field ('subtitulo_trabalhe_conosco')?></p>
                <h2><?php the_field ('titulo_pagina_trabalhe_conosco')?></h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    

    <section class="s-intro-transparencia">
        <div class="container">
            <p><?php the_field ('texto_vagas')?></p>
        </div>
    </section>

    <section class="s-cards-vagas">
        <div class="container">
            <?php if( have_rows('repeater_vaga') ): $i = 1; while ( have_rows('repeater_vaga') ) : the_row(); ?>
            <div class="cards-vagas">
                <div id="<?php echo $i ?>" class="card-vaga-individual">
                    <div class="nome-vaga">
                        <h3><?php the_sub_field('nome_vaga'); $i++; ?></h3>
                    </div>
                    
                    <div class="top-card-vaga">
                        <div class="cidade-vaga">
                            <h3><?php the_sub_field('cidade_vaga'); ?></h3>
                        </div>
                    </div>    
                    <div class="card-text">
                        <p><?php the_sub_field('informacoes_vaga');?>
                        </p>
                    </div>
                    <div class="footer-card-vaga">
                        <div class="botao-candidate-se">
                            <a class="btn-primary" style="background-color: #848c99; "href="/trabalhe-conosco/#form-trabalhe-conosco">Candidatar a essa vaga</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; else : endif;?>
            </div>
        </div>
    </section>

    <section class="s-trabalhe-conosco">
        <div class="container">
            <div class="text">
                <div class="title">
                    <h2><?php the_field ('titulo_principal_trabalhe_conosco')?></h2>
                    <p><?php the_field ('texto_principal_trabalhe_conosco')?></p>
                </div>
                <ul class="info">
                    <li>
                        <a href="tel:5549991834052">
                            <img src="<?php echo the_field ('icone_caixa_central_de_atendimento')?>" alt="icone-caixa-central-atendimento">
                            <small><?php the_field ('titulo_caixa_central_de_atendimento_trabalhe_conosco')?></small>
                            <strong><?php the_field ('numero_de_telefone_1_trabalhe_conosco')?></strong>
                            <strong><?php the_field ('numero_de_telefone_2_trabalhe_conosco')?></strong>
                        </a>
                    </li>
                    
                    <li>
                        <a href="mailto:atendimento@crecerto.org.br">
                        <img src="<?php echo the_field ('icone-caixa-email_trabalhe_conosco')?>" alt="icone-caixa-email">                            
                            <small><?php the_field ('titulo_caixa_e-mail_trabalhe_conosco')?></small>
                            <strong><?php the_field ('e-mail_trabalhe_conosco')?></strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="formulario" id="form-trabalhe-conosco">
            <?php echo do_shortcode( '[contact-form-7 id="190" title="Trabalhe Conosco"]' ); ?>            
            </div>
        </div>
    </section>

    <?php endwhile; else: endif; ?>

<?php get_footer() ?>