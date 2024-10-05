
<?php 
    //Template name: Fale Conosco
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1"><?php the_field ('subtitulo_cabecalho')?></p>
                <h2><?php the_field ('titulo_cabecalho')?></h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="s-entre-em-contato">
        <div class="container">
            <div class="text">
                <div class="title">
                    <h2><?php the_field ('titulo_principal_fale_conosco')?></h2>
                    <p><?php the_field ('texto_principal_fale_conosco')?></p>
                </div>
                <ul class="info">
                    <li>
                        <a href="">
                            <img src="<?php echo the_field ('icone_caixa_central_de_atendimento')?>" alt="icone-central-de-atendimento">
                            <small><?php the_field ('titulo_caixa_central_de_atendimento')?></small>
                            <strong><?php the_field ('numero_de_telefone_1')?></strong>
                            <strong><?php the_field ('numero_de_telefone_2')?></strong>
                        </a>
                    </li>
                    
                    <li>
                        <a href="">
                            <img src="<?php echo the_field ('icone-caixa-email')?>" alt="icone-caixa-email">
                            <small><?php the_field ('titulo_caixa_e-mail')?></small>
                            <strong><?php the_field ('e-mail_fale_conosco')?></strong>
                        </a>
                    </li>
                </ul>
                <div class="fale-via-whatsapp">
                    <p><?php the_field ('texto_sessao_whatsapp')?></p>
                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php the_field ('fone_whatsapp')?>&text&app_absent=0" class="btn-primary btn-simulacao">Fale com nossa equipe</a>
                </div>
            </div>
            <div class="formulario">
            <?php echo do_shortcode( '[contact-form-7 id="43" title="Formulário de contato 1"]' ); ?>            
            </div>
        </div>
    </section>

    
<?php endwhile; else: endif; ?>

<?php get_footer() ?>