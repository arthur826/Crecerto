<!--<?php get_sidebar(); ?>
                        
                    
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 12,
                                'order' => 'DESC',
                            );
                            $category_query = new WP_Query( $args );
                            if ($category_query->have_posts()): while ($category_query->have_posts()) : $category_query->the_post(); ?>
                                <li class="post-noticia">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="img-noticia">
                                        <?php the_post_thumbnail('post-default');?>
                                        </div>
                                        <div class="corpo-card-post">
                                            <?php $category = get_the_category(); ?>
                                            <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                            <h5 class="title-post"><?php the_title();?></h5>
                                            <p><?php the_excerpt();?> </p>
                                            <span class="category-post"><?php echo $category[0]->cat_name; ?></span>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
        
                           <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                            <p><?php _e( 'Desculpe, essa categoria não tem notícias.' ); ?></p>
                            <?php endif; ?>
                        </ul>
                       

                        <?php echo do_shortcode('[ajax_load_more container_type="ul" post_type="post" posts_per_page="12" scroll="false" transition_container="false" button_label="Carregar mais" button_loading_label="Carregando Posts" button_done_label="Nada encontrado"]') ?>


                        document.addEventListener("DOMContentLoaded", function () {
    const GrupoDeCategorias = document.getElementById("seletorCategoria");
    const itemCategoria = GrupoDeCategorias.querySelectorAll("li");
    const InformacoesInternaBlog = document.querySelectorAll(".lista-posts .post-noticia");

    itemCategoria.forEach(function (botaoCategoria) {
        botaoCategoria.addEventListener("click", function () {
            const valorCat = botaoCategoria.textContent.trim();
            console.log(valorCat)
            
            InformacoesInternaBlog.forEach(function (infosBlog) {
                const nameCategory = infosBlog.querySelector(".category-post").textContent.trim();
                console.log(nameCategory)
                
                if (valorCat === nameCategory) {
                    infosBlog.style.display = "block";
                } else {
                    infosBlog.style.display = "none";
                }
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {

-->