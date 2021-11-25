<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CES
 */

get_header();
?>

	<main id="primary" class="site-main">




	<article class="cf pt5">

  <!-- Block 1 -->
  
  <div class="fl w-100 w-50-m w-25-ns">

  <a class="fl w-100" href="/colwith-farm-distillery/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/10/CFD-2498_0001_02.jpg);">
        <div class="post-title aspect-ratio--object">
          <p class="TG ma0 f4 f3-l pa4 tl lh-title">Colwith Farm Distillery</p>
        </div>
      </div>
    </div>
  </a>

    <a class="fl w-100" href="/desert-island/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/10/Desert-Island-2498_0020_20.jpg);">
        <div class="post-title aspect-ratio--object">
          <p class="TG ma0 f4 f3-l pa4 tl lh-title">Desert Island</p>
        </div>
      </div>
    </div>
  </a>

  </div>

  <div class="fl w-100 w-50-m w-25-l">

    <div class="fl w-100">
    <a class="fl w-100" href="/goss-structural/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/10/GS-2498_0002_03.jpg);">
        <div class="post-title aspect-ratio--object">
          <p class="TG ma0 f4 f3-l pa4 tl lh-title">Goss Structural</p>
        </div>
      </div>
    </div>
  </a>
    </div>

    <div class="fl w-100">
      <a class="fl w-100" href="/river-echoes/">
       <div class="db aspect-ratio aspect-ratio--1x1 ">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/10/River-Echoes-2498_0000_01.jpg);">
          <div class="post-title aspect-ratio--object">
             <p class="TG ma0 f4 f3-l pa4 tl lh-title">River Echoes</p>
          </div>
        </div>
       </div>
      </a>
    </div>

  </div>

  <div class="fl w-100 w-50-l">


  <a class="fl w-100" href="/borderlines-of-the-present/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2021/03/BotP-Web-Res-02-scaled.jpg);">
        <div class="post-title aspect-ratio--object">
          <p class="TG ma0 f4 f3-l pa4 tl lh-title">Borderlines of the Present</p>
        </div>
      </div>
    </div>
  </a>

  </div>

<!-- End of Block 1 -->

<!-- Block 2 -->
  
<!-- <a class="fl w-100 w-50-l" href="/art-research-adventure/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image: <?php $url = wp_get_attachment_url( get_post_thumbnail_id(1385), 'large' ); ?> <img src="<?php echo $url ?>" />
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Art, Research & Adventure</p>
        </div>
      </div>
    </div>
  </a> -->

  <a class="fl w-100 w-50-l" href="/art-research-adventure/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/dm_2020_bath_uni_edge_300dpi-0455-1-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Art, Research & Adventure</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/drawing-review/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-13-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Drawing Review</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/go-go-go/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0005_06.jpg-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Go, Go, Go!</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/festa-de-sao-joao-poster/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/02-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Festa de São João</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/time-machine-talk-to-the-future/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/03-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Time Machine Talk to the Future</p>
        </div>
      </div>
    </div>
  </a>

<!-- end of Block 2 -->

<!-- Block 4 -->
  
<a class="fl w-100 w-50-l" href="/amra/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0001_02.jpg-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">AMRA</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/smithsons-trail/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_IMG_0109.JPG-1-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Smithsons Trail</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/indifferent-cresses/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0019_IMG_0159.JPG-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Indifferent Cresses</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/something-more-permanent-than-concrete/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0003_04-9-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Something More Permanent Than Concrete</p>
        </div>
      </div>
    </div>
  </a>

  <a class="fl w-100 w-25-l" href="/materials-of-resistance/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-11-scaled.jpg);">
        
      <div class="post-title aspect-ratio--object">
      <p class="TG ma0 f4 f3-l pa4 tl lh-title">Materials of Resistance</p>
        </div>
      </div>
    </div>
  </a>

<!-- end of Block 4 -->

  <!-- Block 5 -->
  
  <div class="fl w-100 w-50-m w-25-ns">

    <a class="fl w-100" href="/being-here-being-there/">
      <div class="db aspect-ratio aspect-ratio--1x1 ">
        <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-6-scaled.jpg);">
          <div class="post-title aspect-ratio--object">
            <p class="TG ma0 f4 f3-l pa4 tl lh-title">Being Here & Being There</p>
          </div>
        </div>
      </div>
    </a>
    <a class="fl w-100" href="/arnolfini-new-rules/"> 
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-4-scaled.jpg);">
        <div class="post-title aspect-ratio--object">
          <p class="TG ma0 f4 f3-l pa4 tl lh-title">Arnolfini New Rules</p>
        </div>
      </div>
    </div>
  </a>

  </div>

  <div class="fl w-100 w-50-m w-25-l">

    <div class="fl w-100">
      <a class="fl w-100" href="/silent-quarter/">
        <div class="db aspect-ratio aspect-ratio--1x1 ">
          <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0010_11-scaled.jpg);">
            <div class="post-title aspect-ratio--object">
              <p class="TG ma0 f4 f3-l pa4 tl lh-title">Silent Quarter</p>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="fl w-100">
      <a class="fl w-100" href="/fmpup/">
        <div class="db aspect-ratio aspect-ratio--1x1 ">
          <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/FMPUP-gif.gif);">
            <div class="post-title aspect-ratio--object">
              <p class="TG ma0 f4 f3-l pa4 tl lh-title">The Fantastical Multimedia Pop-up Project</p>
            </div>
          </div>
        </div>
      </a>
    </div>

  </div>

  <div class="fl w-100 w-50-l pb4">

  <a class="fl w-100" href="/tales-from-the-dark-side-of-the-city/">
    <div class="db aspect-ratio aspect-ratio--1x1 ">
      <div class="bg-center cover aspect-ratio--object" style="background-image:url(/wp-content/uploads/2020/10/0000_01-7-scaled.jpg);">
        <div class="post-title aspect-ratio--object">
          <p class="TG ma0 f4 f3-l pa4 tl lh-title">Tales from the Dark Side of the City</p>
        </div>
      </div>
    </div>
  </a>

  </div>

<!-- End of Block 5  -->

<div class="tc">
<a href="/categories/"><h2>View all Projects</h2></a>
</div>


	</main><!-- #main -->

	<?php wp_footer(); ?>

</body>
</html>