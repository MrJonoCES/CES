<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">

<header class="archive-header">
    <h1 class="archive-title"><?php single_cat_title( '' ); ?></h1>
</header>

<div id="content" role="main">
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 

 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>

<div class="post-grid-item">
 
<div>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium_large', array('class' => 'post-thumb')); ?></a>
</div>

<h2 class="post-grid-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

</div>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>
 
 
<?php get_footer(); ?>