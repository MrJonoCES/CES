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

	<div class="min-vh-100 flex items-center justify-center pv5">
		<div class="measure-wide center tc">
			<h1 id="post_title"><?php the_title(); ?></h1>

			<?php if( get_field('blurb') ): ?>
			<p class="f4 lh-copy"><?php the_field('blurb'); ?></p>
			<?php endif; ?>

		</div>
	</div>

</section>


</article><!-- #post-<?php the_ID(); ?> -->
