
    <section class="s-encontre-a-crecerto">
        <div class="container">
            <div class="imagem-mapa" data-aos="zoom-in-right">
                <img src="<?php the_field ('acf_imagem_encontre_a_crecerto', 'options')?>">
            </div>
            <div class="texto-onde-estamos">
                <div class="text" data-aos="fade-down">
                    <span class="sub-titulo"><?php the_field ('acf_subtitulo_onde_estamos', 'options')?></span>
                    <h2 class="primary-title">
                        <?php the_field ('acf_titulo_onde_estamos', 'options')?>
                    </h2>
                    <p><?php the_field ('acf_texto_onde_estamos', 'options')?>
                    </p>
                </div>
                <a class="btn-primary" data-aos="fade-up" href="<?php the_field ('acf_link_do_botao_ver_unidades', 'options')?>"><?php the_field ('acf_texto_do_botao_ver_unidades', 'options')?></a>
            </div>
        </div>
    </section>

