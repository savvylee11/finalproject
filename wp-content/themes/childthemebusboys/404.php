<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
	<!-- added colors and new laungage to customize the 404 page -->
					<h1 style="color: #4cc167;" class="page-title"<?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
					<!-- added a new photo to the 404 page -->
				<img src="http://i.imgur.com/c3EsGRf.png" 
				width="2000"
				height="5000" />
				</header><!-- .page-header -->
				<div class="page-content"
				style="margin-top: 212px;
				       color: #8a2adc;">
					<p><?php _e( 'It looks like this page is still a caterpillar. Maybe try a search?', 'twentyseventeen' ); ?></p>
					<!-- added new language and coors for the 404 page -->

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
