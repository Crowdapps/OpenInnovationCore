<?php
// Template Name: Blog
?>

<div class="main list fl">
	
	<div class="section-head-container clear">
		<div class="section-head">
			<?php if ( is_search() ) : ?>
				<h2><?php printf( __( '%d result(s) matching "%s"', APP_TD ), $wp_query->found_posts, '<span>' . get_search_query() . '</span>' ); ?></h2>
			<?php else: ?>
				<h2><?php echo get_blog_page_title(); ?></h2>
			<?php endif; ?></h2>
		</div>
	</div>

	<?php appthemes_before_blog_loop(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php appthemes_before_blog_post(); ?>

		<?php get_template_part( 'content' ); ?>

		<?php appthemes_after_blog_post(); ?>

	<?php endwhile; ?>

	<?php appthemes_after_blog_loop(); ?>

	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav class="pagination">
			<?php appthemes_pagenavi(); ?>
		</nav>
	<?php endif; ?>

</div>

<?php get_sidebar( 'post' ); ?>
