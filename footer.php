

<footer>
    <div class="container newsletter-box">
        <h3>Assine e receba as novidades</h3>
        <p>Inscreva seu e-mail para receber nossas últimas notícias e promoções</p>

        <form class="">
            <input type="email" class="input-clear" name="email" value="" placeholder="informe seu e-mail">
            <button type="button" class="btn btn-defalut btn-warning btn-lg">Enviar</button>
        </form>
    </div>
    <div class="container-fluid">
        <div class="container dev-copy">
            <p class="copyright">&copy; <?php echo Date('Y'); ?> &middot; <?php bloginfo('name'); ?> &middot; Todos os direitos reservados</p>
            <p class="getec">Desenvolvimento &amp; Manutenção por <span>GETEC</span></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
</body>
</html>
