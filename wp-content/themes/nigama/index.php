<?php
/**
 * The template for displaying all pages.
 * 
 * @package nigama
 */
get_header();
?>

    <div id="primary">
        <main id="main" class="site-main mt-5 " role="main">
		<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container text-center py-5">
		<h2 class="display-3 text-white mb-4  slideInDown">Events</h2>
            
        </div>
    </div>
            
<div class="container px-lg-5 py-5">
        <div class="row">
		<?php $query = new WP_Query( array( 'category__in' => 3 ) ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		 	<div class="col-md-4 mb-4">
				<div class="card h-100">
					<article>
						<div class="blog-image">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>

						<div class="card-body">
							<header class="entry-header">
								<h5 class="card-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo str_replace(' ^ ', ' ', get_the_title()); ?></a></h5>
							</header><!-- .entry-header -->

							<div class="entry-content">

<!-- 								<?php the_excerpt(); ?> -->
								
								<p><a href="<?php the_permalink(); ?>" class="light-blue"><strong>Read More <i class="fas fa-caret-right" aria-hidden="true"></i></strong></a></p>
								
							</div><!-- .entry-content -->
						</div><!-- /card-body -->

					</article><!-- #post-## -->
				</div>
			</div>
	
 		<?php endwhile; endif; ?>

		</div>
        </div><!-- /row -->

        </main>
    </div>



<?php get_footer();?>