<?php
/**
 * Single Post Contet Template
 * 
 * @package nigama
 */
?>       
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	<!----------<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-6 offset-md-1 pb-3">
			<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
		</div>
	</div>-------->
	
			<?php the_content(); ?>
		

</article><!-- #post-## -->