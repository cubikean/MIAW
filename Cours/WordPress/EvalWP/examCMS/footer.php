

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/core-img/logo.png" alt=""></a>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
						<?php wp_nav_menu(array(
										'theme_location' => 'main_menu',
								        'container' => '',
										'items_wrap' => '%3$s',)); 
										?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p>6 artistes présents sur le site</p>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
	<?php wp_footer() ?>
</body>

</html>