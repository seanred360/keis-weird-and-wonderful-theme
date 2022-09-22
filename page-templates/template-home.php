<?php
/**
 * Template Name: Custom Full Width
 * description: Page template without sidebar
 */

get_header(); ?>
<div class="container">
<header class="entry-header elevated-block">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<svg class='blob' viewBox="0 0 960 200" width="960" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><g transform="translate(478.00839050459587 260.7851951381973)"><path id='blob1' d="M114.2 -74.1C158.1 -36.1 210.7 12 206.7 54.4C202.8 96.8 142.4 133.5 85 151.6C27.6 169.7 -26.8 169.1 -81.2 150C-135.7 130.9 -190.2 93.4 -200.9 46C-211.6 -1.4 -178.5 -58.7 -137.7 -96C-96.9 -133.3 -48.5 -150.7 -6.6 -145.4C35.2 -140.1 70.4 -112.1 114.2 -74.1" fill="#fb9ede"></path></g><svg id="visual" viewBox="0 0 960 200" width="960" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><g transform="translate(461.5551191367757 266.134325183192)"><path id='blob2' style='visibility: hidden;' d="M107.4 -92.9C144 -39.8 181.7 5.1 183.5 59.8C185.3 114.5 151.2 178.9 97.1 207C43 235.2 -31.2 227 -72.7 191.5C-114.2 156 -122.9 93 -133.5 34.1C-144 -24.9 -156.5 -79.8 -134.5 -129.4C-112.6 -179.1 -56.3 -223.6 -10.4 -215.2C35.4 -206.9 70.9 -145.9 107.4 -92.9" fill="#f800a9"></path></g></svg></svg>
	</header><!-- .entry-header -->
</div>


<div id="primary" class="site-content">
  <div id="content" role="main">
  
	<?php
		the_content();
		understrap_link_pages();
	?>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' ); ?>
    <?php endwhile; // end of the loop. ?>

	<div class="site-categories">
	<a href='/comedy' class="site-category">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kei-pink-suit.webp" alt="Kei performing standup comedy">
		<h2>Comedy</h2>
	</a>
	<a href='/acting' class="site-category">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kei-grey.webp" alt="Kei performing standup comedy">
		<h2>Acting</h2>
	</a>
	<a href='/books' class="site-category">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kei-book.webp" alt="Kei performing standup comedy">
		<h2>Books</h2>
	</a>
</div>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>