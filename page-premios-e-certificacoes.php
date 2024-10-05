
  <?php 
    //Template name: Prêmios e Certificações
    ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
<section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Reconhecimento e Credibilidade</p>
                <h2>Prêmios e Certificações</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--<section class="s-premiacoes">
        <div class="container">            
            <p>A Agência de Microcrédito Crecerto conta com a confiança dos clientes e a credibilidade dos nossos serviços e soluções são evidenciados por meio das certificações e prêmios que recebemos ao dos nossos mais de 20 anos de história.</p>

            <h2 class="primary-title">Premiações</h2>
        <?php if( have_rows('repeater_premiacao') ): while ( have_rows('repeater_premiacao') ) : the_row(); ?>
            <div class="card-premios">
                <div class="card-premio-left">
                    <h4><?php the_sub_field('nome_do_premio'); ?></h4>
                    <p><?php the_sub_field('breve_descricao_sobre_o_premio'); ?></p>
                </div>
                <div class="card-premio-right">
                    <img src="<?php the_sub_field('imagem_premio'); ?>" alt="">
            </div>
        </div>
        <?php endwhile; else : endif;?>

    </section>-->

    <section class="s-certificacao">
        <div class="container">   
            <h2 class="primary-title">Certificações</h2>
            <?php if( have_rows('repeater_certificacao') ): while ( have_rows('repeater_certificacao') ) : the_row(); ?>
            <div class="card-certificacao">
                <div class="card-certificacao-left">
                    <h4><?php the_sub_field('nome_da_certificacao'); ?></h4>
                    <p><?php the_sub_field('breve_descricao_sobre_a_certificacao'); ?></p><a data-aos="fade-bottom" target="_blank" href="<?php the_sub_field('link_certificado'); ?>"><button class="btn-primary">Ver Certificado</button></a>
                </div>
                <div class="card-certificacao-right">
                    <img src="<?php the_sub_field('selo_imagem_certificacao'); ?>" alt="">
            </div>
        </div>
        <?php endwhile; else : endif;?>
    </section>


    <?php endwhile; else: endif; ?>

<?php get_footer() ?>