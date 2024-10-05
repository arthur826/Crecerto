
<?php 
    //Template name: Cadastro Social
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Iniciativa social</p>
                <h2>Cadastre seu projeto</h2>
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
                    <h2>Estamos sempre disponíveis para você.</h2>
                    <p>Envie para nós suas críticas, dúvidas ou sugestões.</p>
                </div>
                <ul class="info">
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-phone.svg" alt="">
                            <small>Central de Atendimento</small>
                            <strong>(49) 99183-4052</strong>
                            <strong>(49) 3444-8410</strong>
                        </a>
                    </li>
                    
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-mail.svg" alt="">
                            <small>E-mail</small>
                            <strong>atendimento@crecerto.org.br</strong>
                        </a>
                    </li>
                </ul>
                <div class="fale-via-whatsapp">
                    <p>ou fale conosco via whatsapp</p>
                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=5549991834052&text&app_absent=0" class="btn-primary btn-simulacao">Fale com nossa equipe</a>
                </div>
            </div>
            <div class="formulario">
            <?php echo do_shortcode( '[contact-form-7 id="2951" title="Cadastro_Social"]' ); ?>            
            </div>
        </div>
    </section>

    
<?php endwhile; else: endif; ?>

<?php get_footer() ?>