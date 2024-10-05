
  <?php 
    //Template name: Transparência
    ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
<section class="s-hero-interna" id="ReturnToTop">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Oportunidades</p>
                <h2>Transparência</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="s-intro-transparencia">
        <div class="container">
            <p>A Agência de Microcrédito Crecerto cumpre sua obrigação social de prestar informações sobre seu desempenho econômico e balanço social. A prestação de contas é considerada um instrumento fundamental para a transparência no processo de gestão empresarial, especialmente em organizações típicas do terceiro setor.</p>
        </div>
    </section>

    

    <?php if( have_rows('repeater_transparencia') ): while ( have_rows('repeater_transparencia') ) : the_row(); ?>
    <section class="s-cards-transparencia">
        <div class="container">
        
            <div class="nome-tipo-documento">
                <h2><?php the_sub_field('nome_tipo_documento'); ?></h2>
            </div>
            <div class="cards-documentos">
            <?php if( have_rows('repeater_documento') ): while ( have_rows('repeater_documento') ) : the_row(); ?>
            <a target="_blank" href="<?php the_sub_field('upload_do_documento'); ?>">
                <div class="card-documento-individual">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-pdf.svg" alt="">
                    </div>
                    <div class="nome-documento">
                        <h3><?php the_sub_field('titulo_documento'); ?></h3>
                    </div>
                </div>
            </a>
                <?php endwhile; else : endif;?>
        </div>
    </section>
    <?php endwhile; else : endif;?>
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>