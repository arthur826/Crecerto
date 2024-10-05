<?php 
    //Template name: Linhas de Crédito Interna
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Linha de Crédito</p>
                <h2><?php the_title()?></h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>

    
    <!-- Desktop-->   
    <section class="s-solucao-interna-desktop s-oque-e-desktop img-direita">
        <div class="container">
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                    O que é o <?php the_title()?>?
                    </h2>
                    <p><?php the_field ('texto_o_que_e')?></p>
                </div>
            </div>
            <div class="imagem">
            <img src="<?php echo get_template_directory_uri() ?>/img/oque-e.svg" alt="icone-linhas-de-crédito">
             </div>
        </div>
    </section>

    <section class="s-solucao-interna-desktop s-para-que-serve-desktop img-esquerda">
        <div class="container">
            <div class="imagem">
            <img src="<?php echo get_template_directory_uri() ?>/img/para-que-serve.svg" alt="icone-linhas-de-crédito">
             </div>
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                    Para que serve o <?php the_title()?>?
                    </h2>
                    <p><?php the_field ('texto_para_que_serve')?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="s-solucao-interna-desktop s-como-solicitar-desktop img-direita">
        <div class="container">
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                    Como solicitar o <?php the_title()?>?
                    </h2>
                    <p><?php the_field ('texto_como_solicitar')?></p>
                </div>
            </div>
            <div class="imagem">
            <img src="<?php echo get_template_directory_uri() ?>/img/como-solicitar.svg" alt="icone-linhas-de-crédito">
             </div>
        </div>
    </section>

    <!-- Mobile-->
    <section class="s-solucao-interna-mobile s-oque-e-mobile img-esquerda">
        <div class="container">
            <div class="imagem">
            <img src="<?php echo get_template_directory_uri() ?>/img/oque-e.svg" alt="icone-linhas-de-crédito">
             </div>
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                    O que é o <?php the_title()?>?
                    </h2>
                    <p><?php the_field ('texto_o_que_e')?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="s-solucao-interna-mobile s-para-que-serve-mobile img-esquerda">
        <div class="container">
            <div class="imagem">
            <img src="<?php echo get_template_directory_uri() ?>/img/para-que-serve.svg" alt="icone-linhas-de-crédito">
             </div>
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                    Para que serve o <?php the_title()?>?
                    </h2>
                    <p><?php the_field ('texto_para_que_serve')?></p>
                </div>
            </div>
        </div>
    </section>

    

    <section class="s-solucao-interna-mobile s-como-solicitar-mobile img-esquerda">
        <div class="container">
            <div class="imagem">
            <img src="<?php echo get_template_directory_uri() ?>/img/como-solicitar.svg" alt="icone-linhas-de-crédito">
             </div>
            <div class="texto-institucional">
                <div class="text">
                    <h2 class="primary-title">
                    Como solicitar o <?php the_title()?>?
                    </h2>
                    <p><?php the_field ('texto_para_que_serve')?></p>
                </div>
            </div>
        </div>
    </section>
    
    

<!--    <section class="s-vantagens">
        <div class="container">
                <div class="cards-solucoes-vantagens">
                    <ul>
                        <li>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icon-saque.svg" alt="icone-saque">
                            </div>
                            <h4>Equipe Especializada</h4>
                            <p>A Crecerto conta com uma equipe de especialistas em empréstimos para empreendedores formais e informais.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icon-saque.svg" alt="icone-saque">
                            </div>
                            <h4>Vamos até você</h4>
                            <p>Temos um atendimento personalizado e diferenciado, nosso agente de crédito vai até você.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icon-saque.svg" alt="icone-saque">
                            </div>
                            <h4>Crédito Sem Burocracia</h4>
                            <p>Com a Crecerto , dá certo. e Você tem tudo para crescer. Sem abertura de contas ou burocracia.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>-->

    <?php include(TEMPLATEPATH .'/includes/session-depoimentos.php') ?>

    <div class="s-espacamento"></div>
    
    <?php include(TEMPLATEPATH .'/includes/session-encontre-a-filial.php') ?>

    
    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>