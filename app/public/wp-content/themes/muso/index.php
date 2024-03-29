  <div id="splash">
    <div id="splash_logo">
      <img src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/4-1-4/img/loading.svg" alt="" class="fadeUp">
    </div>
  </div>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
