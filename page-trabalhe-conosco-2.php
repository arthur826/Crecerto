
  <?php 
    //Template name: Trabalhe Conosco
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
<section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Trabalhe Conosco</p>
                <h2>Vagas</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    

    <section class="s-intro-transparencia">
        <div class="container">
            <p>A Agência de Microcrédito Crecerto conta com diversas vagas em todas as suas filiais, confira abaixo nossas vagas em aberto, candidate-se e venha fazer parte da nosso time:</p>
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
                            <a class="btn-primary" style="background-color: #848c99; "href="#">Candidatar a essa vaga</a>
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
                    <h2>Faça parte da nossa equipe</h2>
                    <p>Preencha o formulário ao lado e envie seu currículo, novas ideias sempre são bem vindas. </p>
                </div>
                <ul class="info">
                    <li>
                        <a href="tel:5549991834052">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-phone.svg" alt="">
                            <small>Central de Atendimento</small>
                            <strong>(49) 99183-4052</strong>
                            <strong>(49) 3444-8410</strong>
                        </a>
                    </li>
                    
                    <li>
                        <a href="mailto:atendimento@crecerto.org.br">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-mail.svg" alt="">
                            <small>E-mail</small>
                            <strong>trabalheconosco@crecerto.org.br</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="formulario">
            <?php echo do_shortcode( '[contact-form-7 id="190" title="Trabalhe Conosco"]' ); ?>            
            </div>
        </div>
    </section>

    <?php endwhile; else: endif; ?>

<?php get_footer() ?>