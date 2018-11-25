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

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php if(is_front_page()): ?>

	<div style="width:100%; ">
		<img src="http://www.samanthasunne.com/wp-content/uploads/2016/10/wapo.png" width = 20%></img>
		<img src="http://www.samanthasunne.com/wp-content/uploads/2016/09/reuters.png" width =  20%></img>
		<img src="http://www.samanthasunne.com/wp-content/uploads/2016/09/source.png" width =  75px></img>
		<img src="http://www.samanthasunne.com/wp-content/uploads/2016/09/api.png" width= 20%</img>
		<img src="http://www.samanthasunne.com/wp-content/uploads/2016/09/npr.png" width=20% </img>

	</div>
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
