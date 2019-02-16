<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

			</div><!-- #content -->
			<footer id="colophon" class="site-footer">
                <div class="site-footer-grid">
    				<div class="site-info">

    				</div><!-- .site-info -->

                    <div class="site-footer-nav">

                        <div class="footer-menu-grid">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'menu-2',
                                    'menu_id'         => 'footer-menu',
                                    'menu_class'      => 'menu simple',
                                    'container'       => 'div',
                                    'container_class' => 'footer-menu'
                                ) );
                            ?>
                        </div>
                    </div>
                </div><!-- .site-footer-grid -->

			</footer><!-- #colophon -->
		</div><!-- #page -->



	</div><!-- .off-canvas-content -->
</div><!-- .off-canvas-wrapper -->



<?php wp_footer(); ?>
<script>
    $(document).foundation();
</script>

</body>
</html>
