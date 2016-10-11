<?php get_header(); ?>

    <section class="hero">
        <div id="carousel-destaque" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-destaque" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-destaque" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php bloginfo('template_url'); ?>/img/yoga-template.jpg" alt="Yoga Image">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/pilates-template.jpg" alt="Pilates Image">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-destaque" role="button" data-slide="prev"><img class="carousel-button" aria-hidden="true" src="<?php bloginfo('template_url'); ?>/img/back-white.svg"></a>
            <a class="right carousel-control" href="#carousel-destaque" role="button" data-slide="next"><img class="carousel-button" aria-hidden="true" src="<?php bloginfo('template_url'); ?>/img/next-white.svg"></a>
        </div>
    </section>

    <main>
        <section class="intro">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="titulo">Cursos</h2>
                        <section class="box-cursos">
                            <img src="<?php bloginfo('template_url'); ?>/img/img-cursos.jpg" class="img-responsive" alt="Yoga Image">
                            <h3>Pilates</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et fringilla purus. Sed in ligula porttitor, dapibus ex at, vehicula diam. Proin vel turpis vel tellus auctor posuere. Sed risus lectus, faucibus nec congue quis, finibus ut odio. Pellentesque nec iaculis ipsum. Nullam sed dapibus sapien, eget congue leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras cursus leonibh, at rutrum dolor iaculis fermentum.</p>
                            <p><a class="btn btn-lg button" href="cursos.html" role="button">confira todos os cursos</a></p>
                        </section>
                    </div>

                    <div class="col-md-4 col-md-offset-1">
                        <h2 class="titulo">O Studio</h2>
                        <section class="box-studio">
                            <a href="studio.html"><img src="<?php bloginfo('template_url'); ?>/img/img-studio.jpg" class="img-responsive" alt=""></a>
                            <h3>Venha conhecer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget pellentesque tellus. Nunc magna leo, porttitor nec metus ac, venenatis aliquam augue. Donec neque nunc, interdum et ornare et, mattis.</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section class="container box-depoimento">
        <div id="text-carousel" class="carousel carousel-dep slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis eligendi ipsum praesentium laudantium quibusdam tempore ratione dolorem beatae aperiam nemo."</p>
                            <p class="assinatura-depoimento"><span>Rodolfo Galvan</span>, aluno de Yogalates</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget pellentesque tellus. Nunc magna leo, porttitor nec metus ac, venenatis aliquam augue. Donec neque nunc, interdum et ornare et, mattis."</p>
                            <p class="assinatura-depoimento"><span>Patrícia Lelis</span>, aluna de Pilates</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#text-carousel" data-slide="prev"><img class="carousel-button" src="<?php bloginfo('template_url'); ?>/img/back.svg"></a>
            <a class="right carousel-control" href="#text-carousel" data-slide="next"><img class="carousel-button" src="<?php bloginfo('template_url'); ?>/img/next.svg"></a>
        </div>
    </section>

    <?php get_footer(); ?>
