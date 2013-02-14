<?php
/**
 * The template for displaying search forms in Twelve Foot Guru
 *
 * @package Twelve Foot Guru
 * @since Twelve Foot Guru 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'twelvefootguru' ); ?></label>
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'twelvefootguru' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twelvefootguru' ); ?>" />
	</form>
