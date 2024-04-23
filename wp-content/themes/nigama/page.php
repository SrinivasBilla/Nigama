<?php
/**
 * Page Template
 * 
 * @package nigama
 */
get_header();
?>


<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

	<div class="mast py-4">
		<div class="top py-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /mast-bg -->

<?php
	if ($post->post_parent == 2991) {
		get_template_part( 'template-parts/content', 'orange-nav' );
	}
?>

<div class="page-content py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; else : ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="mast py-4">
			<div class="top py-4">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>NEED CONTENT</h1>

							<h4>Empty Page</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- #content -->
</div><!-- /mast-bg -->

<?php endif; ?>

<?php get_footer();?>