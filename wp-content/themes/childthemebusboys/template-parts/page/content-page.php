<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
 <!--added background image for final project template -->
 <!-- added functionality for the background photo to repeat with text and cover the avalible area on the page -->
 <!-- Identifided the page that would be the final project template and put an if statement for it to hold all the custom post types -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (get_the_ID() == 23): ?>
			<div style="width: 100%;
						height: 150px;
						background: url('http://i.imgur.com/zIX04Sv.jpg') no-repeat;
						background-size: cover;">			
			</div>
			<div style="width: 100%;
						background: url('http://i.imgur.com/vpsBmUF.jpg');
						background-size: 80%;">
				<div style="width: 500px; margin-left: 25%;">
					<p><?php the_content(); ?></p>
				</div>
			</div>
	<?php else: ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php twentyseventeen_edit_link( get_the_ID() ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">		
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif ?>
</article><!-- #post-## -->
