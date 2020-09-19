<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>



	<?php if(is_front_page()): ?>
		<div class="entry-content homepage-containersize">
		<?php endif; ?>
		<?php


		// This website includes custom pages that allow the user
		// to manipulate the site beyond what the text editor offers.
		// Depending on what URL path we are at, we'll render different pages.

		$page_url = get_permalink();
		$split_array = explode('/', $page_url);

		if ( $split_array[3] == 'tutorials' ) {

			get_template_part( 'template-parts/content', 'tutorials' );
		}

		elseif ($split_array[3] == 'projects' ) {
						get_template_part( 'template-parts/content', 'projects' );
			// code...
		}
		else{
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		}
		?>

	<?php if(is_front_page()): ?>
		</div> 	<!-- .entry-content -->
		<?php include('news_images.php');?>
		<br>
		<?php include('proud_projects.php');?>
		<br>
		<?php include('resume.php');?>

<?php endif; ?>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
