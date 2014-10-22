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
        <?
        $the_query = new WP_Query('category_name=Featured');

        // The Loop
        if ( $the_query->have_posts() ) {
            echo '<div class="xftSlideshow">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                if ( has_post_thumbnail() ) {
                    echo '<div>' ;
                    print '<img src="'.get_field('slide_image').'">';
                    echo '</div>';
                }
            }
            echo '</div>';
        } else {
            // no posts found
            echo 'No Projects';
        }
        ?>

        <div class="weCanHelp">
        <div class="twelvefoottitle">
            <h1>We Can Help</h1>
        </div>
        <p>Twelve Foot Guru is available to assist you with:</p>
        <ul>
          <li>
            Consulting on projects using Sencha products, WordPress, JQuery, Node.js, Meteor, JavaScript, PHP and mySQL.
          </li>
          <li>
            Code review of your current system, including usability testing and documentation
          </li>
          <li>
            Partnering with your own internal IT group to bring them up to speed on Sencha or other technologies
          </li>
          <li>
            Building a new project from scratch or rehabilitating older projects
          </li>
      </div>

                <div class="recentProjects">
                <div class="twelvefoottitle">
                    <h1>Recent Projects</h1>
                </div>
                <?php
                // The Query
                $second_query = new WP_Query('category_name=Portfolio');

                // The Loop
                if ( $second_query->have_posts() ) {
                    echo '<ul>';
                    while ( $second_query->have_posts() ) {
                        $second_query->the_post();
                        if ( get_field('front_page_thumb') ) {
                            print '<li><a href="';
                            print the_permalink();
                            print '" class="wrapper">' ;
                            print '<span class="text">'.get_the_title().'</span>';
                            print '<img src="'.get_field('front_page_thumb') .'">';
                            print '</a></li>';
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

        <?php get_sidebar(); ?>
        <div class="push"></div>

        <?php get_footer(); ?>
    </div><!-- #wrapper -->

    <script>
 jQuery(document).ready(function(){
	jQuery('.xftSlideshow').slick({
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    centerPadding: '75px',
    arrows: false,
    dots: true
	});
});
</script>
