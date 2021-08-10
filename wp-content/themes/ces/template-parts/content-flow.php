<?php
/*
Template Name: Flow
Template Post Type: post, page, product
*/

?>

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

<section id="images" >

	<div class="hero-flow">
		<div class="w-100 vh-100-l min-vh-25-m mt6-m mt4-s cover bg-center">
			<div class="wind" id="flow">Flow</div>
					<script>
					// Update the "WIND" font-variation-setting of the logo in reaction to the mouse position around the centre of the browser
					window.addEventListener('mousemove', function(event) {
					var x = event.clientX;
					var y = event.clientY;
					
					var body = document.getElementsByTagName("body")[0];
					var flow = document.getElementById("flow");
					var midX = body.getBoundingClientRect().left + body.getBoundingClientRect().right/2; // relative to centre of window
					var midY = body.getBoundingClientRect().top + body.getBoundingClientRect().bottom/4; // close enough anyway (minus scrollbars etc.)
					
					var deltaX = x - midX;
					var deltaY = y - midY;
					
					var angleRad = Math.atan(deltaY/deltaX);
					var angleDeg = (90 + 360 + (angleRad * 180 / Math.PI)) %360; // returned angle is relative to horizontal axis, plus we don't want negative
					if (deltaX < 0) angleDeg+=180; // fix for West/East (all positive before, e.g. East)
					
					flow.style["color"] = "white";
					
					var windCSS = "'WIND' " + angleDeg;
					flow.style["font-variation-settings"] = windCSS;
					
					});
					
					// Do the same for devices with accelorometers e.g. phones
					window.addEventListener('deviceorientation', function(event) {
						var angleRad = Math.atan(event.gamma/event.beta);
						var angleDeg = (90 + 360 + (angleRad * 180 / Math.PI)) %360; // returned angle is relative to horizontal axis, plus we don't want negative
						if (event.beta < 0) angleDeg+=180; // fix for West/East (all positive before, e.g. East)
						
						var flow = document.getElementById("flow");
					
						flow.style["color"] = "white";
					
						var windCSS = "'WIND' " + angleDeg;
						flow.style["font-variation-settings"] = windCSS;
						
					});
				</script>
		</div>	
		<div class="downbutton">
			<a href="#words"><h2>Words <span>&#8595;</span> </h2></a>
		</div>
	</div>

</section>

<section id="words" >

	<div  class="min-vh-50 min-vh-100-l flex items-center justify-center pv5">
		<div class="measure-wide center tc-l tl">
			
			<div id="post_title">
				<h1 class="ph4 f2-l f3 ph0-l"><?php the_title(); ?></h1>
			</div>
			
			<?php if( get_field('blurb') ): ?>
			<p class="lh-copy ph4 ph0-l"><?php the_field('blurb'); ?></p>
			<?php endif; ?>

			<?php if( get_field('more_info') ): ?>
			<p class="TG lh-copy ph4 ph0-l"><?php the_field('more_info'); ?></p>
			<?php endif; ?>
			
			<div class="upbutton">
				<a href="#images"><h2>Images <span>&#8593;</span> </h2></a>
			</div>
		</div>
	</div>

</section>



</article><!-- #post-<?php the_ID(); ?> -->
