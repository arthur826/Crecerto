<?php
    //Template name: Página Interna Noticias
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="s-hero-interna s-hero-single">
    <div class="overlay">
        <div class="container">
            <div class="text">
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="category-post" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                }
                ?>
                <h1 class="title-h1"><?php the_title(); ?></h1>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="s-post-interno">
        <div class="container">
            <div class="post-content">
                <div class="post-text">
                    <p><?php the_content();
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?></p>
                </div>
            </div>
        </div>
    </section>


    <?php endwhile; else: endif; ?>

<?php get_footer() ?>