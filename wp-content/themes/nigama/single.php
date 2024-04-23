<?php
/**
 * Single Post Template
 * 
 * @package nigama
 */
get_header();
?>

<link rel="stylesheet" href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	<script src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js"></script> 
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container text-center py-5">
		<span class="d-block mb-3 text-white aos-init aos-animate" data-aos="fade-up">September 2023</span>
            <h2 class="display-3 text-white mb-4  slideInDown"><?php echo str_replace(' ^ ', '<br />', get_the_title()); ?></h2>
            
        </div>
    </div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
<div class="wrapper pt-3 pb-5" id="single-wrapper">

	<div id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->
</div>
<div class="col-md-4">
<div class="sidebar">
<h3 class="text-black">Other Events</h3>
<?php  $args = array('category__in' => 3, 'post__not_in'   => array( $post->ID )
    );
	$query = new WP_Query(  $args  ); 
	 while ( $query->have_posts() ) : $query->the_post(); ?>
	 <div class="sidebar-links">
<h5 class="card-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo str_replace(' ^ ', ' ', get_the_title()); ?></a></h5>
</div>
<?php endwhile; ?>
		 </div>
		 </div>
		 </div>
<div class="container">
	<div class="prev-link"><?php previous_post_link(); ?></div>
	<div class="nextlink"><?php next_post_link(); ?></div>
</div>
<?php get_footer();?>