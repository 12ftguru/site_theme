<?php
/**
 * The template for displaying all pages.
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
        <?php if(is_page( 'blog' )): ?>
          blog
        <?php elseif(is_page( 'portfolio' )): ?>

          <div class="recentProjectsPortfolio">
          <div class="twelvefoottitle">
              <h1>Portfolio</h1>
          </div>
          <?php
          // The Query
          $the_query = new WP_Query('category_name=Portfolio');

          // The Loop
          if ( $the_query->have_posts() ) {
              echo '<ul>';
              while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  if ( get_field('portfolio_thumb') ) {
                      echo '<li><a href="';
                      echo the_permalink();
                      print '" class="wrapper"><span class="text">'.get_the_title().'</span>' ;
                      print '<img src="'.get_field('portfolio_thumb').'">';
                      echo '</a></li>';
                  } else {
                    echo '<a href="';
                    echo the_permalink();
                    echo '"><li>' ;
                    the_post_thumbnail('medium');
                    echo '</li></a>';
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
        <?php else: ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
      <?php endif; ?>
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
        <div class="push"></div>
      </div><!-- #wrapper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
