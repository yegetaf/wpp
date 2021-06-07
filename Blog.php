<?php
/* Template Name: Blog */ 

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- POST Figure -->
	<?php if(!is_single()):?>
	<figure class="snip1527" style="height: auto">
		<!-- POST THUMBNAIL -->
		<?php if(has_post_thumbnail()) { ?>
		<div class="image"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="postthumb" style="width:100%"></div>
		<?php } else { ?>
		<div class="image"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="postthumb" style="width:100%;height: 15rem"></div>
		<?php }?>
		<figcaption style="width:100%">
			<div class="date"><?php the_date(); ?></div>
			<h3><?php the_title(); ?></h3>
			<p>
			<?php the_excerpt(); ?>
			</p>
	</figcaption>
	<a href="<?php esc_url( the_permalink() ) ?>" rel="bookmark"></a>
  </figure>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_sidebar();
get_footer();
