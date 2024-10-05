<?php
    //Template name: Filiais
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Unidades de Atendimento</p>
                <h2>Encontre a Crecerto mais perto de você</h2>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-small-down.svg" alt="icone-linhas-de-crédito">
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="s-hero-filiais">
        <div class="container">
            <div class="topo">
                <div class="titulos">
                    <h2>Selecione o Estado: </i></h2>
                    <select name="meuSeletorEstado" id="meuSeletorEstado">
                        <option value="Todos">Todos</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Paraná">Paraná</option>
                    </select>
                </div>
                <div class="cidades RS">
                    <ul class="seletor-RS" id="seletorCidade-RS">
                        <?php if( have_rows('repeater_informacoes_das_filiais_do_rio_grande_do_sul') ): while ( have_rows('repeater_informacoes_das_filiais_do_rio_grande_do_sul') ) : the_row(); ?>
                            <h5>Rio Grande do Sul</h5>
                            <li><button class="btn-cidades"><?php the_sub_field('nome_da_cidade_interno_rs'); ?></button></li>
                        <?php endwhile; else : endif;?>
                    </ul>
                </div>
                <div class="cidades PR">
                    <ul class="seletor-PA"  id="seletorCidade-PA">
                        <?php if( have_rows('repeater_informacoes_das_filiais_do_parana') ): while ( have_rows('repeater_informacoes_das_filiais_do_parana') ) : the_row(); ?>
                            <h5>Paraná</h5>
                            <li><button class="btn-cidades"><?php the_sub_field('nome_da_cidade_interno_pr'); ?></button></li>
                        <?php endwhile; else : endif;?>
                    </ul>
                </div>
                <div class="cidades SC">
                    <ul class="seletor-SC"  id="seletorCidade-SC">
                        <?php if( have_rows('repeater_informacoes_das_filiais_do_santa_catarina') ): while ( have_rows('repeater_informacoes_das_filiais_do_santa_catarina') ) : the_row(); ?>
                            <h5>Santa Catarina</h5>
                            <li><button class="btn-cidades"><?php the_sub_field('nome_da_cidade_interno_sc'); ?></button></li>
                        <?php endwhile; else : endif;?>
                    </ul>
                </div>
            </div>
            <div id="infos" class="infos">
                <ul class="filiais">
                        <?php if( have_rows('repeater_informacoes_das_filiais_do_rio_grande_do_sul') ): while ( have_rows('repeater_informacoes_das_filiais_do_rio_grande_do_sul') ) : the_row(); ?>
                            <li class="infos-cidade">
                                <div class="content">
                                    <div class="mapa">
                                        <img class="imagem-crecerto-home" src="<?php echo get_template_directory_uri() ?>/img/img-social-crecerto.jpg" alt="">
                                        <?php the_sub_field('mapa_da_localizacao_da_agencia_rs'); ?>
                                    </div>
                                    <div class="right">
                                        <div class="title">
                                            <span class="legenda-da-agencia"><?php the_sub_field('repeater_defina_a_legenda_da_agencias_rs'); ?></span>
                                            <h3><?php the_sub_field('nome_da_cidade_interno_rs'); ?></h3>
                                        </div>
                                        <ul>
                                            <li><?php the_sub_field('repeate_infos_de_contato_da_agencia'); ?></li>
                                        </ul>
                                        <div class="botoes">
                                            <a target="_blank" href="<?php the_sub_field('acf_link_do_botao_de_contato_rs'); ?>"><button class="btn-contato">Entre em contato</button></a>
                                            <a target="_blank" href="<?php the_sub_field('acf_link_do_botao_de_ver_rota_rs'); ?>"><button class="btn-maps">Ver Rota</button></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; else : endif;?>

                        <?php if( have_rows('repeater_informacoes_das_filiais_do_parana') ): while ( have_rows('repeater_informacoes_das_filiais_do_parana') ) : the_row(); ?>
                            <li class="infos-cidade">
                                <div class="content">
                                    <div class="mapa">
                                        <img class="imagem-crecerto-home" src="<?php echo get_template_directory_uri() ?>/img/img-social-crecerto.jpg" alt="">
                                        <?php the_sub_field('mapa_da_localizacao_da_agencia_pr'); ?>
                                    </div>
                                    <div class="right">
                                        <div class="title">
                                            <span class="legenda-da-agencia"><?php the_sub_field('repeater_defina_a_legenda_da_agencias_pr'); ?></span>
                                            <h3><?php the_sub_field('nome_da_cidade_interno_pr'); ?></h3>
                                        </div>
                                        <ul>
                                            <li><?php the_sub_field('repeate_infos_de_contato_da_agencia_pr'); ?></li>
                                        </ul>
                                        <div class="botoes">
                                            <a target="_blank" href="<?php the_sub_field('acf_link_do_botao_de_contato_pr'); ?>"><button class="btn-contato">Entre em contato</button></a>
                                            <a target="_blank" href="<?php the_sub_field('acf_link_do_botao_de_ver_rota_pr'); ?>"><button class="btn-maps">Ver Rota</button></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; else : endif;?>

                        <?php if( have_rows('repeater_informacoes_das_filiais_do_santa_catarina') ): while ( have_rows('repeater_informacoes_das_filiais_do_santa_catarina') ) : the_row(); ?>
                            <li class="infos-cidade">
                                <div class="content">
                                    <div class="mapa">
                                        <img class="imagem-crecerto-home" src="<?php echo get_template_directory_uri() ?>/img/img-social-crecerto.jpg" alt="">
                                        <?php the_sub_field('mapa_da_localizacao_da_agencia_sc'); ?>
                                    </div>
                                    <div class="right">
                                        <div class="title">
                                            <span class="legenda-da-agencia"><?php the_sub_field('repeater_defina_a_legenda_da_agencias_sc'); ?></span>
                                            <h3><?php the_sub_field('nome_da_cidade_interno_sc'); ?></h3>
                                        </div>
                                        <ul>
                                            <li><?php the_sub_field('repeate_infos_de_contato_da_agencia_sc'); ?></li>
                                        </ul>
                                        <div class="botoes">
                                            <a target="_blank" href="<?php the_sub_field('acf_link_do_botao_de_contato_sc'); ?>"><button class="btn-contato">Entre em contato</button></a>
                                            <a target="_blank" href="<?php the_sub_field('acf_link_do_botao_de_ver_rota_sc'); ?>"><button class="btn-maps">Ver Rota</button></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; else : endif;?>
                </ul>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function(){
    $(".infos-cidade").each(function(){
        var spanValue = $(this).find(".title span").text().trim();
        var imagemCrecertoHome =$(this).find(".content .mapa img");

        if(spanValue === "Representantes" || spanValue === "Home Office") {
            $(this).find(".btn-maps").css("display", "none");
            $(this).find(".botoes").css("gap", "0");
            $(this).find(".imagem-crecerto-home").css("display", "block");
        }

        if(spanValue === "Matriz") {
            $(this).find(".legenda-da-agencia").css("color", "#3E9000");
        }
        if(spanValue === "Filial") {
            $(this).find(".legenda-da-agencia").css("color", "#E80908");
        }
        if(spanValue === "Home Office") {
            $(this).find(".legenda-da-agencia").css("color", "#FAB528");
        }
        if(spanValue === "Representantes") {
            $(this).find(".legenda-da-agencia").css("color", "#088CEF");
        }
    });
});
</script>

            </div>
        </div>
    </section>


<?php endwhile; else : endif;?>

<?php get_footer() ?>