<?php get_header(); ?>

	<!-- section -->
	<section role="main">
	
	<?php the_post(); ?>
	
		<h1><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

	<?php if ( get_the_author_meta('description')) : ?>
	
	<?php echo get_avatar(get_the_author_meta('user_email')); ?>
	
		<h2><?php _e( 'About', 'html5blank' ); echo get_the_author() ; ?></h2>
	
	<?php the_author_meta('description'); ?>
	
	<?php endif; ?>
	
	<?php rewind_posts(); while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /Post title -->
			
			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<!-- /post details -->
			
			<?php windmill_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /article -->	
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
