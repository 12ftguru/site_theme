<?php
/**
 * The template for displaying the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Twelve Foot Guru
 * @since Twelve Foot Guru 1.0
 */

get_header(); ?>
    <div id="wrapper">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

                <?php vslider('Homepage'); ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'main', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
                <div class="recentProjects">
                <div class="twelvefoottitle">
                    <h1>Recent Projects</h1>
                </div>
                <?php
                // The Query
                $the_query = new WP_Query('category_name=project');

                // The Loop
                if ( $the_query->have_posts() ) {
                    echo '<ul>';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        if ( has_post_thumbnail() ) {
                            echo '<li>' . the_post_thumbnail('thumbnail') . '</li>';
                        }
                    }
                    echo '</ul>';
                } else {
                    // no posts found
                    echo 'No Projects';
                }
                /* Restore original Post Data */
                wp_reset_postdata();

                ?>
                </div>
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
        <div class="push"></div>
    </div><!-- #wrapper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>