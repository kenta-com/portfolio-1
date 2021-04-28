<section class="contact" id="contact">
            <h2 class="contact__title">Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="10" title="フォーム"]' ); ?>
        </section>
        <?php
        wp_enqueue_script('port-jquery', get_template_directory_uri().'/js/jquery.js');
        wp_enqueue_script('js', get_template_directory_uri().'/js/script.js');
				wp_footer();?>
    </body>
</html>