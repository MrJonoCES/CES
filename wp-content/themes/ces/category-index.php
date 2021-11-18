<?php
/*
Template Name: Category Index Page
*/

?>


<?php
/**
 * The template for displaying all categories
 *
 * This is the template that displays all categories by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CES
 */

get_header();
?>

	<main class="site-main">

    <header class="archive-header">
    <h1 class="archive-title pb3">Categories</h1>
    </header>


    <div id="content" role="main">

	<article class="cat-grid pb3">

  <!-- Block 1 -->
  

  <a class="fl w-100 w-30-l" href="http://localhost:8888/category/digital/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(http://localhost:8888/wp-content/uploads/2020/10/FMPUP-gif.gif);">
      </div>
    </div>
    <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Digital</h2>
  </a>

  <a class="fl w-100 w-30-l" href="http://localhost:8888/category/exhibition/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(http://localhost:8888/wp-content/uploads/2020/10/0000_01-1.jpg-1-scaled.jpg);">
    
      </div>
    </div>
    <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Exhibitions</h2>
  </a>

  <a class="fl w-100 w-30-l" href="http://localhost:8888/category/identity/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(http://localhost:8888/wp-content/uploads/2020/10/FLOW-FI.gif);">
        
      </div>
    </div>
    <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Identities</h2>
  </a>
</article>

<article class="cat-grid pb6">

  <a class="fl w-100 w-30-l" href="http://localhost:8888/category/installation/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(http://localhost:8888/wp-content/uploads/2020/10/dm_2020_bath_uni_edge_300dpi-0558-1-scaled.jpg);">
        
      </div>
    </div>
    <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Installations</h2>
  </a>

  <a class="fl w-100 w-30-l" href="http://localhost:8888/category/print/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(http://localhost:8888/wp-content/uploads/2020/10/0000_01-10-scaled.jpg);">
    
      </div>
    </div>
    <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Print</h2>
  </a>

  <a class="fl w-100 w-30-l" href="http://localhost:8888/category/websites/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(http://localhost:8888/wp-content/uploads/2021/03/BotP-Web-Res-01-scaled.jpg);">
        
      </div>
    </div>
    <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Websites</h2>
  </a>

 

</article>
</div>
	</main>

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>