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

<section id="anchorimages" >

	<div class="hero">
		<div class="w-100 vh-100-l min-vh-25-m mt6-m mt4-s cover bg-center">
			<?php if( get_field('desktop_slider') ): ?>
			<?php the_field('desktop_slider'); ?>
			<?php endif; ?>
		</div>	
		<div class="downbutton">
			<a href="#anchortext"><h2>Words <span>&#8595;</span> </h2></a>
		</div>
	</div>

</section>

<section id="anchortext" >

	<div  class="min-vh-50 min-vh-100-l flex items-center justify-center pv5">
		<div class="measure-wide center tc-l tl">
			
			<div id="post_title">
				<h1 class="ph4 ph0-l"><?php the_title(); ?></h1>
			</div>
			
			<?php if( get_field('blurb') ): ?>
			<p class="lh-copy ph4 ph0-l"><?php the_field('blurb'); ?></p>
			<?php endif; ?>
			
			<div class="upbutton">
				<a href="#anchorimages"><h2>Images <span>&#8593;</span> </h2></a>
			</div>
		</div>
	</div>

	<!-- <div>

	<img src="<?php echo get_template_directory_uri();?>/css/images/method.png" alt="Method">

	</div> -->

</section>



</article><!-- #post-<?php the_ID(); ?> -->
