<?php 
    //Modelo de Página Interna de Notícias
?>

<?php get_header(); ?>

    <?php if ( have_posts('') ) : while ( have_posts('') ) : the_post(); ?>

    <section class="s-hero-interna">
        <div class="overlay">
        <div class="container">
            <div class="text">
                <p class="intro-1">Eventos</p>
                <h2>Educação Financeira - Dicas para organização do trabalho em casa</h2>
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
                <div class="image-post">
                <img src="<?php echo get_the_post_thumbnail();?>">
                </div>
                <div class="title-post">
                    <h2>Educação Financeira - Dicas para organização do trabalho em casa</h2>
                </div>
                <div class="date-post">
                    <h4>04/03/2022</h4>
                </div>
                <div class="post-text">
                    <p>Trabalhar em casa em tempos digitais tornou-se uma possibilidade bastante real para muita gente. Mesmo que não seja a atividade principal da pessoa, ter um negócio digital como segunda renda também passou a ser uma grande oportunidade. O investimento geralmente é baixo. Com um computador e acesso à internet há muitas opções para empreender e melhorar o ganho da família. De qualquer forma, se você trabalha de casa ou pretende transformar seu lar num espaço profissional para gerar renda, preste atenção nestas dicas básicas para ter sucesso.</p>
    
                    <h3>1- Tenha uma rotina profissional</h3>
    
                    <p>De preferência, acorde cedo e tome um banho para refrescar corpo e mente. Se você gosta de ficar um pouco mais na cama, então, compense as horas. E outra: você pode estipular uma determinada quantidade de tarefas que devem ser realizadas no dia e, não, pelo número de horas.</p>
    
                    <h3>2- Crie seu escritório</h3>
    
                    <p>Aja como se fosse um trabalho externo. Mas, pode usar uma roupa confortável sem ser desleixado e vá até seu escritório. É importante ter um espaço exclusivo para seus negócios. Assim você pode fechar a porta e imergir no trabalho, evitando distrações. Procure manter neste espaço tudo o que você precisa para realizar sua atividade, evitando saídas frequentes.</p>
    
                    <h3>3 – Mantenha sua mesa e espaço de trabalho organizados</h3>
    
                    <p>Assim a criatividade e a produtividade aumentam. Não raro, pessoas perdem negócios por falta de organização básica do ambiente. Extraviam objetos e documentos que tomam tempo para serem encontrados. É tempo jogado fora e perda de foco. Um ambiente organizado aumenta a sua motivação para realizar as tarefas do dia a dia.</p>
    
                   <h3>4 – Separe bem a empresa do ambiente doméstico</h3>
    
                    <p>É mais comum do que se imagina a confusão que muitos fazem entre as atividades profissionais e domésticas quando atuam desde de casa. Por isso, separe bem a empresa do ambiente doméstico. Reúna todos que habitam a casa para explicar bem o funcionamento da atividade e o horário de expediente. Nada de tentar conciliar as duas coisas, fazendo tarefas doméstica na hora do seu trabalho. Deixe claro que o seu tempo de trabalho serve apenas para a empresa.</p>
    
                    <h3>5 – Cuidado com Celular e TV</h3>
    
                    <p>Celular e TV são os dois vilões do trabalho em casa. São os reis da distração se você não se disciplinar. Se o seu espaço de trabalho for em um ambiente com TV, por exemplo, deixe-a desligada para evitar se distrair. Em relação ao celular, reserve um horário para olhar suas redes sociais e tratar de coisas particulares. E lembre-se de, de vez em quando, refrescar suas ideias, fazendo pequenas pausas. Levante-se da cadeira, espreguice-se, estique as pernas e volte a produzir.</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>