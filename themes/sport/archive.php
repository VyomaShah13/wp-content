<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sport
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header entry-header" style="background-image:url('/wp-content/uploads/2021/02/hero-banner.jpg')">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

			the_posts_navigation([
				'prev_text'          => '← Older Posts',
				'next_text'          => 'Newer Posts →',
				'class' => 'container',
			]);
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
		?>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
