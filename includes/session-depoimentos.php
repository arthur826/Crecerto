<?php 
    //Template name: Depoimentos
?>




<div class="s-depoimentos">
    <div class="container">
        <div class="top-depoimentos">
            <div class="titulo-top">
            <span class="sub-titulo">Depoimentos</span>
            <h2>Quer saber o que nossos clientes falam sobre nós?</h2>
            </div>
            <p>O seu empreendimento pode ser o próximo a crescer com a ajuda da Crecerto.</p>
        </div>
        <!-- Swiper -->
        <div class="swiper depoimentosSwiper">
        <div class="swiper-wrapper">
        <?php
$args = array(
    'post_type' => 'depoimento',
    'posts_per_page' => -1,
    'order' => 'ASC',
);
$category_query = new WP_Query( $args );
if ($category_query->have_posts()): while ($category_query->have_posts()) : $category_query->the_post(); ?>
            <div class="swiper-slide">
                <div class="header-card-depoimento">
                    <p> <?php the_field ('descricao_do_depoimento')?></p>
                </div>
                <div class="footer-card-depoimento">
                    <div class="footer-left-card">
                        <div class="img-card">
                            <img src="<?php the_field ('imagem_cliente_ou_empresa')?>" alt="">
                        </div>
                        <div class="info-card">
                            <h4><?php the_field ('nome_cliente')?></h4>
                            <p><?php the_field ('cargo_empresa')?></p>
                        </div>
                    </div>
                    <div class="footer-right-card">
                        <img src="<?php echo get_template_directory_uri() ?>/img/aspas.svg" alt="icone-linhas-de-crédito">
                    </div>
                   
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php _e( 'Desculpe, essa categoria não tem notícias.' ); ?></p>
            <?php endif; ?>
            
           
            
            
            
           
        </div>
        <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

