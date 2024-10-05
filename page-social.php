<?php 
    //Template name: Social
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="s-hero-interna">
            <div class="overlay">
            <div class="container">
                <div class="text">
                    <p class="intro-1">Compromisso com a comunidade</p>
                    <h2>Nossas Ações</h2>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                    </div>
                </div>
            </div>
            </div>
    </section>

        
    <section class="s-acoes-sociais">
            <div class="container">
                <ul>
                    <?php
                    $args = array(
                        'post_type' => 'acoes_sociais',
                        'posts_per_page' => 10,
                        'order' => 'ASC',
                    );
                    $category_query = new WP_Query( $args );
                    
                    $first_post = true; // Variável para rastrear o primeiro post
                    
                    if ($category_query->have_posts()) : while ($category_query->have_posts()) : $category_query->the_post(); ?>
                        <li <?php if ($first_post) echo 'class="acao-de-destaque"'; ?>>
                            <a href="<?php the_permalink(); ?>">
                                <div class="img-noticia">
                                    <?php the_post_thumbnail('post-default'); ?>
                                </div>
                                <div class="corpo-card-post">
                                    <!-- <?php $category = get_the_category(); ?>
                                    <span><?php echo $category[0]->cat_name; ?></span> -->
                                    <span class="post-social-destaque"><?php echo get_the_date('F j, Y'); ?></span>
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php the_excerpt(); ?> </p>
                                    <button class="btn-primary">Ler mais</button>
                                </div>
                            </a>
                        </li>
                        <?php
                        $first_post = false; // Marca o primeiro post como processado
                        endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e('Desculpe, essa categoria não tem notícias.'); ?></p>
                    <?php endif; ?>
                    
                    </div>
                </ul>
            </div>
    </section>

    <section class="s-form-cadastro-social">
            <div class="container">
                <div class="left-cadastro-social">
                <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-social.svg" alt="icone-linhas-de-crédito">
                    </div>
                <span class="sub-titulo">FAÇA ACONTECER COM A CRECERTO</span>
                    <h2>Cadastre aqui seu projeto social</h2>
                    <p>A Crecerto apoia diversos projetos sociais, se você ou sua empresa conta com um projeto social que necessita de apoio e/ou suporte para crescer, conta um pouco para nossa equipe.</p>
                    <p>Preencha o formulário ao lado e nos envie em anexo mais detalhes sobre seu projeto, analisaremos a viabilidade de apoiar seu projeto.</p>
                </div>
                <div class="right-cadastro-social">
                    <div class="formulario">
                        <?php echo do_shortcode( '[contact-form-7 id="2951" title="Cadastro_Social"]' ); ?>    
                    </div>
                </div>
            
            </div>
    </section>
        
    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>