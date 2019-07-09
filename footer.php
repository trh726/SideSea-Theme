<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="site-footer grid-x grid-padding-x" role="contentinfo">
    <section class="cell small-4">
        <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/Acme-Logos.png'. '">'; ?>
        <address>1234 W Center Ln<br>Missoula, MT.<br>59808<br>
        <a href="tel:12345678910">1 234-567-8910</a><br>
        <a href="mailto:info@acme.com">info@acme.com</a>
        </address>
    </section>
    <section class="cell small-4">
    <nav class="nav-footer-wrap" role="navigation">
        <?php h5bs_footer_nav(); ?>
    </nav>
    </section>
    <section class="cell small-4">
        <ul class="social-links">
            <?php
            echo '<li class="si-twitter"><a href="' . get_option( 'client_twitter_url' ) . '" target="_blank"><i class="fab fa-twitter"></i></i></a></li>';
            echo '<li class="si-facebook"><a href="' . get_option( 'client_facebook_url' ) . '" target="_blank"><i class="fab fa-facebook"></i></a></li>';
            echo '<li class="si-instagram"><a href="' . get_option( 'client_instagram_url' ) . '" target="_blank"><i class="fab fa-instagram"></i></a></li>';
            ?>
        </ul>
    </section>
    <p class="copyright">&copy; <?php echo date( 'Y' ); ?> Tim Heuermann<?php //echo get_bloginfo( 'name' ); ?></p>
</footer>


<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
