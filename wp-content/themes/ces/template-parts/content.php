<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CES
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section>

	<div class="hero">
		<div class="w-100 vh-100 cover bg-center">
		<?php if( get_field('desktop_slider') ): ?>
		<?php the_field('desktop_slider'); ?>
		<?php endif; ?>
		</div>	
	</div>

	<div>
	<h1 id="post_title"><?php the_title(); ?></h1>
	</div>

	<div class="blurb">

		<?php if( get_field('blurb') ): ?>
		<p><?php the_field('blurb'); ?></p>
		<?php endif; ?>
	</div>
</section>



	<footer class="entry-footer">
		<?php ces_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
