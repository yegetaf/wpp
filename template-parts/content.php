<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

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
  <?php else: ?>
	<h2><?php the_title(); ?></h2>
	<div class="entry-meta">
		<?php wp_bootstrap_starter_posted_on(); ?>
	</div><!-- .entry-meta -->
	<hr>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

<?php endif; ?>


</article><!-- #post-## -->
