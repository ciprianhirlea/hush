<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

		<div class="row">

			<div class="large-12 small-12 columns no-padding internal-header">
				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  					the_post_thumbnail();
				} 
				?>
			</div>

		</div>

		<div class="row">

			<div class="large-8 small-12 columns no-padding">
				
				<div id="contact-content">

					<?php while (have_posts()) : the_post(); ?>

						<?php the_content() ?>

						

					<?php endwhile ?>

				</div>

			</div>

			<div class="large-4 small-12 columns no-padding">
				
				<div id="side-content" class="contact">

					<?php while (have_posts()) : the_post(); ?>

						<span>T.</span><a href="tel:<?php the_field('contact_details_tel', 'option'); ?>"><?php the_field('contact_details_tel_style', 'option'); ?></a>
						<br><br>
						<span>E.</span><a href="mailto:<?php the_field('contact_details_email', 'option'); ?>"><?php the_field('contact_details_email', 'option'); ?></a>
						<br><br>
						<a href="<?php the_field('contact_details_tw', 'option'); ?>"><i class="fab fa-twitter" style="margin-right:8px"></i></a>
						<a href="<?php the_field('contact_details_fb', 'option'); ?>"><i class="fab fa-facebook-f" style="margin-right:8px"></i></i></a>
						<a href="<?php the_field('contact_details_ig', 'option'); ?>"><i class="fab fa-instagram"></i></i></a>
					<?php endwhile ?>

				</div>

			</div>

		</div>	
	
		<?php include (TEMPLATEPATH . '/includes/bottom-content.php'); ?>

	</section>
	<!-- /section -->

<?php get_footer(); ?>