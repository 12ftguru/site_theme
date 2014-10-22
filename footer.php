<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Twelve Foot Guru
 * @since Twelve Foot Guru 1.0
 */
?>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twelvefootguru_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'twelvefootguru' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twelvefootguru' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'twelvefootguru' ), 'Twelve Foot Guru', '<a href="http://12ftguru.com/" rel="designer">Bryan P Johnson <bryan@12ftguru.com></a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #main .site-main -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
