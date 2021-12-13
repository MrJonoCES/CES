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

    <!-- <?php
    $categories = get_categories();

    echo '<div class="post-grid-item">';
    foreach($categories as $category){
        echo '<h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title"><a>' . get_cat_name($category) . '</a></h2>';
    }
    echo '</div>';
    ?> -->

    <!-- <?php
    $args = array('type' => 'post');
    $categories = get_categories( $args );
    echo '<div class="post-grid-item">';
    foreach ($categories as $category) {
          $size = 'category-thumb'; //can also be value: 'thumbnail'
          $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
          $image = wp_get_attachment_image( $thumbnail_id, $size );
          echo '<br />' .$image;
          echo '<h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title"><a>' . get_cat_name($category) . '</a></h2>';
    }
    echo '</div>';

    ?> -->

<section class="cf w-100 pa2-ns">


  <article class="fl w-100 w-33-l pa2-ns">
    <a href="/category/digital/">
      <div class="mt3 db aspect-ratio aspect-ratio--16x9 cat-grid-item">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/FMPUP-gif.gif);">
        </div>
      </div>
      <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Digital</h2>
    </a>
  </article>

  <article class="fl w-100 w-33-l pa2-ns">
    <a href="/category/exhibition/">
      <div class="mt3 db aspect-ratio aspect-ratio--16x9 cat-grid-item">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-1.jpg-1-scaled.jpg);">
        </div>
      </div>
      <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Exhibitions</h2>
    </a>
  </article>

  <article class="fl w-100 w-33-l pa2-ns">
    <a href="/category/identity/">
      <div class="mt3 db aspect-ratio aspect-ratio--16x9 cat-grid-item">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/10/CFD-2498_0010_11.jpg);">
        </div>
      </div>
      <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Identities</h2>
    </a>
  </article>


  <article class="fl w-100 w-33-l pa2-ns">
    <a href="/category/installation/">
      <div class="mt3 db aspect-ratio aspect-ratio--16x9 ">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/dm_2020_bath_uni_edge_300dpi-0558-1-scaled.jpg);">
          
        </div>
      </div>
      <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Installations</h2>
    </a>
  </article>

  <article class="fl w-100 w-33-l pa2-ns">
    <a href="/category/print/">
      <div class="mt3 db aspect-ratio aspect-ratio--16x9 ">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-10-scaled.jpg);">
        </div>
      </div>
      <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Printed Matter</h2>
    </a>
  </article>

  <article class="fl w-100 w-33-l pa2-ns">
    <a href="/category/websites/">
      <div class="mt3 db aspect-ratio aspect-ratio--16x9 ">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/10/GS-2498_0004_05.jpg);">
        </div>
      </div>
      <h2 class="post-grid-title ma0 f4 f3-l pt2 tl lh-title">Websites</h2>
    </a>
  </article>

  </section>
	</main>

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>