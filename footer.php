<footer class="bg-black py-10 px-5">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <div class="flex-none w-40 my-4 md:my-0">
            <a href="<?php echo get_home_url( ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="Logo" >
            </a>
        </div>
        <div class="grow my-4 md:my-0">
            <div class="munay_footer">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'footer_menu'
                ));
            ?>
            </div>
        </div>
        <div class="flex-none w-40 my-4 md:my-0">
            <div class="flex gap-4 justify-center md:justify-end">
                <a href="https://www.instagram.com/jpaucar.vue/" target="_blank" class="duration-300 hover:scale-125 transition">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/fa_instagram.png" alt="Munay Instagram">
                </a>
                <a href="https://www.instagram.com/jpaucar.vue/" target="_blank" class="duration-300 hover:scale-125">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/fa_facebook.png" alt="Munay Facebook">
                </a>
                <a href="https://www.instagram.com/jpaucar.vue/" target="_blank" class="duration-300 hover:scale-125">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/fa_twitter.png" alt="Munay Twitter">
                </a>
            </div>
        </div>
    </div>
    <p class="text-center text-white/70 mt-10 md:mt-0">Todos los derechos reservados 2024</p>
</footer>

<?php wp_footer() ?>

</body>
</html>