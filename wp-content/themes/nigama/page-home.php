<?php
/**
 *  Template Name: Home Page
 * 
 * @package nigama
 */
get_header();
?>
<div class="mast pt-4 pb-5 pb-md-0 " id="home-section">
		<div class="top pt-md-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
					<h1 class="display-1 text-white mb-5 animated slideInRight"><?php the_field('mast_headline'); ?></h1>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>

        <div class="d-flex flex-column flex-lg-row justify-content-lg-center panel  intro-engage">
        <?php if( have_rows('box_a') ): 
			 while( have_rows('box_a') ): the_row(); ?>
			 <div class="item item-blue text-center">
			<div class="intro-border">
			
		 <h2><?php the_sub_field('headline'); ?></h2>
                <p><?php the_sub_field('content'); ?></p>
		 </div>
		 </div>
				<?php endwhile; ?>
                <?php endif; ?>
				
		<?php if( have_rows('box_b') ): 
		  while( have_rows('box_b') ): the_row(); ?>		
        <div class="item item-green text-center">
		<div class="intro-border">
		<h2><?php the_sub_field('headline'); ?></h2>
                <p><?php the_sub_field('content'); ?></p>
		</div>
		</div>
		<?php endwhile; ?>
                <?php endif; ?>
		<?php if( have_rows('box_c') ): 
		  while( have_rows('box_c') ): the_row(); ?>
        <div class="item item-lime text-center">
		<div class="intro-border">
		<h2><?php the_sub_field('headline'); ?></h2>
                <p><?php the_sub_field('content'); ?></p>
		</div>
        </div>
		</div>
		<?php endwhile; ?>
                <?php endif; ?>
<!-----------ABOUT- US--------->
<div class="about-banner  site-section"  id="about-section">
        <div class="container">
		<?php if( have_rows('about') ): 
		  while( have_rows('about') ): the_row(); ?>
		<div class="text-center">
                    <h2><?php the_sub_field('headline'); ?></h2>
                    <p class="text-black"><?php the_sub_field('content'); ?></p>
                </div>
				
				<div class="row">
                    <div class="col-lg-6 mb-4">
                        <iframe style="margin-top:80px; max-width:527px" width="100%" height="296" src="<?php the_sub_field('video_url'); ?>" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-lg-5 ml-auto align-self-lg-center">
                        <h3 class="text-blue mb-4 text-uppercase"><?php the_sub_field('right_heading'); ?></h2>
                        <p class="text-black"><?php the_sub_field('rigtht_content'); ?></p>
                    </div>
                </div>
				<?php endwhile; ?>
                <?php endif; ?>
				<div class="row py-5">
				<div class="col-md-3">
				<div class="count_box box_hover text-center">
                        <h2><span class="timer">20</span></h2>
						<div class="border-line"></div>
                        <span class="caption text-black">Number of Charities</span>
                    </div>
                         </div>
						 <div class="col-md-3">
				<div class="count_box box_hover text-center">
                        <h2><span class="timer">1500</span>+</h2>
						<div class="border-line"></div>
                        <span class="caption text-black">Number of Beneficiaries</span>
                    </div>
                         </div>
						 <div class="col-md-3">
				<div class="count_box box_hover text-center">
                        <h2><span class="timer">500</span>+</h2>
						<div class="border-line"></div>
                        <span class="caption text-black">Number of Volunteers</span>
                    </div>
                         </div>
						 <div class="col-md-3">
				<div class="count_box box_hover text-center">
                        <h2><span class="timer">7</span></h2>
						<div class="border-line"></div>
                        <span class="caption text-black">Number of years served</span>
                    </div>
                         </div>
						</div>
        </div>
</div>
<!-----------ABOUT- US--------->
<div class="container site-section">
	<div class="row">
	<?php if( have_rows('our_mission') ): 
		  while( have_rows('our_mission') ): the_row(); ?>
		<div class="col-md-6">
		<img src="<?php the_sub_field('image'); ?>" alt="Image" class="img-fluid">
		</div>
		<div class="col-md-5 ml-auto align-self-lg-center">
                        <h3 class="text-blue mb-4 text-uppercase"><?php the_sub_field('heading'); ?></h3>
                        <p class="text-black"><?php the_sub_field('content'); ?></p>
        </div>
		<?php endwhile; ?>
                <?php endif; ?>
		<?php if( have_rows('csr') ): 
		  while( have_rows('csr') ): the_row(); ?>
		<div class="col-md-5 mr-auto align-self-lg-center g-5">
                        <h3 class="text-blue mb-4 text-uppercase"><?php the_sub_field('heading'); ?></h3>
                        <p class="text-black"><?php the_sub_field('content'); ?></p>
        </div>
		
		<div class="col-md-6 g-5">
		<img src="<?php the_sub_field('image'); ?>" alt="Image" class="img-fluid">
		</div>
		<?php endwhile; ?>
                <?php endif; ?>
	</div>
