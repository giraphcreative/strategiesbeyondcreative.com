<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="column">
			<?php print apply_filters( 'the_content', get_field( 'footer-address', 'option' ) ); ?>
			<p class="copyright">Copyright &copy; <?php print date( 'Y' ) . ' ' . get_bloginfo( 'name' ) ?>, LLC.</p>
		</div>
		<div class="column menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column social">
			
		</div>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>