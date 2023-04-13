<footer class="footer">
        <div class="container">
            <hr>
            <div class="footer__inner">
                <figure class="footer__logo">
                    <?= the_custom_logo(); ?>
                </figure>
                <a class="footer__inner-police text"><?= CFS()->get('footer_copy'); ?></a>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>
</html>