<?php

/*
Template Name: My Custom Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header laurensheader">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'featured-image' ); ?>
		</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<span class="entry-format-badge genericon genericon-document"><span class="screen-reader-text"><?php _e( 'Page', 'writr' ); ?></span></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'writr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'writr' ), '<footer class="entry-meta"><ul class="clear"><li class="edit-link"><div class="genericon genericon-edit"></div> ', '</li></ul></footer>' ); ?>
</article><!-- #post-## -->


				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>