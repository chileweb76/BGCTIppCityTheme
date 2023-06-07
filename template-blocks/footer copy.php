        <footer class="site-footer"> 
            <p class="p-footer"><?php echo esc_html(get_theme_mod( 'set_copyright', '© Copyright - All Rights Reserved' )); ?></p>
            <nav class="footer-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'bgctippcity_footer_menu', 'depth' => 1 )); ?>
            </nav>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>