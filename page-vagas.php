
  <?php 
    //Template name: Vagas
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
    <section class="s-hero-interna" id="ReturnToTop">
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
            <p>A Agência de Microcrédito Crecerto conta com diversas vagas em todas as suas filiais, confira abaixo nossas vagas em aberto, candidate-se no formulário ao final da página e venha fazer parte da nosso time:</p>
        </div>
    </section>

    <section class="s-cards-vagas">
        <div class="container">
            <div class="modal-formulario-de-vagas" id="modalFormularioVagas">
                <div class="overlay-modal-de-vagas" id="overlayModaldeVagas"></div>
                    <div class="formulario" id="form-trabalhe-conosco">
                        <?php echo do_shortcode( '[contact-form-7 id="ceb91ce" title="Trabalhe Conosco"]' ); ?>            
                    </div>
            </div>
            <ul class="cards-vagas">
                <?php if( have_rows('repeater_vaga') ): $i = 1; while ( have_rows('repeater_vaga') ) : the_row(); ?>
                    <li id="<?php echo $i ?>" class="card-vaga-individual">
                        <div class="nome-vaga">
                            <h3 class="teste-vaga"><?php the_sub_field('nome_vaga'); $i++; ?></h3>
                        </div>
                        
                        <div class="top-card-vaga">
                            <div class="cidade-vaga">
                                <h4><?php the_sub_field('cidade_vaga'); ?></h4>
                            </div>
                        </div>    
                        <div class="card-text">
                            <p><?php the_sub_field('informacoes_vaga');?>
                            </p>
                        </div>
                        <div class="footer-card-vaga">
                            <div class="botao-candidate-se">
                                <!--<a class="btn-primary btn-canditarse" style="background-color: #848c99; "href="">Candidatar a essa vaga</a>-->
                                <button class="btn-primary candidatarBtn">Candidatar a essa vaga</button>
                            </div>
                        </div>
                    </li>
                <?php endwhile; else : endif;?>
            </ul>
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
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-phone.svg" alt="">
                            <small>Central de Atendimento</small>
                            <strong>(49) 3030-1234</strong>
                        </a>
                    </li>
                    
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-mail.svg" alt="">
                            <small>E-mail</small>
                            <strong>contato@crecerto.org.br</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <!--<div class="formulario" id="form-trabalhe-conosco">
                <?php echo do_shortcode( '[contact-form-7 id="ceb91ce" title="Trabalhe Conosco"]' ); ?>            
            </div>-->
        </div>
    </section>

    <script>
        const botoesCandidatar = document.querySelectorAll('.candidatarBtn');

        botoesCandidatar.forEach(function(botao) {
            botao.addEventListener('click', function() {

                const nomeVaga = botao.closest("li").querySelector(".nome-vaga .teste-vaga").textContent;
                

                document.getElementById('vagaInput').value = nomeVaga;
            });
        });

        const modalFormularioVagas = document.getElementById("modalFormularioVagas");
        const overlayModaldeVagas = document.getElementById("overlayModaldeVagas");
        const botoesCandidatar2 = document.querySelectorAll('.candidatarBtn');

        botoesCandidatar2.forEach(function(botao) {
            botao.addEventListener('click', function() {
                modalFormularioVagas.style.opacity="1";
                modalFormularioVagas.style.zIndex="2000";
                document.body.style.overflow = 'hidden';
        })
        });

        overlayModaldeVagas.addEventListener('click', function() {
            modalFormularioVagas.style.opacity="0";
            modalFormularioVagas.style.zIndex="0";
            document.body.style.overflow = 'auto';
        })

    </script>

    <?php endwhile; else: endif; ?>

<?php get_footer() ?>