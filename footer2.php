<footer>

<div class="modal" id="js-modal">
        <div class="overlay js-close-modal"></div>
        <div class="box" id="player">
            <script>
                // 2. This code loads the IFrame Player API code asynchronously.
                var tag = document.createElement('script');
          
                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
          
                // 3. This function creates an <iframe> (and YouTube player)
                //    after the API code downloads.
                var player;
                function onYouTubeIframeAPIReady() {
                  player = new YT.Player('player', {
                    height: '360',
                    width: '640',
                    videoId: '<?php the_field('video_institucional', 5); ?>',
                    events: {
                      'onReady': onPlayerReady,
                      'onStateChange': onPlayerStateChange,
                    }
                  });
                }
          
                // 4. The API will call this function when the video player is ready.
                function onPlayerReady(event) {
                  player.mute();
                  player.playVideo();
                  event.target.playVideo();
                }
                // 5. The API calls this function when the player's state changes.
                //    The function indicates that when playing a video (state=1),
                //    the player should play for six seconds and then stop.
                var done = false;
                function onPlayerStateChange(event) {
                  if (event.data == YT.PlayerState.PLAYING && !done) {
                    setTimeout(stopVideo, 0);
                    done = true;
                  }
                }
                function stopVideo() {
                  player.stopVideo();
                }
              </script>
    </iframe>
            <button class="close js-close-modal">Fechar</button>
        </div>
    </div>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/filtros-de-busca.js"></script>

    
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        
         <!-- Initialize Swiper -->
         <script>
          var swiper = new Swiper(".mySwiper", {
            loop: true,
            loopFillGroupWithBlank: true,
            effect: "fade",
            pagination: {
              dynamicBullets: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            autoplay: {
              delay: 5500,
              disableOnInteraction: false,
            },
          });
    
          
        AOS.init({
            once: true,
            duration: 800,
            delay: 10,
        }
        );
        </script>
    
    
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".cardHistoriaSwiper", {
        slidesPerView: 2,
        //slidesPerView: "auto",
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".depoimentosSwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

    <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script>

        <div class="container">
            <div class="top-footer">
                <div class="logo-rodape">
                    <img src="<?php echo get_template_directory_uri() ?>/img/crecerto_rodape.png" class="logo" alt="logo-crecerto">
                </div>
                <div class="social">
                    <ul>
                        <a target="_blank" href="https://www.youtube.com/channel/UCJDFMcDvNUe7SXgaNHU6ODA?view_as=subscriber">
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="icone-youtube">
                            </li>
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/company/crecerto-ag%C3%AAncia-de-microcr%C3%A9dito/">
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="icone-linkedin">
                            </li>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/crecerto/">
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="icone-facebook">
                            </li>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/agenciacrecerto/">
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="icone-instagram">
                            </li>
                        </a>
                        <a target="_blank" href="https://twitter.com/Crecerto1">
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/img/twitter-white.svg" alt="icone-twitter">
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="main-footer">
                <nav>
                    <div class="item">
                        <strong>Quem Somos</strong>
                        <ul>
                            <nav>
                                <?php
                                    $args = array(
                                        'menu' => 'Rodapé Institucional',
                                        'theme_location' => 'menu-footer-institucional',
                                        'container' => false,
                                        'menu_class' => 'menu-crecerto'
                                    );
                                    wp_nav_menu( $args );
                                ?>
                            </nav>
                        </ul>
                    </div>
                    <div class="item">
                        <strong>Linhas de Crédito</strong>
                        <ul>
                            <nav>
                                <?php
                                    $args = array(
                                        'menu' => 'Rodapé Linha de Crédito',
                                        'theme_location' => 'menu-footer-linhas-de-credito',
                                        'container' => false,
                                        'menu_class' => 'menu-crecerto'
                                    );
                                    wp_nav_menu( $args );
                                ?>
                            </nav>
                        </ul>
                    </div>
                    <div class="item">
                        <strong>Fale Conosco</strong>
                        <ul>
                            <nav>
                                <?php
                                    $args = array(
                                        'menu' => 'Rodapé Fale Conosco',
                                        'theme_location' => 'menu-footer-fale-conosco',
                                        'container' => false,
                                        'menu_class' => 'menu-crecerto'
                                    );
                                    wp_nav_menu( $args );
                                ?>
                            </nav>
                        </ul>
                    </div>
                </nav>
                <div class="contact">
                    <a href="mailto:atendimento@crecerto.org.br">
                        <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/envelope.svg" alt="envelope">
                    </div>
                        <div class="info">
                            <strong>Atendimento:</strong>
                            <p>atendimento@crecerto.org.br</p>
                        </div>
                    </a>
                    <a href="mailto:ouvidoria@crecerto.org.br">
                        <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/chat.svg" alt="chat">
                        </div>
                        <div class="info">
                            <strong>Ouvidoria:</strong>
                            <p>ouvidoria@crecerto.org.br</p>
                        </div>
                    </a>
                    <div class="selo-ods">
                        <img src="<?php echo get_template_directory_uri() ?>/img/Selo-2022-pessoa-juridica.png" alt="chat">
                    </div>
                </div>
            </div>
            <div class="msg">
                <p>Crecerto 2022. Todos os direitos reservados. Desenvolvido por Jotapix</p>
            </div>
        </div>

        

    </footer>

    



    <?php wp_footer()?>

</body>

</html>


