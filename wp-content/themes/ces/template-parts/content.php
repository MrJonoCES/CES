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


<section class="images-panel" id="images" >

	<div class="hero">
		<div class="w-100 vh-100-l min-vh-25-m mt6-m mt4-s cover bg-center big-slider">
			<?php if( get_field('desktop_slider') ): ?>
			<?php the_field('desktop_slider'); ?>
			<?php endif; ?>
		</div>	
		<div class="mob-slider">
			<?php if( get_field('mobile_slider') ): ?>
			<?php the_field('mobile_slider'); ?>
			<?php endif; ?>
		</div>	
		<div class="words">
		<a href="#" class="toggle-words"><h2>Info</h2></a>
		</div>

		
	</div>

</section>

<section class="info-panel" id="words" >

	<div class="grid">
			
			<div class="grid-item" id="post_title">
				<h1 class="ph4 f3 ph0-l"><?php the_title(); ?></h1>

				<?php if( get_field('more_info') ): ?>
			<h6 class="TG lh-copy ph4 ph0-l" style="margin-bottom:0!important"><?php the_field('more_info'); ?></h6>
			<?php endif; ?>
			</div>
			
			<div class="grid-item">
			<?php if( get_field('blurb') ): ?>
			<p class="lh-copy ph4 ph0-l copy"><?php the_field('blurb'); ?></p>
			<?php endif; ?>


			</div>
			
	</div>

</section>

<div class="info-mobile mt5">

<div id="post_title">
	<h1 class="ph4 f3 ph0-l"><?php the_title(); ?></h1>
</div>

<?php if( get_field('blurb') ): ?>
<p class="lh-copy ph4 ph0-l copy"><?php the_field('blurb'); ?></p>
<?php endif; ?>

<?php if( get_field('more_info') ): ?>
<p class="TG lh-copy ph4 ph0-l "><?php the_field('more_info'); ?></p>
<?php endif; ?>

</div>


</article><!-- #post-<?php the_ID(); ?> -->