</div>


<!-----------Education--------->
<?php if( have_rows('events') ): 
		  while( have_rows('events') ): the_row(); ?>
<div class="about-banner site-section"  id="events-section">
        <div class="container text-center py-5">
			<div class="row">
		  <?php if( have_rows('uravakonda_school') ): 
		  while( have_rows('uravakonda_school') ): the_row(); ?>
				<div class="col-md-4">
				<img src="<?php the_sub_field('image'); ?>" alt="Image" class="img-fluid">
				<h3 class="text-white mt-3"><?php the_sub_field('title'); ?></h3>
				</div>
				<?php endwhile; ?>
                <?php endif; ?>
		  <?php if( have_rows('saraswathi-vidyamandir') ): 
		  while( have_rows('saraswathi-vidyamandir') ): the_row(); ?>
				<div class="col-md-4">
				<img src="<?php the_sub_field('image'); ?>" alt="Image" class="img-fluid">
				<h3 class="text-white mt-3"><?php the_sub_field('title'); ?></h3>
				</div>
				<?php endwhile; ?>
                <?php endif; ?>
		  <?php if( have_rows('uravakonda_school') ): 
		  while( have_rows('uravakonda_school') ): the_row(); ?>
				<div class="col-md-4">
				<img src="<?php the_sub_field('image'); ?>" alt="Image" class="img-fluid">
				<h3 class="text-white mt-3"><?php the_sub_field('title'); ?></h3>
				</div>
				<?php endwhile; ?>
                <?php endif; ?>
			</div>
			<a class="btn btn-secondary rounded-pill text-white py-3 px-5" href="">More Events</a>
		</div>
</div>
<?php endwhile; ?>
                <?php endif; ?>
				
<!-----------About Sameer--------->
<?php if( have_rows('profile') ): 
		  while( have_rows('profile') ): the_row(); ?>
<div class="container site-section">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<p><?php the_sub_field('content'); ?></p>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
				<div class="profile">
			<div class="row">
				<div class="col-md-4">	
				<img src="<?php the_sub_field('image'); ?>" alt="Image" class="img-fluid">
				</div>
				<div class="col-md-8">
				<h4 class="font-size-20"><?php the_sub_field('name'); ?></h3>
                <p><?php the_sub_field('subheading'); ?></p>
                <div class="block-social-1">
                <a href="<?php the_sub_field('linkedin'); ?>" class="btn border-w-2 rounded primary-primary-outline--hover" target="_blank"><span class="icon-linkedin"></span></a>
                </div>
				</div>
               </div>
			</div>
		</div>
	</div>

</div>
<?php endwhile; ?>
                <?php endif; ?>

			
<!-----------Donate Now--------->
<div class="about-banner py-5"  id="donate-section">
   <div class="container py-5">
    <div class="row align-items-center justify-content-center">
     <div class="col-lg-5 text-center">
	 <h3 class="text-white">Make A Donation Now! You May Change Lives Forever</h3>
       <div class="box">
         <a class="btn btn-primary px-4 py-3 btn-block text-white" href="#popup1">
          Donate Now
            </a></div>
			</div>
		</div>
	</div>
	</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#donate-section">&times;</a>
		<div class="content">
		<h3 class="text-blue text-center">
                    Thank You
                </h3>
                <p class="donate">Thank you for choosing to donate to the Nigama Foundation! Please send us a <a href="mailto: info@iic.com">message</a> to request further details.</p>
                <p>Your kindness will further empower our efforts towards nurturing hope and delivering dignity to the countless individuals who need it most in the communities we operate by supporting primary school education and providing essential care to vulnerable members of our society.<br>
                    We encourage you to stay connected with us! By following our journey, you can see the ongoing impact of your generosity and join us in our future endeavors.<br> Once again, thank you from the bottom of our hearts. Your support is not just a donation - it's a path to delivering hope and dignity.<br>
                    <p>

					</div>
	</div>
</div>
</div>
	
<!-----------TESTIMONIALS--------->

<?php if( have_rows('testimonials') ): 
		  while( have_rows('testimonials') ): the_row(); ?>
<div class="container site-section"  id="testimonials-section">
<?php the_sub_field('content'); ?>
</div>
<?php endwhile; ?>
                <?php endif; ?>

<!----------Contact Us ----------->
<div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
					<h2 class="text-blue text-uppercase">Contact Us</h2>
                    </div>
				</div>
				<div class="row justify-content-center">
                    <div class="col-lg-6 mb-5">
					
                    </div>
                </div>
			</div>
</div>

<?php get_footer();?>

